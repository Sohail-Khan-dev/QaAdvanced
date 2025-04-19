@extends('layout')

@section('title', isset($category) ? 'Quiz - ' . $category->name : 'Quiz')
@push('head')
    <link href="{{ asset('css/quiz.css') }}" rel="stylesheet">
@endpush

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-primary display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">
                @if(isset($category))
                    {{ $category->name }} MCQS PREPARATION
                @else
                    MCQS PREPARATION
                @endif
            </h3>
                {{-- <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('qa/quiz') }}" class="text-dark">Quiz</a></li>
                    <li class="breadcrumb-item active text-primary">
                        @if(isset($category))
                            {{ $category->name }}
                        @else
                            MCQS
                        @endif
                    </li>
                </ol> --}}
        </div>
    </div>
    <!-- Header End -->

    <!-- Banner Start -->
    @include('partials.banner')

    <!-- Banner End -->

    <!-- quizes section  Start -->
    <div class="container-fluid class bg-light py-5">
        <div class="container py-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">
                    @if(isset($category))
                        {{ $category->name }} Quizzes
                    @else
                        Our Top Quizes
                    @endif
                </h4>
                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">
                    @if(isset($category))
                        {{ $category->description ?? 'Test your knowledge' }}
                    @else
                        Quiz for everyone
                    @endif
                </h1>
            </div>
            <div class="d-flex gap-4">
                <div class="panel-heading fadeInUp wow" data-wow-delay=".5s">
                    <p class="heading-text d-flex justify-content-center mb-n5 p-4 h4">@if(isset($category)) {{ $category->name }} @endif topic based tests - foundation level
                    </p>
                    <div class="pt-5 w-100 bg-white mt-5 rounded-bottom quiz-parent-div">
                        <div class="class-item bg-white rounded row m-0 gap-4">
                            @if($quizzes->count() == 0)
                                <p class="text-center">No Quizzes Found</p>
                            @endif
                            @foreach ($quizzes as $quiz)
                            <div class="rounded w-auto border col-4">
                                <div class="question-content p-4">
                                    <a href="#" class="h4 mb-3 d-block">{{ $quiz->title }}</a>
                                    <p class="mb-3"> {{ $quiz->description }} </p>
                                    <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="{{ route('quiz-detail', $quiz->id) }}">Solve Quiz</a>
                                    <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="{{ route('quiz-detail', $quiz->id) }}">View Questions</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="panel-heading fadeInUp wow m-0" data-wow-delay=".5s">
                    <p class="heading-text d-flex justify-content-center p-4 h4">ISTQB full mock tests - foundation level </p>
                    <div class="quiz-links w-100 bg-white rounded-bottom">
                        <div class="d-flex align-items-center justify-content-evenly pt-2">
                            <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-green"></i><i class="fa fa-unlock-alt fa-stack-1x fa-inverse"></i></span>
                            <a href="mode.php?tn=17" class="style2"> ISTQB foundation level test 1</a>
                        </div>
                        <div class="d-flex align-items-center justify-content-evenly pt-2">
                            <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-green"></i><i class="fa fa-unlock-alt fa-stack-1x fa-inverse"></i></span>
                            <a href="mode.php?tn=17" class="style2"> ISTQB foundation level test 1</a>
                        </div>
                        <div class="d-flex align-items-center justify-content-evenly pt-2">
                            <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-green"></i><i class="fa fa-unlock-alt fa-stack-1x fa-inverse"></i></span>
                            <a href="mode.php?tn=17" class="style2"> ISTQB foundation level test 1</a>
                        </div>
                        <div class="d-flex align-items-center justify-content-evenly pt-2">
                            <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-green"></i><i class="fa fa-unlock-alt fa-stack-1x fa-inverse"></i></span>
                            <a href="mode.php?tn=17" class="style2"> ISTQB foundation level test 1</a>
                        </div>
                        <div class="d-flex align-items-center justify-content-evenly pt-2">
                            <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-green"></i><i class="fa fa-unlock-alt fa-stack-1x fa-inverse"></i></span>
                            <a href="mode.php?tn=17" class="style2"> ISTQB foundation level test 1</a>
                        </div>
                        <div class="d-flex align-items-center justify-content-evenly pt-2">
                            <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-green"></i><i class="fa fa-unlock-alt fa-stack-1x fa-inverse"></i></span>
                            <a href="mode.php?tn=17" class="style2"> ISTQB foundation level test 1</a>
                        </div>
                        <div class="d-flex align-items-center justify-content-evenly pt-2">
                            <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-green"></i><i class="fa fa-unlock-alt fa-stack-1x fa-inverse"></i></span>
                            <a href="mode.php?tn=17" class="style2"> ISTQB foundation level test 1</a>
                        </div>
                        <div class="d-flex align-items-center justify-content-evenly pt-2">
                            <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-green"></i><i class="fa fa-unlock-alt fa-stack-1x fa-inverse"></i></span>
                            <a href="mode.php?tn=17" class="style2"> ISTQB foundation level test 1</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
