<nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0 border-bottom" style="z-index: 1021">
    <a href="#" class="navbar-brand p-0">
        <h1 class="text-primary m-0"><i class="fas fa-biohazard me-3"></i>Just Quality</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="/" class="nav-item nav-link">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Quiz</a>
                <div class="dropdown-menu m-0">
                    @php $quiz_categories = \App\Models\QuizCategory::all(); @endphp
                    @foreach ($quiz_categories as $category)
                    <a href="{{ url("qa/quiz/{$category->name}") }}" class="dropdown-item">{{ $category->name }}</a>
                    @endforeach
                    {{-- <a href={{ url("qa/quiz") }} class="dropdown-item">ISTQB 40 MCQS</a>
                    <a href={{ url("qa/training") }} class="dropdown-item">Topic wise MCQS</a> --}}
                </div>
            </div>


            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Automation</a>
                <div class="dropdown-menu m-0">
                    <a href={{ url("qa/automation") }} class="dropdown-item">Automation</a>
                    <a href={{ url("qa/aitoollist") }} class="dropdown-item">AI Automation Tool list</a>
                </div>
            </div>

            <a href={{ url("qa/guide") }} class="nav-item nav-link">ISTQB Guide</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Learn</a>
                <div class="dropdown-menu m-0">
                    @php $categories = \App\Models\LearningCategory::all(); @endphp
                    @foreach ($categories as $category)
                    <a href="{{ url("show-syllabus/{$category->id}") }}" class="dropdown-item">{{ $category->name }}</a>
                    @endforeach

                </div>
            </div>
            <a href={{ url("qa/blog") }} class="nav-item nav-link">Blogs</a>
            <a href={{ url("qa/about") }} class="nav-item nav-link">About</a>
            <a href={{ url("qa/contact") }} class="nav-item nav-link">Contact Us</a>
        </div>
        <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4">Register Now</a>
    </div>
</nav>