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

app = Flask(__name__)
app.secret_key = 'blog_agent_secret_key'  # For flash messages

# Create templates and static directories if they don't exist
os.makedirs('templates', exist_ok=True)
os.makedirs('static', exist_ok=True)

# Default API endpoint
DEFAULT_API_ENDPOINT = "http://qaadvanced.test/api/blogs"

# Default search URLs
DEFAULT_SEARCH_URLS = [
    "https://medium.com/@zubairkhansh",
]

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
search_urls = DEFAULT_SEARCH_URLS.copy()
seen_titles = set()
posts_count = 0
errors_count = 0
log_messages = []
rate_limit = 3  # Default rate limit in seconds
selected_category = "AI"
api_endpoint = DEFAULT_API_ENDPOINT

def log_message(message):
    """Add a timestamped message to the log"""
    timestamp = datetime.now().strftime("%H:%M:%S")
    log_entry = f"[{timestamp}] {message}"
    log_messages.append(log_entry)
    # Keep only the last 100 messages
    if len(log_messages) > 100:
        log_messages.pop(0)
    return log_entry

def fetch_full_blog_content(link):
    """Fetch the full content of a blog post, including images and formatting, but excluding title, author, and metadata."""
    try:
        log_message(f"📄 Fetching full content from: {link}")
        response = requests.get(link, timeout=10, headers={
            "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36"
        })
        if response.status_code != 200:
            return "Failed to fetch full content."

        soup = BeautifulSoup(response.text, 'html.parser')

        # Remove unnecessary elements
        for script in soup(["script", "style", "nav", "header", "footer", "aside"]):
            script.extract()

        # Try to find the main content
        main_content = soup.find('article') or soup.find('main') or soup.find('div', class_=re.compile(r'content|post|article|entry'))

        if not main_content:
            # Fallback to the entire body if no specific content is found
            main_content = soup.find('body')

        if not main_content:
            return "Content not found."

        # Create a new soup object to build clean content
        clean_soup = BeautifulSoup('<div class="blog-content"></div>', 'html.parser')
        content_div = clean_soup.find('div')

        # Remove author information, metadata, and social sharing elements
        author_patterns = re.compile(r'author|byline|bio|profile|avatar|headshot|social-share|share-buttons|metadata|post-meta|entry-meta')
        for element in main_content.find_all(class_=author_patterns):
            element.extract()

        # Also remove elements with author-related IDs
        for element in main_content.find_all(id=author_patterns):
            element.extract()

        # Remove time elements and publication dates
        for time_elem in main_content.find_all(['time']):
            time_elem.extract()

        # Extract and fix headings - preserve only h2-h6, convert h1 to h2
        headings = main_content.find_all(['h1', 'h2', 'h3', 'h4', 'h5', 'h6'])
        for heading in headings:
            # Convert h1 to h2 to avoid duplicate main headings
            if heading.name == 'h1':
                new_heading = clean_soup.new_tag('h2')
                new_heading.string = heading.get_text(strip=True)
                content_div.append(new_heading)
            else:
                # Copy other headings as they are
                new_heading = clean_soup.new_tag(heading.name)
                new_heading.string = heading.get_text(strip=True)
                content_div.append(new_heading)
            heading.extract()  # Remove the original heading

        # Process paragraphs and text content
        for paragraph in main_content.find_all('p'):
            # Skip empty paragraphs or those with just whitespace
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
        for img in main_content.find_all('img'):
            # Skip likely author images
            img_src = img.get('src', '')
            img_alt = img.get('alt', '').lower()
            img_class = ' '.join(img.get('class', [])).lower()

            # Skip author images based on common patterns
            if any(term in img_alt for term in ['author', 'profile', 'avatar']) or \
               any(term in img_class for term in ['author', 'profile', 'avatar']) or \
               any(term in img_src.lower() for term in ['author', 'profile', 'avatar']):
                continue

            # Process remaining images
            if img_src and not (img_src.startswith('data:')):
                # Fix relative URLs
                if not (img_src.startswith('http://') or img_src.startswith('https://')):
                    base_url = '/'.join(link.split('/')[:3])  # Get domain part
                    img_src = base_url + ('' if img_src.startswith('/') else '/') + img_src

                # Create new clean image tag
                new_img = clean_soup.new_tag('img')
                new_img['src'] = img_src
                new_img['alt'] = img.get('alt', 'Blog image')
                new_img['loading'] = 'lazy'
                new_img['class'] = 'img-fluid'
                content_div.append(new_img)

        # Add some spacing between images and paragraphs
        content_html = str(content_div)
        content_html = content_html.replace('</p><img', '</p>\n<img')
        content_html = content_html.replace('</img><p', '</img>\n<p')

        # Ensure the content is not too short
        if len(content_html) < 100:
            return "Content too short or not found."

        return content_html

    except Exception as e:
        log_message(f"❗ Error fetching full content: {str(e)}")
        return "Error fetching content."

def run_agent():
    """Main agent function that runs in a separate thread"""
    global agent_running, posts_count, errors_count, seen_titles

    while agent_running:
        # Get a random URL from our list
        url = random.choice(search_urls)
        log_message(f"🌐 Searching: {url}")

        try:
            # Get the selected category
            category_name = CATEGORIES.get(selected_category, "Artificial Intelligence")

            # Fetch the blog listing page
            response = requests.get(url, timeout=10, headers={
                "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36"
            })

            if response.status_code != 200:
                log_message(f"❌ Failed to access {url}: {response.status_code}")
                errors_count += 1
                time.sleep(30)  # Wait longer before trying again
                continue

            soup = BeautifulSoup(response.text, 'html.parser')

            # Try different selectors for articles based on common blog structures
            articles = soup.find_all('article') or soup.select('.post, .article, .blog-post, .entry')

            if not articles:
                # Try to find divs that might contain articles
                articles = soup.select('div.post, div.article, div.entry, div.blog-item')

                # If still no articles, try to find any div with content
                if not articles:
                    articles = soup.select('div.content, div.main, div.body')

            # If we still don't have articles, try to find list items
            if not articles:
                articles = soup.select('li.post, li.article, li.entry')

            # Get only the last 3 posts (most recent)
            # First, try to sort by date if possible
            sorted_articles = []

            # Look for date information in articles
            for article in articles:
                date_elem = article.find(['time', 'span', 'div'], class_=re.compile(r'date|time|published|posted'))
                date_text = ''
                if date_elem:
                    date_text = date_elem.get_text(strip=True)

                # If no dedicated date element, try to find date patterns in the article text
                if not date_text:
                    article_text = article.get_text()
                    date_matches = re.search(r'\d{1,2}[/-]\d{1,2}[/-]\d{2,4}|\w+ \d{1,2},? \d{4}', article_text)
                    if date_matches:
                        date_text = date_matches.group(0)

                sorted_articles.append((article, date_text))

            # If we found dates, sort by them (most recent first)
            # Otherwise, assume the articles are already in reverse chronological order (newest first)
            if any(date for _, date in sorted_articles):
                try:
                    # Try different date formats
                    from dateutil import parser
                    sorted_articles.sort(key=lambda x: parser.parse(x[1]) if x[1] else datetime.now(), reverse=True)
                except (ImportError, ValueError):
                    # If parsing fails, keep original order
                    pass

            # Get the articles back from the sorted list
            articles = [article for article, _ in sorted_articles]

            # Limit to the 3 most recent posts
            articles = articles[:3]

            log_message(f"📊 Found {len(articles)} recent blog posts")

            if not articles:
                log_message(f"⚠️ Could not find any articles on {url}")
                errors_count += 1
                time.sleep(30)
                continue

            for article in articles:
                if not agent_running:
                    break

                # Find title
                title_tag = article.find('h1') or article.find('h2') or article.find('h3')
                if not title_tag:
                    continue

                title = title_tag.text.strip()
                # Clean up the title
                title = re.sub(r'\s+', ' ', title).strip()

                if title in seen_titles:
                    log_message(f"⭐️ Skipping already seen: {title}")
                    continue

                log_message(f"📝 Found blog: {title}")

                # Find link to full article
                link = None
                if title_tag.find('a'):
                    link = title_tag.find('a').get('href')
                else:
                    # Look for any link in the article
                    link_tag = article.find('a', class_=re.compile(r'read|more|link'))
                    if not link_tag:
                        link_tag = article.find('a')
                    if link_tag:
                        link = link_tag.get('href')

                # Make sure link is absolute
                if link and not (link.startswith('http://') or link.startswith('https://')):
                    # Handle relative URLs
                    base_url = '/'.join(url.split('/')[:3])  # Get domain part
                    link = base_url + ('' if link.startswith('/') else '/') + link

                content = "No content found."

                # If we have a link, fetch the full content
                if link:
                    content = fetch_full_blog_content(link)
                else:
                    # Try to extract content from the article preview
                    content_tags = article.find_all('p')
                    if content_tags:
                        content = '\n\n'.join([p.text.strip() for p in content_tags])

                # Ensure content is not too short
                if len(content) < 100:
                    log_message(f"⚠️ Content too short for: {title}")
                    errors_count += 1
                    continue

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

            # Wait before checking the next source
            time.sleep(30)

        except Exception as e:
            log_message(f"❗ Error during blog search: {str(e)}")
            errors_count += 1
            time.sleep(60)  # Wait longer after an error

    log_message(f"🛑 Agent stopped - Total Posts: {posts_count}, Errors: {errors_count}")

@app.route('/')
def index():
    """Main page with agent controls and log"""
    return render_template('blog_agent.html',
                          search_urls=search_urls,
                          categories=CATEGORIES,
                          selected_category=selected_category,
                          api_endpoint=api_endpoint,
                          rate_limit=rate_limit,
                          agent_running=agent_running,
                          posts_count=posts_count,
                          errors_count=errors_count,
                          log_messages=log_messages,
                          now=datetime.now().strftime("%H:%M:%S"))

@app.route('/add_url', methods=['POST'])
def add_url():
    """Add a new URL to the search list"""
    url = request.form.get('url', '').strip()

    if url and url.startswith('http'):
        if url not in search_urls:
            search_urls.append(url)
            log_message(f"✅ Added new blog source: {url}")
            flash(f"Added new blog source: {url}", "success")
        else:
            flash("This URL is already in the list.", "warning")
    else:
        flash("Please enter a valid URL starting with http:// or https://", "danger")

    return redirect(url_for('index'))

@app.route('/remove_url', methods=['POST'])
def remove_url():
    """Remove a URL from the search list"""
    url = request.form.get('url', '').strip()

    if url in search_urls:
        search_urls.remove(url)
        log_message(f"🗑️ Removed blog source: {url}")
        flash(f"Removed blog source: {url}", "success")
    else:
        flash("URL not found in the list.", "warning")

    return redirect(url_for('index'))

@app.route('/start_agent', methods=['POST'])
def start_agent():
    """Start the agent in a separate thread"""
    global agent_running, agent_thread, api_endpoint, selected_category, rate_limit

    if agent_running:
        flash("Agent is already running.", "warning")
        return redirect(url_for('index'))

    # Check if we have URLs to search
    if not search_urls:
        flash("Please add at least one blog source URL before starting the agent.", "warning")
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

    log_message("🚀 Agent started searching for blogs...")
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
    log_message("🤖 AI Blog Agent initialized and ready!")
    log_message("📊 Add blog sources or use the defaults")
    log_message("🚀 Click 'Start Agent' to begin fetching blogs")

    # Run the Flask app
    app.run(debug=True, host='0.0.0.0', port=5000)
