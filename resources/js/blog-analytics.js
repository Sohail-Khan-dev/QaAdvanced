// Blog Analytics for Firebase
document.addEventListener('DOMContentLoaded', function() {
    let firebaseAnalytics = null;
    if (window.firebaseAnalytics) {
        firebaseAnalytics = window.firebaseAnalytics;
    }

    // Blog state tracking
    let blogState = {
        blogId: null,
        blogTitle: null,
        category: null,
        startTime: null,
        endTime: null,
        readProgress: 0,
        timeSpent: 0
    };

    // Initialize blog tracking
    function initializeBlogTracking() {
        const blogContent = document.querySelector('.blog-content, .article-content, .post-content');
        if (blogContent) {
            // Extract blog information
            const blogTitle = document.querySelector('h1, h2')?.textContent || 'Unknown Blog';
            const blogId = document.querySelector('[data-blog-id]')?.getAttribute('data-blog-id') || null;
            const category = document.querySelector('[data-category]')?.getAttribute('data-category') || null;
            
            blogState.blogTitle = blogTitle;
            blogState.blogId = blogId;
            blogState.category = category;
            blogState.startTime = new Date();
            
            // Track blog view
            if (firebaseAnalytics) {
                firebaseAnalytics.trackBlogInteraction('blog_viewed', blogId, category);
                firebaseAnalytics.trackUserEngagement('blog_session_start', {
                    blog_title: blogTitle,
                    blog_id: blogId,
                    category: category,
                    timestamp: blogState.startTime.toISOString()
                });
            }
        }
    }

    // Track reading progress
    function trackReadingProgress(progress) {
        if (firebaseAnalytics && progress > blogState.readProgress) {
            blogState.readProgress = progress;
            
            firebaseAnalytics.trackUserEngagement('blog_reading_progress', {
                blog_title: blogState.blogTitle,
                blog_id: blogState.blogId,
                progress_percentage: progress,
                category: blogState.category
            });
        }
    }

    // Track blog sharing
    function trackBlogShare(shareMethod) {
        if (firebaseAnalytics) {
            firebaseAnalytics.trackBlogInteraction('blog_shared', blogState.blogId, blogState.category);
            firebaseAnalytics.trackUserEngagement('blog_share', {
                blog_title: blogState.blogTitle,
                blog_id: blogState.blogId,
                share_method: shareMethod,
                category: blogState.category
            });
        }
    }

    // Track blog bookmark
    function trackBlogBookmark(action) {
        if (firebaseAnalytics) {
            firebaseAnalytics.trackBlogInteraction(`blog_${action}`, blogState.blogId, blogState.category);
            firebaseAnalytics.trackUserEngagement('blog_bookmark', {
                blog_title: blogState.blogTitle,
                blog_id: blogState.blogId,
                action: action,
                category: blogState.category
            });
        }
    }

    // Track blog comment
    function trackBlogComment(action) {
        if (firebaseAnalytics) {
            firebaseAnalytics.trackUserEngagement('blog_comment', {
                blog_title: blogState.blogTitle,
                blog_id: blogState.blogId,
                action: action,
                category: blogState.category
            });
        }
    }

    // Track blog search
    function trackBlogSearch(searchTerm, resultsCount) {
        if (firebaseAnalytics) {
            firebaseAnalytics.trackSearch(searchTerm, resultsCount);
            firebaseAnalytics.trackUserEngagement('blog_search', {
                search_term: searchTerm,
                results_count: resultsCount,
                category: blogState.category
            });
        }
    }

    // Track blog category filter
    function trackCategoryFilter(category) {
        if (firebaseAnalytics) {
            firebaseAnalytics.trackUserEngagement('blog_category_filter', {
                category: category,
                page_name: window.location.pathname
            });
        }
    }

    // Track blog completion
    function trackBlogCompletion() {
        if (firebaseAnalytics) {
            const endTime = new Date();
            const timeSpent = (endTime - blogState.startTime) / 1000; // in seconds
            
            firebaseAnalytics.trackBlogInteraction('blog_completed', blogState.blogId, blogState.category);
            firebaseAnalytics.trackUserEngagement('blog_completion', {
                blog_title: blogState.blogTitle,
                blog_id: blogState.blogId,
                category: blogState.category,
                time_spent_seconds: timeSpent,
                read_progress: blogState.readProgress,
                timestamp: endTime.toISOString()
            });
        }
    }

    // Track blog abandonment
    function trackBlogAbandonment() {
        if (firebaseAnalytics) {
            const endTime = new Date();
            const timeSpent = (endTime - blogState.startTime) / 1000;
            
            firebaseAnalytics.trackBlogInteraction('blog_abandoned', blogState.blogId, blogState.category);
            firebaseAnalytics.trackUserEngagement('blog_abandonment', {
                blog_title: blogState.blogTitle,
                blog_id: blogState.blogId,
                category: blogState.category,
                time_spent_seconds: timeSpent,
                read_progress: blogState.readProgress,
                timestamp: endTime.toISOString()
            });
        }
    }

    // Initialize tracking when page loads
    initializeBlogTracking();

    // Track reading progress based on scroll
    let scrollTracking = false;
    window.addEventListener('scroll', function() {
        if (!scrollTracking) return;
        
        const scrollTop = window.pageYOffset;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const scrollPercent = Math.round((scrollTop / docHeight) * 100);
        
        trackReadingProgress(scrollPercent);
    });

    // Track page unload (blog abandonment)
    window.addEventListener('beforeunload', function() {
        if (blogState.startTime && !blogState.endTime) {
            trackBlogAbandonment();
        }
    });

    // Track share buttons
    document.addEventListener('click', function(e) {
        const shareButton = e.target.closest('[data-share]');
        if (shareButton) {
            const shareMethod = shareButton.getAttribute('data-share');
            trackBlogShare(shareMethod);
        }
    });

    // Track bookmark buttons
    document.addEventListener('click', function(e) {
        const bookmarkButton = e.target.closest('[data-bookmark]');
        if (bookmarkButton) {
            const action = bookmarkButton.getAttribute('data-bookmark');
            trackBlogBookmark(action);
        }
    });

    // Track comment interactions
    document.addEventListener('click', function(e) {
        const commentButton = e.target.closest('[data-comment-action]');
        if (commentButton) {
            const action = commentButton.getAttribute('data-comment-action');
            trackBlogComment(action);
        }
    });

    // Track search functionality
    const searchForm = document.querySelector('form[data-search]');
    if (searchForm) {
        searchForm.addEventListener('submit', function(e) {
            const searchInput = this.querySelector('input[type="search"], input[name="search"]');
            if (searchInput) {
                const searchTerm = searchInput.value.trim();
                if (searchTerm) {
                    trackBlogSearch(searchTerm, 0); // Results count will be updated after search
                }
            }
        });
    }

    // Track category filters
    document.addEventListener('click', function(e) {
        const categoryLink = e.target.closest('[data-category-filter]');
        if (categoryLink) {
            const category = categoryLink.getAttribute('data-category-filter');
            trackCategoryFilter(category);
        }
    });

    // Make functions available globally for external use
    window.blogAnalytics = {
        trackReadingProgress,
        trackBlogShare,
        trackBlogBookmark,
        trackBlogComment,
        trackBlogSearch,
        trackCategoryFilter,
        trackBlogCompletion,
        trackBlogAbandonment,
        blogState
    };
}); 