@extends('layout')

@section('title', 'QA Advance ')

<style>
    .mt-index{
        margin-top: 6rem;
    }
</style>
@section('content')
    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="carousel-caption-content p-3" style="max-width: 900px;">
                    <h4 class="text-secondary text-uppercase sub-title fw-bold mb-4 wow fadeInUp" data-wow-delay="0.1s"
                        style="letter-spacing: 3px;">Let's Test!</h4>
                    <h1 class="display-1 text-capitalize text-white mb-4 wow fadeInUp" data-wow-delay="0.3s">Once a Tester, Always a Quality Advocate</h1>
                    <p class="fs-5 wow fadeInUp" data-wow-delay="0.5s">Master ISTQB with QAadvance
                    Achieve software testing excellence and boost your career with expert-led preparation and resources.
                    </p>
                    <div class="pt-2">
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5 m-2 wow fadeInLeft"
                            data-wow-delay="0.1s" href="#">Join Now</a>
                        <a class="btn btn-secondary rounded-pill text-white py-3 px-5 m-2 wow fadeInRight"
                            data-wow-delay="0.3s" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item">
            <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="carousel-caption-content p-3" style="max-width: 900px;">
                    <h4 class="text-secondary text-uppercase sub-title fw-bold mb-4" style="letter-spacing: 3px;">Let's
                        Test</h4>
                    <h1 class="display-1 text-capitalize text-white mb-4">Master ISTQB with QAadvance</h1>
                    Achieve software testing excellence and boost your career with expert-led preparation and resources.</p>
                    </p>
                    <div class="pt-2">
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5 m-2 wow fadeInLeft"
                            data-wow-delay="0.1s" href="#">Join Now</a>
                        <a class="btn btn-secondary rounded-pill text-white py-3 px-5 m-2 wow fadeInRight"
                            data-wow-delay="0.3s" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item">
            <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="carousel-caption-content p-3" style="max-width: 900px;">
                    <h4 class="text-secondary text-uppercase sub-title fw-bold mb-4" style="letter-spacing: 3px;">Let's
                        Test</h4>
                    <h1 class="display-1 text-capitalize text-white mb-4">Once a Tester, Always a Quality Advocate</h1>
                    <p class="fs-5">Master ISTQB with QAadvance
                    Achieve software testing excellence and boost your career with expert-led preparation and resources
                    </p>
                    <div class="pt-2">
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5 m-2 wow fadeInLeft"
                            data-wow-delay="0.1s" href="#">Join Now</a>
                        <a class="btn btn-secondary rounded-pill text-white py-3 px-5 m-2 wow fadeInRight"
                            data-wow-delay="0.3s" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

 @include('partials.banner')

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="border bg-secondary rounded">
                        <img src="img/about-2.png" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-secondary sub-title fw-bold">About QA Advance ISTBQ Preparations </h4>
                    <h1 class="display-3 mb-4"><strong class="text-primary">QA Advance</strong>, We have been empowering testers
                    since 2025 with expert ISTQB preparation.</h1>
                    <p>At QA Advance, we believe in the power of knowledge and skill. Our expert-led ISTQB preparation guides individuals of all levels, from beginners to advanced testers, helping them achieve software testing excellence. We are committed to providing comprehensive resources, fostering confidence, 
                        and supporting every learner in their journey to ISTQB certification.
                    </p>
                    
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Counter Facts Start -->
   @include('partials.counter-facts')
    <!-- Counter Facts End -->


    <!-- Training Start -->
   @include('partials.training')
    <!-- Training End -->


    <!-- Dance Class Start -->
    <div class="container-fluid class bg-light py-5">
        <div class="container py-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">ISTQB Quizzes</h4>
                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">ISTQB Quizzes Preparation</h1>
            </div>
            {{-- <div class="class-carousel owl-carousel pt-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="class-item bg-white rounded wow fadeInUp" data-wow-delay="0.1s">
                    <div class="class-img rounded-top">
                        <img src="img/class-1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi
                            blanditiis quidem</p>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Explore Details</a>
                    </div>
                </div>
                <div class="class-item bg-white rounded wow fadeInUp" data-wow-delay="0.3s">
                    <div class="class-img rounded-top">
                        <img src="img/class-2.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi
                            blanditiis quidem</p>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Explore Details</a>
                    </div>
                </div>
                <div class="class-item bg-white rounded wow fadeInUp" data-wow-delay="0.5s">
                    <div class="class-img rounded-top">
                        <img src="img/class-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi
                            blanditiis quidem</p>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Explore Details</a>
                    </div>
                </div>
                <div class="class-item bg-white rounded wow fadeInUp" data-wow-delay="0.7s">
                    <div class="class-img rounded-top">
                        <img src="img/class-2.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi
                            blanditiis quidem</p>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Explore Details</a>
                    </div>
                </div>
                <div class="class-item bg-white rounded wow fadeInUp" data-wow-delay="0.9s">
                    <div class="class-img rounded-top">
                        <img src="img/class-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi
                            blanditiis quidem</p>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Explore Details</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- Dance Class End -->


    <!-- Events Start -->
    <div class="container-fluid guide py-5">
        <div class="container py-5">
            <div class="pb-5">
                <div class="row g-4 align-items-end">
                    <div class="col-xl-8">
                        <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Topic-Wise</h4>
                        <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">ISTQB Topic-Wise Quizzes</h1>
                    </div>
                    <div class="col-xl-4 text-xl-end pb-3 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{ url('qa/quiz') }}">View All Quizzes</a>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <h1>Comming Soon </h1>
            </div>
        </div>
    </div>
    <!-- Events End -->



    <!-- Blogs Start -->
    <div class="container-fluid blog pb-5">
        <div class="container pb-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Blog & News</h4>
                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Our Latest News & Articles</h1>
            </div>
            <div class="blog-carousel owl-carousel pt-5 wow fadeInUp" data-wow-delay="0.1s">
                <H1>Coming Soon . . .</H1>
            </div>
        </div>
    </div>

@endsection
