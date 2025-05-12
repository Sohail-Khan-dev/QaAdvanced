@extends('layout')
@section('title', 'Quiz-details')
@section('content')
@php $questions = $quizDetail->questions ?? [];  @endphp
    <!-- Quiz Questions Container -->
    <div class="container bg-light p-5" style="margin-top : 7rem;" id="quiz-container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="flex-grow-1 text-center">
                <h3 class="mb-4">{{ $quizDetail->title ?? " No Title" }}</h3>
            </div>
            <h6 class="mb-2">
                <span id="question-attempt">1</span> of
                <span class="total-questions">{{ count($questions) }}</span>
            </h6>
        </div>
        <div class="mb-4 question-content" id='question-text'>Question text goes here</div>
        <div class="mb-4">
            <div class="form-check mb-3" id='option1'>
                <input class="form-check-input" type="radio" name="option" id="option_radio1" value="1">
                <label class="form-check-label" for="option_radio1">Option 1</label>
            </div>
            <div class="form-check mb-3" id='option2'>
                <input class="form-check-input" type="radio" name="option" id="option_radio2" value="2">
                <label class="form-check-label" for="option_radio2">Option 2</label>
            </div>
            <div class="form-check mb-3" id='option3'>
                <input class="form-check-input" type="radio" name="option" id="option_radio3" value="3">
                <label class="form-check-label" for="option_radio3">Option 3</label>
            </div>
            <div class="form-check mb-3" id='option4'>
                <input class="form-check-input" type="radio" name="option" id="option_radio4" value="4">
                <label class="form-check-label" for="option_radio4">Option 4</label>
            </div>
        </div>

        <!-- Explanation section (hidden by default, shown in view mode) -->
        <div id="explanation-section" class="mb-4 p-3 border-left border-success" style="display: none; border-left: 4px solid #28a745; background-color: rgba(40, 167, 69, 0.05);">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h5 class="text-success mb-0"><i class="fas fa-info-circle"></i> Explanation</h5>
                <button id="toggle-explanation" class="btn btn-sm btn-outline-success" style="display: none;">Hide</button>
            </div>
            <div id="explanation-text">Explanation will appear here in view mode.</div>
        </div>
        <div class="mb-4 d-flex justify-content-between align-items-center">
            <div>
                <button class="btn btn-primary text-white" id="nex-quiz">
                    @if(isset($view_questions) && $view_questions == 1)
                        View Next
                    @else
                        Next
                    @endif
                </button>
                <button class="btn btn-secondary text-white ms-5" id="prev-quiz" style="display: none;">
                    @if(isset($view_questions) && $view_questions == 1)
                        View Previous
                    @else
                        Previous
                    @endif
                </button>
            </div>

            @if(!isset($view_questions) || $view_questions != 1)
                <div class="text-end">
                    <div class="d-flex flex-column align-items-end">
                        <div>
                            <span class="badge bg-primary">Quiz Time Remaining: <span id="quiz-timer">0:00</span></span>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div>
            <progress class="w-100" value="0" max="100"></progress>
        </div>
    </div>

    <!-- Quiz Results Container (Hidden by Default) -->
    <div class="container bg-light p-5" style="margin-top: 7rem; display: none;" id="results-container">
        <div class="text-center mb-4">
            <h2 class="text-primary">Quiz Results</h2>
            <h4 id="quiz-title" class="mb-3">{{ $quizDetail->title ?? "No Title" }}</h4>
        </div>

        <div class="row mb-4">
            <div class="col-md-6 mb-3">
                <div class="card border-primary h-100">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Score Summary</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="mb-0">Total Questions:</h6>
                            <span id="total-questions-result" class="badge bg-secondary">0</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="mb-0">Attempted:</h6>
                            <span id="attempted-questions" class="badge bg-info">0</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="mb-0">UnAttempted:</h6>
                            <span id="unattempted-questions" class="badge bg-info">0</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="mb-0">Correct Answers:</h6>
                            <span id="correct-answers" class="badge bg-success">0</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="mb-0">Wrong Answers:</h6>
                            <span id="wrong-answers" class="badge bg-danger">0</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Score Percentage:</h6>
                            <span id="score-percentage" class="badge bg-primary">0%</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="mb-0">Time Spent:</h6>
                            <span id="time-spent" class="badge bg-info">0:00</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Total Quiz Time:</h6>
                            <span id="quiz-total-time" class="badge bg-secondary">0:00</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="card border-primary h-100">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Performance Chart</h5>
                    </div>
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <canvas id="results-chart" width="200" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12">
                <div class="card border-primary">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Performance Analysis</h5>
                    </div>
                    <div class="card-body">
                        <div class="progress mb-3" style="height: 25px;">
                            <div id="correct-progress" class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                            <div id="wrong-progress" class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                        </div>
                        <p id="performance-message" class="mb-0 text-center">Complete the quiz to see your performance analysis.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="{{ route('quiz-detail', $quizDetail->id) }}" class="btn btn-outline-primary me-2" id="retry-quiz">Retry Quiz</a>
            <a href="{{ url('qa/quiz/'.$quizDetail->quizCategory->getSlugAttribute()) }}" class="btn btn-primary">Back to Quizzes</a>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- Include Chart.js for the pie chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        $(document).ready(function() {
            var isviewQuestions = @json($view_questions);
            let questions = @json($quizDetail->questions);
            let questionIndex = 0;
            let totalQuestions = questions.length;
            if(totalQuestions == 0) {
                console.log('No questions found');
                return ;
            }
            let progressValue = 100/totalQuestions;

            // Track quiz statistics
            let score = 0;
            let attemptedQuestions = 0;
            let wrongAnswers = 0;
            let userAnswers = [];

            // Timer variables
            const SECONDS_PER_QUESTION = 90; // 90 seconds (1.5 minutes) per question
            const TOTAL_QUIZ_TIME = totalQuestions * SECONDS_PER_QUESTION; // Total quiz time in seconds
            let quizTimeRemaining = TOTAL_QUIZ_TIME;
            let totalSeconds = 0;
            let timerInterval;

            // find the option that have is_correct = 1
            $.each(questions, function(index, question) {
                let correctOption = question.options.find(option => option.is_correct == 1);
                question.correctOption = correctOption || { option: null }; // Provide default if no correct option
            });

            // Initialize the quiz
            loadQuestion(questionIndex);
            updateProgressBar(questionIndex);

            // Start timers if not in view mode
            if (!isviewQuestions) {
                startTimers();
            }

            function loadQuestion(index) {
                $("#question-attempt").text(index + 1);
                $("input[name='option']").prop('checked', false);
                let question = questions[index];
                $('#question-text').html(question.question);

                // Show/hide Previous button based on current question index
                if (index > 0) {
                    $('#prev-quiz').show();
                } else {
                    $('#prev-quiz').hide();
                }

                // Show/hide Next button based on current question index
                if (index >= totalQuestions - 1 && isviewQuestions != 1) {
                    $('#nex-quiz').text('Finish Quiz');
                } else {
                    $('#nex-quiz').text(isviewQuestions == 1 ? 'View Next' : 'Next');
                }

                // Handle view mode specific behaviors
                if(isviewQuestions == 1) {
                    // Disable all radio buttons
                    $('input[name="option"]').prop('disabled', true);

                    // Show and populate explanation
                    if(question.explanation && question.explanation.trim() !== '') {
                        $('#explanation-text').html(question.explanation);
                        $('#explanation-section').show();
                        $('#toggle-explanation').show().text('Hide');
                    } else {
                        $('#explanation-text').html('No explanation available for this question.');
                        $('#explanation-section').show();
                        $('#toggle-explanation').show().text('Hide');
                    }
                } else {
                    // Hide explanation in quiz mode
                    $('#explanation-section').hide();
                }

                for(let i = 1; i <= 4; i++) {
                    let optionDiv = $('#option' + i);
                    if (i <= question.options.length && question.options[i-1].option !== null) {
                        optionDiv.show();
                        let optionLabel = optionDiv.find('label');
                        let optionInput = optionDiv.find('input');

                        // Store the original option text
                        let optionText = question.options[i-1].option;

                        // In view mode, add check/cross marks and apply styling
                        if(isviewQuestions == 1) {
                            // Add check mark for correct answers
                            if(question.options[i-1].is_correct == 1) {
                                optionLabel.html(`<span style="color: green; font-weight: bold;">✓ ${optionText}</span>`);
                                optionInput.prop('checked', true);
                                optionDiv.css('background-color', 'rgba(40, 167, 69, 0.1)');
                            } else {
                                // Add cross mark for incorrect answers
                                optionLabel.html(`<span style="color: red;">✗ ${optionText}</span>`);
                                optionDiv.css('background-color', 'rgba(220, 53, 69, 0.1)');
                            }
                        } else {
                            // Normal mode - just show the option text
                            optionLabel.text(optionText);
                        }

                        optionInput.val(optionText);
                    } else {
                        optionDiv.hide();
                    }
                }

                // In quiz mode, if we have user answers for this question, pre-select the option
                if (!isviewQuestions && userAnswers[index]) {
                    const userAnswer = userAnswers[index].userAnswer;
                    if (userAnswer) {
                        $("input[name='option'][value='" + userAnswer + "']").prop('checked', true);
                    }
                }
            }

            $(document).on("click", "#nex-quiz", function() {
                // find out the selected option
                let selectedOption = $("input[name='option']:checked").val();

                // In quiz mode, process the answer
                if (!isviewQuestions) {
                    // If this is a new question (not previously answered)

                    if (!userAnswers[questionIndex]) {
                        // If option selected, count as attempted
                        if (selectedOption) {
                            attemptedQuestions++;
                        }

                        // Compare with correct option
                        var correctOption = questions[questionIndex].correctOption.option;
                        var isCorrect = !correctOption || selectedOption == correctOption; // Consider it correct if no correct option exists

                        if (isCorrect) {
                            score++;
                        } else {
                            wrongAnswers++;
                        }
                    }
                        // Store user's answer
                        userAnswers[questionIndex] = {
                            question: questions[questionIndex].question,
                            userAnswer: selectedOption,
                            correctAnswer: correctOption || 'No correct answer defined',
                            isCorrect: isCorrect
                        };
                }

                questionIndex++;

                if (questionIndex >= totalQuestions) {
                    if (isviewQuestions != 1) {
                        stopTimers(); // Stop the timers when showing results
                        showResults();
                        return;
                    } else {
                        // In view mode, stay on the last question
                        questionIndex = totalQuestions - 1;
                    }
                }

                loadQuestion(questionIndex);
                updateProgressBar(questionIndex);
            });

            // Handle Previous button click
            $(document).on("click", "#prev-quiz", function() {
                if (questionIndex > 0) {
                    questionIndex--;
                    loadQuestion(questionIndex);
                    updateProgressBar(questionIndex);
                }
            });

            // Handle toggle explanation button click
            $(document).on("click", "#toggle-explanation", function() {
                const $explanationText = $('#explanation-text');
                const $button = $(this);

                if ($explanationText.is(':visible')) {
                    $explanationText.hide();
                    $button.text('Show');
                } else {
                    $explanationText.show();
                    $button.text('Hide');
                }
            });

            function incrementProgressBar() {
                let progressBar = $("progress");
                let currentValue = progressBar.val();
                let maxValue = progressBar.attr("max");

                if (currentValue < maxValue) {
                    progressBar.val(currentValue + progressValue);
                }
            }

            function decrementProgressBar() {
                let progressBar = $("progress");
                let currentValue = progressBar.val();

                if (currentValue > progressValue) {
                    progressBar.val(currentValue - progressValue);
                }
            }

            function updateProgressBar(index) {
                // Set progress bar value based on current question index
                let progressBar = $("progress");
                progressBar.val((index + 1) * progressValue);
            }

            function showResults() {
                // Hide quiz container and show results container
                $("#quiz-container").hide();
                $("#results-container").show();

                // Calculate score percentage
                let scorePercentage = (score / totalQuestions) * 100;
                scorePercentage = Math.round(scorePercentage * 10) / 10; // Round to 1 decimal place

                // Update results statistics
                $("#total-questions-result").text(totalQuestions);
                $("#attempted-questions").text(attemptedQuestions);
                $("#unattempted-questions").text(totalQuestions - attemptedQuestions);
                $("#correct-answers").text(score);
                $("#wrong-answers").text(wrongAnswers);
                $("#score-percentage").text(scorePercentage + "%");
                $("#time-spent").text(formatTime(totalSeconds));
                $("#quiz-total-time").text(formatTime(TOTAL_QUIZ_TIME));

                // Update progress bars
                let correctPercentage = (score / totalQuestions) * 100;
                let wrongPercentage = (wrongAnswers / totalQuestions) * 100;

                $("#correct-progress").css("width", correctPercentage + "%").text(Math.round(correctPercentage) + "% Correct");
                $("#wrong-progress").css("width", wrongPercentage + "%").text(Math.round(wrongPercentage) + "% Wrong");

                // Set performance message based on score
                let performanceMessage = "";
                if (scorePercentage >= 90) {
                    performanceMessage = "Excellent! You have mastered this topic.";
                } else if (scorePercentage >= 70) {
                    performanceMessage = "Good job! You have a solid understanding of this topic.";
                } else if (scorePercentage >= 50) {
                    performanceMessage = "Not bad! With a bit more study, you'll improve your knowledge.";
                } else {
                    performanceMessage = "You need more practice with this topic. Keep studying!";
                }

                $("#performance-message").text(performanceMessage);

                // Create pie chart
                createResultsChart(score, wrongAnswers, totalQuestions - attemptedQuestions);

                // Store quiz attempt in database if user is logged in
                @auth
                    $.ajax({
                        url: '/store-quiz-attempt',
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        data: {
                            quiz_id: {{ $quizDetail->id }},
                            score: score
                        },
                        success: function(response) {
                            console.log('Quiz attempt saved successfully');
                        },
                        error: function(xhr) {
                            console.error('Error saving quiz attempt:', xhr.responseText);
                        }
                    });
                @endauth
            }

            function createResultsChart(correct, wrong, unattempted) {
                const ctx = document.getElementById('results-chart').getContext('2d');

                new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: ['Correct', 'Wrong', 'Unattempted'],
                        datasets: [{
                            data: [correct, wrong, unattempted],
                            backgroundColor: ['#28a745', '#dc3545', '#6c757d'],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }
                });
            }

            // Timer Functions
            function startTimers() {
                // Initialize quiz timer display
                $('#quiz-timer').text(formatTime(quizTimeRemaining));

                // Clear any existing interval
                if (timerInterval) {
                    clearInterval(timerInterval);
                }

                // Start the interval
                timerInterval = setInterval(function() {
                    // Update quiz timer
                    quizTimeRemaining--;
                    $('#quiz-timer').text(formatTime(quizTimeRemaining));

                    // Keep track of total time for results
                    totalSeconds++;

                    // Check if quiz time is up
                    if (quizTimeRemaining <= 0) {
                        // Stop timer and show results
                        stopTimers();
                        showResults();
                        return;
                    }

                    // Change color when time is running low (last 60 seconds)
                    if (quizTimeRemaining <= 60) {
                        $('#quiz-timer').parent().removeClass('bg-primary').addClass('bg-danger');
                    } else {
                        $('#quiz-timer').parent().removeClass('bg-danger').addClass('bg-primary');
                    }
                }, 1000);
            }

            function stopTimers() {
                if (timerInterval) {
                    clearInterval(timerInterval);
                    timerInterval = null;
                }
            }

            function formatTime(seconds) {
                const minutes = Math.floor(seconds / 60);
                const remainingSeconds = seconds % 60;
                return minutes + ':' + (remainingSeconds < 10 ? '0' : '') + remainingSeconds;
            }
        });
    </script>
@endpush


