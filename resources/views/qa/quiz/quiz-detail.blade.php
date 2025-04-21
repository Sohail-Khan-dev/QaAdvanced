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
            <h6 class="mb-2"> <span id="question-attempt">1</span> of <span class="total-questions">{{ count($questions) }}</span></h6>
        </div>
        <h4 class="mb-4" id='question-text'>Question text goes here</h4>
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
        <div class="mb-4 d-flex justify-content-between align-items-center">
            <button class="btn btn-primary text-white" id="nex-quiz">Next</button>
            <div>Timer</div>
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
            <a href="{{ route('quiz-detail', $quizDetail->id) }}" class="btn btn-outline-primary me-2">Retry Quiz</a>
            <a href="{{ url('qa/quiz/'.$quizDetail->quizCategory->name) }}" class="btn btn-primary">Back to Quizzes</a>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- Include Chart.js for the pie chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        $(document).ready(function() {
            let questions = {{$questions}};
            console.log(questions);
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

            // find the option that have is_correct = 1
            $.each(questions, function(index, question) {
                let correctOption = question.options.find(option => option.is_correct == 1);
                question.correctOption = correctOption || { option: null }; // Provide default if no correct option
            });

            loadQuestion(questionIndex);

            function loadQuestion(index) {
                $("#question-attempt").text(index+1);
                $("input[name='option']").prop('checked', false);
                let question = questions[index];                for(let i = 1; i <= 4; i++) {
                    let optionDiv = $('#option' + i);
                    if (i <= question.options.length && question.options[i-1].option !== null) {
                        optionDiv.show();
                        let optionLabel = optionDiv.find('label');
                        let optionInput = optionDiv.find('input');
                        optionLabel.text(question.options[i-1].option);
                        optionInput.val(question.options[i-1].option);
                    } else {
                        optionDiv.hide();
                    }
                }
            }

            $(document).on("click", "#nex-quiz", function() {
                // find out the selected option
                let selectedOption = $("input[name='option']:checked").val();

                // If no option selected, alert the user
                if (selectedOption) {
                    attemptedQuestions++;
                }
                // compare with correct option
                let correctOption = questions[questionIndex].correctOption.option;
                let isCorrect = !correctOption || selectedOption == correctOption; // Consider it correct if no correct option exists

                // Store user's answer
                userAnswers.push({
                    question: questions[questionIndex].question,
                    userAnswer: selectedOption,
                    correctAnswer: correctOption || 'No correct answer defined',
                    isCorrect: isCorrect
                });

                if (isCorrect) {
                    score++;
                } else {
                    wrongAnswers++;
                }

                questionIndex++;

                if (questionIndex >= totalQuestions) {
                    showResults();
                    return;
                }

                loadQuestion(questionIndex);
            });

            function incrimentProgressBar() {
                let progressBar = $("progress");
                let currentValue = progressBar.val();
                let maxValue = progressBar.attr("max");

                if (currentValue < maxValue) {
                    progressBar.val(currentValue + progressValue);
                }
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
        });
    </script>
@endpush

