import os
import requests
from bs4 import BeautifulSoup
import time
import threading
import random
import json
import re
from flask import Flask, render_template, request, jsonify, redirect, url_for, flash
from datetime import datetime
import logging

# Configure logging
logging.basicConfig(level=logging.INFO, format='%(asctime)s - %(levelname)s - %(message)s')
logger = logging.getLogger(__name__)

app = Flask(__name__)
app.secret_key = 'medium_blog_agent_secret_key'  # For flash messages

# Create templates and static directories if they don't exist
os.makedirs('templates', exist_ok=True)
os.makedirs('static', exist_ok=True)

# Default API endpoint
DEFAULT_API_ENDPOINT = "http://qaadvanced.test/api/blogs"

# Medium profile URL
MEDIUM_PROFILE_URL = "https://medium.com/@zubairkhansh"

# Categories mapping
CATEGORIES = {
    "AI": "Artificial Intelligence",
    "ML": "Machine Learning",
    "DL": "Deep Learning",
    "DS": "Data Science",
    "NLP": "Natural Language Processing",
    "CV": "Computer Vision",
}

# Global variables for agent state
agent_running = False
agent_thread = None
posts_count = 0
errors_count = 0
log_messages = []
rate_limit = 3  # Default rate limit in seconds
selected_category = "AI"
api_endpoint = DEFAULT_API_ENDPOINT
seen_titles = set()

def log_message(message):
    """Add a timestamped message to the log"""
    timestamp = datetime.now().strftime("%H:%M:%S")
    log_entry = f"[{timestamp}] {message}"
    log_messages.append(log_entry)
    logger.info(message)
    # Keep only the last 100 messages
    if len(log_messages) > 100:
        log_messages.pop(0)
    return log_entry

def fetch_medium_profile():
    """Fetch the Medium profile page and extract the latest articles"""
    try:
        log_message(f"🌐 Fetching Medium profile: {MEDIUM_PROFILE_URL}")
        
        # Use a proper user agent to avoid being blocked
        headers = {
            "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36",
            "Accept": "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8",
            "Accept-Language": "en-US,en;q=0.5",
            "Referer": "https://medium.com/",
            "DNT": "1",
            "Connection": "keep-alive",
            "Upgrade-Insecure-Requests": "1",
            "Cache-Control": "max-age=0"
        }
        
        response = requests.get(MEDIUM_PROFILE_URL, headers=headers, timeout=15)
        
        if response.status_code != 200:
            log_message(f"❌ Failed to access Medium profile: {response.status_code}")
            return []
            
        soup = BeautifulSoup(response.text, 'html.parser')
        
        # Find all article links on the profile page
        # Medium uses different selectors, so we'll try multiple approaches
        articles = []
        
        # Try to find article cards
        article_cards = soup.select('article') or soup.select('.postArticle') or soup.select('.streamItem')
        
        if not article_cards:
            # Try to find links that might be articles
            links = soup.find_all('a', href=True)
            for link in links:
                href = link.get('href', '')
                # Medium article URLs typically contain '@username/' followed by a slug
                if '@' in href and '/' in href and not '/responses/' in href:
                    if href.startswith('/'):
                        href = 'https://medium.com' + href
                    articles.append({'url': href})
        else:
            # Process article cards
            for card in article_cards:
                # Find the link to the article
                link_tag = card.find('a', href=True)
                if not link_tag:
                    continue
                    
                href = link_tag.get('href', '')
                if not href:
                    continue
                    
                # Make sure it's an absolute URL
                if href.startswith('/'):
                    href = 'https://medium.com' + href
                
                # Find the title
                title_tag = card.find(['h1', 'h2', 'h3']) or link_tag
                title = title_tag.get_text(strip=True) if title_tag else "Untitled Article"
                
                # Find the date if available
                date_tag = card.find(['time']) or card.find(class_=re.compile(r'date|time|published'))
                date = date_tag.get_text(strip=True) if date_tag else ""
                
                articles.append({
                    'url': href,
                    'title': title,
                    'date': date
                })
        
        # If we still don't have articles, try a more generic approach
        if not articles:
            log_message("⚠️ Using fallback method to find Medium articles")
            # Look for any link that looks like a Medium article
            links = soup.find_all('a', href=True)
            for link in links:
                href = link.get('href', '')
                # Check if it's likely a Medium article
                if (href.startswith('https://medium.com/') or href.startswith('/')) and not '/tag/' in href:
                    if href.startswith('/'):
                        href = 'https://medium.com' + href
                    articles.append({'url': href})
        
        log_message(f"📊 Found {len(articles)} articles on Medium profile")
        
        # Limit to the 3 most recent articles
        return articles[:3]
        
    except Exception as e:
        log_message(f"❗ Error fetching Medium profile: {str(e)}")
        return []

def fetch_medium_article(url):
    """Fetch and parse a Medium article"""
    try:
        log_message(f"📄 Fetching Medium article: {url}")
        
        headers = {
            "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36",
            "Accept": "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8",
            "Accept-Language": "en-US,en;q=0.5",
            "Referer": "https://medium.com/",
            "DNT": "1",
            "Connection": "keep-alive",
            "Upgrade-Insecure-Requests": "1"
        }
        
        response = requests.get(url, headers=headers, timeout=15)
        
        if response.status_code != 200:
            log_message(f"❌ Failed to fetch article: {response.status_code}")
            return None
            
        soup = BeautifulSoup(response.text, 'html.parser')
        
        # Extract title
        title_tag = soup.find('h1')
        title = title_tag.get_text(strip=True) if title_tag else "Untitled Article"
        
        # Create a new soup object to build clean content
        clean_soup = BeautifulSoup('<div class="blog-content"></div>', 'html.parser')
        content_div = clean_soup.find('div')
        
        # Find the article content
        # Medium typically uses article tag or specific div classes for content
        article_content = soup.find('article') or soup.find(class_=re.compile(r'article|story|post-content'))
        
        if not article_content:
            # Fallback to the main content area
            article_content = soup.find('main') or soup.find('body')
        
        if not article_content:
            log_message("❌ Could not find article content")
            return None
            
        # Remove author information, metadata, and social sharing elements
        author_patterns = re.compile(r'author|byline|bio|profile|avatar|headshot|social-share|share-buttons|metadata|post-meta|entry-meta')
        for element in article_content.find_all(class_=author_patterns):
            element.extract()
            
        # Also remove elements with author-related IDs
        for element in article_content.find_all(id=author_patterns):
            element.extract()
            
        # Remove time elements and publication dates
        for time_elem in article_content.find_all(['time']):
            time_elem.extract()
            
        # Process headings - preserve hierarchy but ensure h1 is only used for the main title
        headings = article_content.find_all(['h1', 'h2', 'h3', 'h4', 'h5', 'h6'])
        for heading in headings:
            # Skip the main title which we already extracted
            if heading.get_text(strip=True) == title:
                heading.extract()
                continue
                
            # Convert h1 to h2 to avoid duplicate main headings
            if heading.name == 'h1':
                new_heading = clean_soup.new_tag('h2')
            else:
                new_heading = clean_soup.new_tag(heading.name)
                
            new_heading.string = heading.get_text(strip=True)
            content_div.append(new_heading)
            heading.extract()
            
        # Process paragraphs
        for paragraph in article_content.find_all('p'):
            # Skip empty paragraphs
            if not paragraph.get_text(strip=True):
                continue
                
            # Skip paragraphs that might contain author info
            text = paragraph.get_text(strip=True).lower()
            if any(term in text for term in ['written by', 'author:', 'posted by', 'published by', 'about the author']):
                continue
                
            new_p = clean_soup.new_tag('p')
            new_p.string = paragraph.get_text(strip=True)
            content_div.append(new_p)
            
        # Process images - but exclude author images
        for img in article_content.find_all('img'):
            # Skip likely author images
            img_src = img.get('src', '')
            img_alt = img.get('alt', '').lower()
            img_class = ' '.join(img.get('class', [])).lower()
            
            # Skip author images based on common patterns
            if any(term in img_alt for term in ['author', 'profile', 'avatar']) or \
               any(term in img_class for term in ['author', 'profile', 'avatar']) or \
               any(term in img_src.lower() for term in ['author', 'profile', 'avatar']):
                continue
                
            # Skip small images (likely icons or decorations)
            width = img.get('width', '')
            if width and int(width) < 100:
                continue
                
            # Process remaining images
            if img_src and not img_src.startswith('data:'):
                # Create new clean image tag
                new_img = clean_soup.new_tag('img')
                new_img['src'] = img_src
                new_img['alt'] = img.get('alt', 'Article image')
                new_img['loading'] = 'lazy'
                new_img['class'] = 'img-fluid'
                content_div.append(new_img)
                
        # Add some spacing between elements
        content_html = str(content_div)
        content_html = content_html.replace('</p><img', '</p>\n<img')
        content_html = content_html.replace('</img><p', '</img>\n<p')
        
        # Ensure the content is not too short
        if len(content_html) < 100:
            log_message("❌ Article content too short or not found")
            return None
            
        return {
            'title': title,
            'content': content_html,
            'url': url
        }
        
    except Exception as e:
        log_message(f"❗ Error fetching Medium article: {str(e)}")
        return None

def run_agent():
    """Main agent function that runs in a separate thread"""
    global agent_running, posts_count, errors_count, seen_titles
    
    while agent_running:
        try:
            # Get the selected category
            category_name = CATEGORIES.get(selected_category, "Artificial Intelligence")
            
            # Fetch Medium profile to get latest articles
            articles = fetch_medium_profile()
            
            if not articles:
                log_message("⚠️ No articles found on Medium profile")
                time.sleep(60)  # Wait longer before trying again
                continue
                
            for article_info in articles:
                if not agent_running:
                    break
                    
                # Get the article URL
                article_url = article_info.get('url')
                
                # Skip if we've already seen this URL
                if article_url in seen_titles:
                    log_message(f"⭐️ Skipping already seen article: {article_url}")
                    continue
                    
                # Fetch the full article
                article = fetch_medium_article(article_url)
                
                if not article:
                    log_message(f"❌ Failed to fetch article: {article_url}")
                    errors_count += 1
                    continue
                    
                title = article['title']
                content = article['content']
                
                # Skip if we've already seen this title
                if title in seen_titles:
                    log_message(f"⭐️ Skipping already seen article: {title}")
                    continue
                    
                log_message(f"📝 Processing article: {title}")
                
                # Prepare data for API
                data = {
                    "title": title,
                    "content": content,
                    "category_name": category_name
                }
                
                # Send to API with rate limiting
                try:
                    log_message(f"🔤 Preparing to send to API: {title}")
                    
                    # Rate limiting
                    log_message(f"⏱️ Waiting {rate_limit} seconds before API call...")
                    time.sleep(rate_limit)
                    
                    if not agent_running:
                        continue
                        
                    log_message(f"🔤 Sending to API: {title}")
                    
                    # Make the API call
                    headers = {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                    }
                    res = requests.post(api_endpoint, json=data, headers=headers, timeout=15)
                    
                    if res.status_code == 201:
                        log_message(f"✅ Blog posted successfully: {title}")
                        seen_titles.add(title)
                        seen_titles.add(article_url)
                        posts_count += 1
                        
                        # Display response from API
                        try:
                            response_data = res.json()
                            log_message(f"📊 API Response: {response_data.get('message', 'Success')}")
                        except:
                            pass
                    else:
                        log_message(f"❌ Failed to post: {title} - Status: {res.status_code}")
                        errors_count += 1
                        try:
                            error_data = res.json()
                            log_message(f"🔴 Error details: {json.dumps(error_data)}")
                        except:
                            log_message(f"🔴 Response: {res.text[:100]}...")
                except requests.exceptions.RequestException as e:
                    log_message(f"❗ API request error: {str(e)}")
                    errors_count += 1
                    
                # Additional wait after API call
                time.sleep(1)
                
            # Wait before checking for new articles again
            log_message("💤 Waiting 30 minutes before checking for new articles...")
            
            # Check every minute if we should continue running
            for _ in range(30):
                if not agent_running:
                    break
                time.sleep(60)
                
        except Exception as e:
            log_message(f"❗ Error during Medium blog fetch: {str(e)}")
            errors_count += 1
            time.sleep(60)  # Wait longer after an error
            
    log_message(f"🛑 Agent stopped - Total Posts: {posts_count}, Errors: {errors_count}")

@app.route('/')
def index():
    """Main page with agent controls and log"""
    return render_template('blog_agent.html', 
                          search_urls=[MEDIUM_PROFILE_URL],
                          categories=CATEGORIES,
                          selected_category=selected_category,
                          api_endpoint=api_endpoint,
                          rate_limit=rate_limit,
                          agent_running=agent_running,
                          posts_count=posts_count,
                          errors_count=errors_count,
                          log_messages=log_messages,
                          now=datetime.now().strftime("%H:%M:%S"))

@app.route('/start_agent', methods=['POST'])
def start_agent():
    """Start the agent in a separate thread"""
    global agent_running, agent_thread, api_endpoint, selected_category, rate_limit
    
    if agent_running:
        flash("Agent is already running.", "warning")
        return redirect(url_for('index'))
    
    # Update settings from form
    api_endpoint = request.form.get('api_endpoint', DEFAULT_API_ENDPOINT).strip()
    selected_category = request.form.get('category', 'AI')
    try:
        rate_limit = int(request.form.get('rate_limit', 3))
    except ValueError:
        rate_limit = 3
    
    if not api_endpoint or not api_endpoint.startswith('http'):
        flash("Please enter a valid API URL starting with http:// or https://", "danger")
        return redirect(url_for('index'))
    
    # Start the agent
    agent_running = True
    agent_thread = threading.Thread(target=run_agent, daemon=True)
    agent_thread.start()
    
    log_message("🚀 Agent started searching for Medium blogs...")
    flash("Agent started successfully!", "success")
    
    return redirect(url_for('index'))

@app.route('/stop_agent', methods=['POST'])
def stop_agent():
    """Stop the running agent"""
    global agent_running
    
    if not agent_running:
        flash("Agent is not running.", "warning")
        return redirect(url_for('index'))
    
    agent_running = False
    log_message("🛑 Agent stopped")
    flash("Agent stopped successfully.", "success")
    
    return redirect(url_for('index'))

@app.route('/clear_log', methods=['POST'])
def clear_log():
    """Clear the log messages"""
    global log_messages
    log_messages = []
    log_message("🧹 Log cleared")
    flash("Log cleared.", "success")
    
    return redirect(url_for('index'))

@app.route('/get_status', methods=['GET'])
def get_status():
    """API endpoint to get the current status for AJAX updates"""
    return jsonify({
        'agent_running': agent_running,
        'posts_count': posts_count,
        'errors_count': errors_count,
        'log_messages': log_messages[-20:],  # Return only the last 20 messages
    })

if __name__ == '__main__':
    # Initialize with a welcome message
    log_message("🤖 Medium Blog Agent initialized and ready!")
    log_message(f"📊 Configured to fetch blogs from: {MEDIUM_PROFILE_URL}")
    log_message("🚀 Click 'Start Agent' to begin fetching Medium blogs")
    
    # Run the Flask app
    app.run(debug=True, host='0.0.0.0', port=5000)
