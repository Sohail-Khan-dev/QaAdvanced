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

            <!-- Category Filter -->
            <!-- <div class="row mb-4">
                <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                        <label for="category-filter" class="form-label fw-bold">Filter by Category:</label>
                        <select class="form-select" id="category-filter">
                            <option value="">All Categories</option>
                            @php $quiz_categories = \App\Models\QuizCategory::all(); @endphp
                            @foreach ($quiz_categories as $cat)
                                <option value="{{ $cat->id }}" {{ isset($category) && $category->id == $cat->id ? 'selected' : '' }}>
                                    {{ $cat->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                @if(isset($category))
                <div class="col-md-6 col-lg-4 d-flex align-items-end">
                    <a href="{{ url('qa/quiz') }}" class="btn btn-outline-primary">View All Quizzes</a>
                </div>
                @endif
            </div> -->
            <div class="d-flex gap-4">
                <div class="panel-heading fadeInUp wow" data-wow-delay=".5s">
                    <p class="heading-text d-flex justify-content-center mb-n5 p-4 h4">@if(isset($category)) {{ $category->name }} @endif topic based tests - foundation level
                    </p>
                    <div class="pt-5 w-100 bg-white mt-5 rounded-bottom quiz-parent-div">
                        <div class="class-item bg-white rounded p-3">
                            @if($quizzes->count() == 0)
                                <p class="text-center">No Quizzes Found</p>
                            @else
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    @foreach ($quizzes as $quiz)
                                    <div class="col">
                                        <div class="card h-100 border">
                                            <div class="card-body question-content p-4">
                                                <a href="#" class="h4 mb-3 d-block card-title">{{ $quiz->title }}</a>
                                                <p class="card-text mb-3"> {{ $quiz->description }} </p>
                                                <div class="d-flex flex-wrap gap-2 mt-auto">
                                                    <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="{{ route('quiz-detail', $quiz->id) }}">Solve Quiz</a>
                                                    <a class="btn btn-outline-primary rounded-pill py-2 px-4" href="{{ route('quiz-detail', [$quiz->id, true]) }}">View Questions</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- Recent Quiz Attempts -->
                <div class="panel-heading fadeInUp wow m-0 w-100 h-100 " data-wow-delay=".5s">
                    <p class="heading-text d-flex justify-content-center p-4 h5">Last Attempted Quizzes</p>
                    <div class="quiz-links w-100 bg-white rounded-bottom">
                        @guest
                            <div class="p-4 text-center">
                                <p>Please <a href="{{ route('login') }}" class="text-primary">login</a> to see your quiz attempts.</p>
                            </div>
                        @else
                            @if(isset($recentAttempts) && $recentAttempts->count() > 0)
                                @foreach($recentAttempts as $attempt)
                                    <div class="d-flex align-items-center justify-content-between pt-2 px-3">
                                        <div class="d-flex align-items-center">
                                            <span class="fa-stack">
                                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                                <i class="fa fa-check fa-stack-1x fa-inverse"></i>
                                            </span>
                                            <a href="{{ route('quiz-detail', $attempt->quiz_id) }}" class="ms-2">
                                                {{ $attempt->quiz->title }}
                                            </a>
                                        </div>
                                        <div>
                                            <span class="badge bg-primary">Score: {{ $attempt->score }}</span> </br>
                                            <small class="text-muted ms-2">{{ $attempt->completed_at->diffForHumans(['parts' => 1, 'short' => true]) }}</small>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="p-4 text-center">
                                    <p>You haven't attempted any quizzes yet.</p>
                                    <p>Start solving quizzes to see your attempts here!</p>
                                </div>
                            @endif
                        @endguest
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // Handle category filter change
        $('#category-filter').on('change', function() {
            const categoryId = $(this).val();

            if (categoryId) {
                // Find the category in the dropdown
                const categoryName = $('#category-filter option:selected').text().trim();
                const categorySlug = categoryName.toLowerCase().replace(/\s+/g, '-');

                // Redirect to the category-specific page
                window.location.href = "{{ url('qa/quiz') }}/" + categorySlug;
            } else {
                // Redirect to the main quiz page
                window.location.href = "{{ url('qa/quiz') }}";
            }
        });
    });
</script>
@endpush
