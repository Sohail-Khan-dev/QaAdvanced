// User Analytics for Firebase
document.addEventListener('DOMContentLoaded', function() {
    let firebaseAnalytics = null;
    if (window.firebaseAnalytics) {
        firebaseAnalytics = window.firebaseAnalytics;
    }

    // User state tracking
    let userState = {
        isAuthenticated: false,
        userId: null,
        userRole: null,
        loginTime: null,
        sessionDuration: 0
    };

    // Initialize user tracking
    function initializeUserTracking() {
        // Check if user is authenticated (Laravel auth check)
        const authElements = document.querySelectorAll('[data-auth-user]');
        if (authElements.length > 0) {
            userState.isAuthenticated = true;
            userState.userId = document.querySelector('[data-user-id]')?.getAttribute('data-user-id') || null;
            userState.userRole = document.querySelector('[data-user-role]')?.getAttribute('data-user-role') || null;
            userState.loginTime = new Date();
            
            // Set user in Firebase Analytics
            if (firebaseAnalytics && userState.userId) {
                firebaseAnalytics.setUser(userState.userId, {
                    role: userState.userRole,
                    login_time: userState.loginTime.toISOString()
                });
            }
            
            // Track user login
            if (firebaseAnalytics) {
                firebaseAnalytics.trackUserEngagement('user_login', {
                    user_id: userState.userId,
                    user_role: userState.userRole,
                    timestamp: userState.loginTime.toISOString()
                });
            }
        } else {
            // Track anonymous user
            if (firebaseAnalytics) {
                firebaseAnalytics.trackUserEngagement('anonymous_user', {
                    page_name: window.location.pathname,
                    timestamp: new Date().toISOString()
                });
            }
        }
    }

    // Track authentication events
    function trackAuthEvent(eventType, success = true, errorMessage = null) {
        if (firebaseAnalytics) {
            firebaseAnalytics.trackUserEngagement('authentication_event', {
                event_type: eventType,
                success: success,
                error_message: errorMessage,
                timestamp: new Date().toISOString()
            });
        }
    }

    // Track profile updates
    function trackProfileUpdate(fieldName, success = true) {
        if (firebaseAnalytics) {
            firebaseAnalytics.trackUserEngagement('profile_update', {
                field_name: fieldName,
                success: success,
                user_id: userState.userId,
                user_role: userState.userRole,
                timestamp: new Date().toISOString()
            });
        }
    }

    // Track dashboard interactions
    function trackDashboardInteraction(action, details = {}) {
        if (firebaseAnalytics) {
            firebaseAnalytics.trackUserEngagement('dashboard_interaction', {
                action: action,
                user_id: userState.userId,
                user_role: userState.userRole,
                ...details,
                timestamp: new Date().toISOString()
            });
        }
    }

    // Track admin actions
    function trackAdminAction(action, targetId = null, details = {}) {
        if (firebaseAnalytics && userState.userRole === 'admin') {
            firebaseAnalytics.trackUserEngagement('admin_action', {
                action: action,
                target_id: targetId,
                user_id: userState.userId,
                ...details,
                timestamp: new Date().toISOString()
            });
        }
    }

    // Track user logout
    function trackUserLogout() {
        if (firebaseAnalytics) {
            const logoutTime = new Date();
            const sessionDuration = userState.loginTime ? (logoutTime - userState.loginTime) / 1000 : 0;
            
            firebaseAnalytics.trackUserEngagement('user_logout', {
                user_id: userState.userId,
                user_role: userState.userRole,
                session_duration_seconds: sessionDuration,
                timestamp: logoutTime.toISOString()
            });
        }
    }

    // Track user session timeout
    function trackSessionTimeout() {
        if (firebaseAnalytics) {
            const timeoutTime = new Date();
            const sessionDuration = userState.loginTime ? (timeoutTime - userState.loginTime) / 1000 : 0;
            
            firebaseAnalytics.trackUserEngagement('session_timeout', {
                user_id: userState.userId,
                user_role: userState.userRole,
                session_duration_seconds: sessionDuration,
                timestamp: timeoutTime.toISOString()
            });
        }
    }

    // Track user preferences
    function trackUserPreference(preferenceName, value) {
        if (firebaseAnalytics) {
            firebaseAnalytics.trackUserEngagement('user_preference', {
                preference_name: preferenceName,
                preference_value: value,
                user_id: userState.userId,
                user_role: userState.userRole,
                timestamp: new Date().toISOString()
            });
        }
    }

    // Track user feedback
    function trackUserFeedback(feedbackType, rating = null, comment = null) {
        if (firebaseAnalytics) {
            firebaseAnalytics.trackUserEngagement('user_feedback', {
                feedback_type: feedbackType,
                rating: rating,
                has_comment: !!comment,
                user_id: userState.userId,
                user_role: userState.userRole,
                timestamp: new Date().toISOString()
            });
        }
    }

    // Track user help requests
    function trackHelpRequest(helpType, details = {}) {
        if (firebaseAnalytics) {
            firebaseAnalytics.trackUserEngagement('help_request', {
                help_type: helpType,
                user_id: userState.userId,
                user_role: userState.userRole,
                ...details,
                timestamp: new Date().toISOString()
            });
        }
    }

    // Initialize tracking when page loads
    initializeUserTracking();

    // Track logout events
    document.addEventListener('click', function(e) {
        const logoutButton = e.target.closest('[data-logout]');
        if (logoutButton) {
            trackUserLogout();
        }
    });

    // Track profile form submissions
    document.addEventListener('submit', function(e) {
        const profileForm = e.target.closest('form[data-profile-form]');
        if (profileForm) {
            const formData = new FormData(profileForm);
            const updatedFields = [];
            
            for (let [key, value] of formData.entries()) {
                if (value && key !== '_token' && key !== '_method') {
                    updatedFields.push(key);
                }
            }
            
            if (updatedFields.length > 0) {
                updatedFields.forEach(field => {
                    trackProfileUpdate(field, true);
                });
            }
        }
    });

    // Track dashboard navigation
    document.addEventListener('click', function(e) {
        const dashboardLink = e.target.closest('[data-dashboard-action]');
        if (dashboardLink) {
            const action = dashboardLink.getAttribute('data-dashboard-action');
            trackDashboardInteraction(action);
        }
    });

    // Track admin actions
    document.addEventListener('click', function(e) {
        const adminButton = e.target.closest('[data-admin-action]');
        if (adminButton) {
            const action = adminButton.getAttribute('data-admin-action');
            const targetId = adminButton.getAttribute('data-target-id');
            trackAdminAction(action, targetId);
        }
    });

    // Track feedback forms
    document.addEventListener('submit', function(e) {
        const feedbackForm = e.target.closest('form[data-feedback-form]');
        if (feedbackForm) {
            const feedbackType = feedbackForm.getAttribute('data-feedback-type') || 'general';
            const rating = feedbackForm.querySelector('input[name="rating"]:checked')?.value;
            const comment = feedbackForm.querySelector('textarea[name="comment"]')?.value;
            
            trackUserFeedback(feedbackType, rating, comment);
        }
    });

    // Track help requests
    document.addEventListener('click', function(e) {
        const helpButton = e.target.closest('[data-help-request]');
        if (helpButton) {
            const helpType = helpButton.getAttribute('data-help-request');
            trackHelpRequest(helpType);
        }
    });

    // Track session timeout
    let sessionTimeout;
    function resetSessionTimeout() {
        clearTimeout(sessionTimeout);
        sessionTimeout = setTimeout(() => {
            if (userState.isAuthenticated) {
                trackSessionTimeout();
            }
        }, 30 * 60 * 1000); // 30 minutes
    }

    // Reset timeout on user activity
    ['mousedown', 'mousemove', 'keypress', 'scroll', 'touchstart'].forEach(event => {
        document.addEventListener(event, resetSessionTimeout, true);
    });

    // Initialize session timeout
    if (userState.isAuthenticated) {
        resetSessionTimeout();
    }

    // Track page unload for session tracking
    window.addEventListener('beforeunload', function() {
        if (userState.isAuthenticated && userState.loginTime) {
            const unloadTime = new Date();
            const sessionDuration = (unloadTime - userState.loginTime) / 1000;
            
            if (firebaseAnalytics) {
                firebaseAnalytics.trackUserEngagement('session_end', {
                    user_id: userState.userId,
                    user_role: userState.userRole,
                    session_duration_seconds: sessionDuration,
                    timestamp: unloadTime.toISOString()
                });
            }
        }
    });

    // Make functions available globally for external use
    window.userAnalytics = {
        trackAuthEvent,
        trackProfileUpdate,
        trackDashboardInteraction,
        trackAdminAction,
        trackUserLogout,
        trackSessionTimeout,
        trackUserPreference,
        trackUserFeedback,
        trackHelpRequest,
        userState
    };
}); 