@php
    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\Auth;
@endphp

<nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0 border-bottom" style="z-index: 1021">
    <a href="/" class="navbar-brand p-0">
        <h1 class="text-primary m-0"><i class="fas fa-biohazard me-3"></i>QA Advance</h1>
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
                    <a href="{{ url("qa/quiz/{$category->slug}") }}" class="dropdown-item">{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>
            <a href={{ url("qa/guide") }} class="nav-item nav-link">ISTQB Guide</a>
            {{-- Below Code will be Used in Futrue if we add Multiple categories  --}}
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Learn</a>
                <div class="dropdown-menu m-0">
                    @php $categories = \App\Models\LearningCategory::all(); @endphp
                    @foreach ($categories as $category)
                    <a href="{{ route('show.syllabus', ['category_id' => $category->id]) }}" class="dropdown-item">{{ $category->name }}</a>
                    @endforeach
                </div>
            </div> --}}
            <a href="{{ route('show.syllabus', ['category_id' => 1]) }}" class="nav-link nav-item"> ISTQB Topics</a>
            {{-- <div class="nav-item dropdown"> --}}
                <a href={{ url("qa/automation") }}  class="nav-link nav-item">Automation</a>
                {{-- <div class="dropdown-menu m-0">
                    <a href={{ url("qa/automation") }} class="dropdown-item">Automation</a>
                    <a href={{ url("qa/aitoollist") }} class="dropdown-item">AI Automation Tool list</a>
                </div> --}}
            {{-- </div> --}}
            <a href={{ url("qa/blog") }} class="nav-item nav-link">Blogs</a>
            <a href={{ url("qa/about") }} class="nav-item nav-link">About</a>
            <a href={{ url("qa/contact") }} class="nav-item nav-link">Contact Us</a>
        </div>
        @if (Route::has('login'))
            <div class="ms-3">
                @auth
                    @if(Auth::user()->hasDashboardAccess())
                        <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary rounded-pill py-2 px-4 me-2">Dashboard</a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-primary rounded-pill text-white py-2 px-4">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                    <div class="ms-3 d-flex gap-3" style="margin-top: 3px">
                       <p style="margin-bottom:0rem;"> Welcome</p> <b> {{ Auth::user()->name }} </b>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-primary rounded-pill py-2 px-4 me-2">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary rounded-pill text-white py-2 px-4">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</nav>
