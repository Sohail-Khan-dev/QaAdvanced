@extends('layout')
@section('title', 'Quiz-details')
@section('content')
        {{-- @dd($quizDetail->questions) --}}
    <div class="container bg-light p-5" style="margin-top : 7rem;">
    <div class="d-flex justify-content-between align-items-center">
        <div class="flex-grow-1 text-center">
            <h3 class="mb-4">{{ $quizDetail->title }}</h3>
        </div>
        <h6 class="mb-2">1 of 20</h6>
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
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            let questions = {!! json_encode($quizDetail->questions) !!} ;
            let questionIndex = 0;
            let totalQuestions = questions.length;
            if(totalQuestions == 0) {
                console.log('No questions found');
                return ;
            }
            let progressValue = 100/totalQuestions;
            console.log(totalQuestions, questions);
            let score = 0 ;
            // find the option that have is_correct = 1 
            $.each(questions, function(index, question) {
                let correctOption = question.options.find(option => option.is_correct == 1);
                question.correctOption = correctOption;
            });
            loadQuestion(questionIndex);
            function loadQuestion(index) {
                // reset the selected options
                $("input[name='option']").prop('checked', false);
                let question = questions[index];
                console.log("Answer is : " , question.correctOption);
                console.log(question);
                $('#question-text').text(question.question);
                $('#option1').find('label').text(question.options[0].option);
                $('#option1').find('input').val(question.options[0].option);
                $('#option2').find('label').text(question.options[1].option);
                $('#option3').find('input').val(question.options[2].option);
                $('#option3').find('label').text(question.options[2].option);
                $('#option4').find('input').val(question.options[3].option);
                $('#option4').find('label').text(question.options[3].option);
                incrimentProgressBar();
            }
            $(document).on("click", "#nex-quiz", function() {
                console.log('clicked on next quiz');
                // find out the selecteed opton
                let selectedOption = $("input[name='option']:checked").val();
                console.log('Selected option is : ' , selectedOption);
                // compate with correct option
                let correctOption = questions[questionIndex].correctOption.option;
                if(selectedOption == correctOption) {
                    console.log("you are correct");
                    score++;
                }
                questionIndex++;
                if(questionIndex >= totalQuestions) {
                    console.log('Quiz completed');
                    alert('Quiz completed Your score is ' + score);
                    return ;
                }
                loadQuestion(questionIndex);
            });
            function incrimentProgressBar() {
                let progressBar = $("progress");
                let currentValue = progressBar.val();
                let maxValue = progressBar.attr("max");

                if (currentValue < maxValue) {
                    progressBar.val(currentValue + progressValue); // Increment by 10
                }
            }
        });
    </script>
@endpush