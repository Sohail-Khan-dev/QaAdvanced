import { initializeApp } from "firebase/app";
import { getAnalytics, logEvent, setUserId, setUserProperties } from "firebase/analytics";

// Initialize Firebase from environment variables
const firebaseConfig = window.firebaseConfig || {};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);

// Firebase Analytics Event Tracking Functions
export const firebaseAnalytics = {
    // Track page views
    trackPageView: (pageName, pageTitle = null) => {
        try {
            logEvent(analytics, 'page_view', {
                page_title: pageTitle || pageName,
                page_location: window.location.href,
                page_name: pageName
            });
            console.log('Firebase Analytics: Page view tracked for', pageName);
        } catch (error) {
            console.error('Firebase Analytics Error:', error);
        }
    },

    // Track user engagement events
    trackUserEngagement: (eventName, parameters = {}) => {
        try {
            logEvent(analytics, eventName, {
                ...parameters,
                timestamp: new Date().toISOString(),
                user_agent: navigator.userAgent
            });
            console.log('Firebase Analytics: Event tracked', eventName, parameters);
        } catch (error) {
            console.error('Firebase Analytics Error:', error);
        }
    },

    // Track button clicks
    trackButtonClick: (buttonName, pageName = null) => {
        try {
            logEvent(analytics, 'button_click', {
                button_name: buttonName,
                page_name: pageName || window.location.pathname,
                timestamp: new Date().toISOString()
            });
            console.log('Firebase Analytics: Button click tracked', buttonName);
        } catch (error) {
            console.error('Firebase Analytics Error:', error);
        }
    },

    // Track form submissions
    trackFormSubmission: (formName, success = true, errorMessage = null) => {
        try {
            logEvent(analytics, 'form_submission', {
                form_name: formName,
                success: success,
                error_message: errorMessage,
                timestamp: new Date().toISOString()
            });
            console.log('Firebase Analytics: Form submission tracked', formName, success);
        } catch (error) {
            console.error('Firebase Analytics Error:', error);
        }
    },

    // Track quiz interactions
    trackQuizInteraction: (action, quizId = null, questionId = null, category = null) => {
        try {
            logEvent(analytics, 'quiz_interaction', {
                action: action,
                quiz_id: quizId,
                question_id: questionId,
                category: category,
                timestamp: new Date().toISOString()
            });
            console.log('Firebase Analytics: Quiz interaction tracked', action);
        } catch (error) {
            console.error('Firebase Analytics Error:', error);
        }
    },

    // Track blog interactions
    trackBlogInteraction: (action, blogId = null, category = null) => {
        try {
            logEvent(analytics, 'blog_interaction', {
                action: action,
                blog_id: blogId,
                category: category,
                timestamp: new Date().toISOString()
            });
            console.log('Firebase Analytics: Blog interaction tracked', action);
        } catch (error) {
            console.error('Firebase Analytics Error:', error);
        }
    },

    // Track search events
    trackSearch: (searchTerm, resultsCount = 0) => {
        try {
            logEvent(analytics, 'search', {
                search_term: searchTerm,
                results_count: resultsCount,
                timestamp: new Date().toISOString()
            });
            console.log('Firebase Analytics: Search tracked', searchTerm);
        } catch (error) {
            console.error('Firebase Analytics Error:', error);
        }
    },

    // Track navigation events
    trackNavigation: (fromPage, toPage, navigationType = 'link') => {
        try {
            logEvent(analytics, 'navigation', {
                from_page: fromPage,
                to_page: toPage,
                navigation_type: navigationType,
                timestamp: new Date().toISOString()
            });
            console.log('Firebase Analytics: Navigation tracked', fromPage, 'to', toPage);
        } catch (error) {
            console.error('Firebase Analytics Error:', error);
        }
    },

    // Set user ID for authenticated users
    setUser: (userId, userProperties = {}) => {
        try {
            setUserId(analytics, userId);
            if (Object.keys(userProperties).length > 0) {
                setUserProperties(analytics, userProperties);
            }
            console.log('Firebase Analytics: User set', userId);
        } catch (error) {
            console.error('Firebase Analytics Error:', error);
        }
    },

    // Track custom events
    trackCustomEvent: (eventName, parameters = {}) => {
        try {
            logEvent(analytics, eventName, {
                ...parameters,
                timestamp: new Date().toISOString()
            });
            console.log('Firebase Analytics: Custom event tracked', eventName, parameters);
        } catch (error) {
            console.error('Firebase Analytics Error:', error);
        }
    }
};

// Auto-track page views on route changes
document.addEventListener('DOMContentLoaded', function() {
    const currentPage = window.location.pathname;
    const pageTitle = document.title;
    
    // Track initial page load
    firebaseAnalytics.trackPageView(currentPage, pageTitle);
    
    // Track navigation events for internal links
    document.addEventListener('click', function(e) {
        const link = e.target.closest('a');
        if (link && link.href && link.href.startsWith(window.location.origin)) {
            const fromPage = window.location.pathname;
            const toPage = new URL(link.href).pathname;
            
            if (fromPage !== toPage) {
                firebaseAnalytics.trackNavigation(fromPage, toPage, 'link');
            }
        }
    });
});

// Make firebaseAnalytics available globally
window.firebaseAnalytics = firebaseAnalytics;

export { app, analytics }; 