// Quiz Analytics for Firebase
document.addEventListener('DOMContentLoaded', function() {
    let firebaseAnalytics = null;
    if (window.firebaseAnalytics) {
        firebaseAnalytics = window.firebaseAnalytics;
    }

    // Quiz state tracking
    let quizState = {
        quizId: null,
        quizTitle: null,
        currentQuestion: 1,
        totalQuestions: 0,
        startTime: null,
        endTime: null,
        answers: [],
        correctAnswers: 0,
        incorrectAnswers: 0,
        unattempted: 0
    };

    // Initialize quiz tracking
    function initializeQuizTracking() {
        const quizContainer = document.getElementById('quiz-container');
        if (quizContainer) {
            // Extract quiz information
            const quizTitle = document.querySelector('h3')?.textContent || 'Unknown Quiz';
            const totalQuestions = document.querySelector('.total-questions')?.textContent || 0;
            
            quizState.quizTitle = quizTitle;
            quizState.totalQuestions = parseInt(totalQuestions);
            quizState.startTime = new Date();
            
            // Track quiz start
            if (firebaseAnalytics) {
                firebaseAnalytics.trackQuizInteraction('quiz_started', null, null, quizTitle);
                firebaseAnalytics.trackUserEngagement('quiz_session_start', {
                    quiz_title: quizTitle,
                    total_questions: quizState.totalQuestions,
                    timestamp: quizState.startTime.toISOString()
                });
            }
        }
    }

    // Track question interactions
    function trackQuestionInteraction(questionNumber, selectedOption, isCorrect = null) {
        if (firebaseAnalytics) {
            firebaseAnalytics.trackQuizInteraction('question_attempted', null, questionNumber, quizState.quizTitle);
            firebaseAnalytics.trackUserEngagement('question_interaction', {
                question_number: questionNumber,
                selected_option: selectedOption,
                is_correct: isCorrect,
                quiz_title: quizState.quizTitle
            });
        }
    }

    // Track answer selection
    function trackAnswerSelection(questionNumber, selectedOption) {
        if (firebaseAnalytics) {
            firebaseAnalytics.trackUserEngagement('answer_selected', {
                question_number: questionNumber,
                selected_option: selectedOption,
                quiz_title: quizState.quizTitle
            });
        }
    }

    // Track quiz completion
    function trackQuizCompletion(results) {
        if (firebaseAnalytics) {
            const endTime = new Date();
            const duration = (endTime - quizState.startTime) / 1000; // in seconds
            
            firebaseAnalytics.trackQuizInteraction('quiz_completed', null, null, quizState.quizTitle);
            firebaseAnalytics.trackUserEngagement('quiz_completion', {
                quiz_title: quizState.quizTitle,
                total_questions: quizState.totalQuestions,
                correct_answers: results.correct || 0,
                incorrect_answers: results.incorrect || 0,
                unattempted: results.unattempted || 0,
                score_percentage: results.scorePercentage || 0,
                duration_seconds: duration,
                timestamp: endTime.toISOString()
            });
        }
    }

    // Track quiz abandonment
    function trackQuizAbandonment() {
        if (firebaseAnalytics) {
            const endTime = new Date();
            const duration = (endTime - quizState.startTime) / 1000;
            
            firebaseAnalytics.trackQuizInteraction('quiz_abandoned', null, null, quizState.quizTitle);
            firebaseAnalytics.trackUserEngagement('quiz_abandonment', {
                quiz_title: quizState.quizTitle,
                current_question: quizState.currentQuestion,
                duration_seconds: duration,
                timestamp: endTime.toISOString()
            });
        }
    }

    // Track timer events
    function trackTimerEvent(eventType, timeRemaining) {
        if (firebaseAnalytics) {
            firebaseAnalytics.trackUserEngagement('quiz_timer_event', {
                event_type: eventType,
                time_remaining: timeRemaining,
                quiz_title: quizState.quizTitle
            });
        }
    }

    // Track explanation viewing
    function trackExplanationView(questionNumber) {
        if (firebaseAnalytics) {
            firebaseAnalytics.trackUserEngagement('explanation_viewed', {
                question_number: questionNumber,
                quiz_title: quizState.quizTitle
            });
        }
    }

    // Track navigation between questions
    function trackQuestionNavigation(fromQuestion, toQuestion, direction) {
        if (firebaseAnalytics) {
            firebaseAnalytics.trackUserEngagement('question_navigation', {
                from_question: fromQuestion,
                to_question: toQuestion,
                direction: direction,
                quiz_title: quizState.quizTitle
            });
        }
    }

    // Track view mode interactions
    function trackViewModeInteraction(action, questionNumber) {
        if (firebaseAnalytics) {
            firebaseAnalytics.trackUserEngagement('view_mode_interaction', {
                action: action,
                question_number: questionNumber,
                quiz_title: quizState.quizTitle
            });
        }
    }

    // Initialize tracking when page loads
    initializeQuizTracking();

    // Track page unload (quiz abandonment)
    window.addEventListener('beforeunload', function() {
        if (quizState.startTime && !quizState.endTime) {
            trackQuizAbandonment();
        }
    });

    // Make functions available globally for external use
    window.quizAnalytics = {
        trackQuestionInteraction,
        trackAnswerSelection,
        trackQuizCompletion,
        trackQuizAbandonment,
        trackTimerEvent,
        trackExplanationView,
        trackQuestionNavigation,
        trackViewModeInteraction,
        quizState
    };
}); 