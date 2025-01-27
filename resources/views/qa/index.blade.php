@extends('layout')

@section('title', 'QA Advance ')

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
            <div class="class-carousel owl-carousel pt-5 wow fadeInUp" data-wow-delay="0.1s">
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
            </div>
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
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">View All Quizzes</a>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <h1>Comming Soon </h1>
                {{-- <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="event-item rounded">
                        <div class="position-relative">
                            <img src="img/service-1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            <div class="bg-primary text-white fw-bold rounded d-inline-block position-absolute p-2"
                                style="top: 0; right: 0;">JAN 20</div>
                            <div class="d-flex justify-content-between border-start border-end bg-white px-2 py-2 w-100 position-absolute"
                                style="bottom: 0; left: 0; opacity: 0.8;">
                                <a href="#" class="text-dark"><i class="fas fa-clock text-primary"></i> 08:00AM -
                                    10:00PM</a>
                                <a href="#" class="text-dark"><span
                                        class="fas fa-map-marker-alt text-primary"></span> New York</a>
                            </div>
                        </div>
                        <div class="border border-top-0 rounded-bottom p-4">
                            <a href="#" class="h4 mb-3 d-block">Open House - Springs Dance</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero
                                excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Watch Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="event-item rounded">
                        <div class="position-relative">
                            <img src="img/service-2.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            <div class="bg-primary text-white rounded d-inline-block position-absolute p-2"
                                style="top: 0; right: 0;">JUN 30</div>
                            <div class="d-flex justify-content-between border-start border-end bg-white px-2 py-2 w-100 position-absolute"
                                style="bottom: 0; left: 0; opacity: 0.8;">
                                <a href="#" class="text-dark"><i class="fas fa-clock text-primary"></i> 08:00AM -
                                    10:00PM</a>
                                <a href="#" class="text-dark"><span
                                        class="fas fa-map-marker-alt text-primary"></span> New York</a>
                            </div>
                        </div>
                        <div class="border rounded-bottom p-4">
                            <a href="#" class="h4 mb-3 d-block">Open House And Registration</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero
                                excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Watch Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="event-item rounded">
                        <div class="position-relative">
                            <img src="img/service-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            <div class="bg-primary text-white rounded d-inline-block position-absolute p-2"
                                style="top: 0; right: 0;">MAY 15</div>
                            <div class="d-flex justify-content-between border-start border-end bg-white px-2 py-2 w-100 position-absolute"
                                style="bottom: 0; left: 0; opacity: 0.8;">
                                <a href="#" class="text-dark"><i class="fas fa-clock text-primary"></i> 08:00AM -
                                    10:00PM</a>
                                <a href="#" class="text-dark"><span
                                        class="fas fa-map-marker-alt text-primary"></span> New York</a>
                            </div>
                        </div>
                        <div class="border rounded-bottom p-4">
                            <a href="#" class="h4 mb-3 d-block">Open House Morris Dance</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero
                                excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Watch Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="event-item rounded">
                        <div class="position-relative">
                            <img src="img/service-4.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            <div class="bg-primary text-white rounded d-inline-block position-absolute p-2"
                                style="top: 0; right: 0;">APR 2</div>
                            <div class="d-flex justify-content-between border-start border-end bg-white px-2 py-2 w-100 position-absolute"
                                style="bottom: 0; left: 0; opacity: 0.8;">
                                <a href="#" class="text-dark"><i class="fas fa-clock text-primary"></i> 08:00AM -
                                    10:00PM</a>
                                <a href="#" class="text-dark"><span
                                        class="fas fa-map-marker-alt text-primary"></span> New York</a>
                            </div>
                        </div>
                        <div class="border rounded-bottom p-4">
                            <a href="#" class="h4 mb-3 d-block">Open House Dance Studio</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero
                                excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Watch Now</a>
                        </div>
                    </div>
                </div> --}}
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
                <H1>Comming Soon . . .</H1>
                {{-- <div class="blog-item bg-white rounded wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-img rounded-top">
                        <img src="img/class-1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="bg-light rounded-bottom p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <a href="#" class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 28
                                August 2021</a>
                            <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3
                                Comments</a>
                        </div>
                        <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi
                            blanditiis quidem</p>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
                <div class="blog-item bg-white rounded wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-img rounded-top">
                        <img src="img/class-2.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="bg-light rounded-bottom p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <a href="#" class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 28
                                August 2021</a>
                            <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3
                                Comments</a>
                        </div>
                        <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi
                            blanditiis quidem</p>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
                <div class="blog-item bg-white rounded wow fadeInUp" data-wow-delay="0.5s">
                    <div class="blog-img rounded-top">
                        <img src="img/class-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="bg-light rounded-bottom p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <a href="#" class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 28
                                August 2021</a>
                            <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3
                                Comments</a>
                        </div>
                        <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi
                            blanditiis quidem</p>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
                <div class="blog-item bg-white rounded wow fadeInUp" data-wow-delay="0.7s">
                    <div class="blog-img rounded-top">
                        <img src="img/class-1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="bg-light rounded-bottom p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <a href="#" class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 28
                                August 2021</a>
                            <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3
                                Comments</a>
                        </div>
                        <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi
                            blanditiis quidem</p>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Blogs End -->


    <!-- Team Start -->
    <!-- <div class="container-fluid team pb-5">
        <div class="container pb-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Top Instructor</h4>
                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Our Professional Instructor</h1>
            </div>
            <div class="team-carousel owl-carousel pt-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item border rounded wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-img bg-secondary rounded-top">
                        <img src="img/team-1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        <div class="team-icon">
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center p-4">
                        <a href="#" class="h4">Emily Ava</a>
                        <p class="mb-0 text-primary">Instructor</p>
                    </div>
                </div>
                <div class="team-item border rounded wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-img bg-secondary rounded-top">
                        <img src="img/team-2.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        <div class="team-icon">
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center p-4">
                        <a href="#" class="h4">Emily Ava</a>
                        <p class="mb-0 text-primary">Instructor</p>
                    </div>
                </div>
                <div class="team-item border rounded wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-img bg-secondary rounded-top">
                        <img src="img/team-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        <div class="team-icon">
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center p-4">
                        <a href="#" class="h4">Emily Ava</a>
                        <p class="mb-0 text-primary">Instructor</p>
                    </div>
                </div>
                <div class="team-item border rounded wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-img bg-secondary rounded-top">
                        <img src="img/team-4.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        <div class="team-icon">
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center p-4">
                        <a href="#" class="h4">Emily Ava</a>
                        <p class="mb-0 text-primary">Instructor</p>
                    </div>
                </div>
                <div class="team-item border rounded wow fadeInUp" data-wow-delay="0.9s">
                    <div class="team-img bg-secondary rounded-top">
                        <img src="img/team-4.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        <div class="team-icon">
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center p-4">
                        <a href="#" class="h4">Emily Ava</a>
                        <p class="mb-0 text-primary">Instructor</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->


    <!-- Testimonial Start -->
    <!-- <div class="container-fluid testimonial pb-5">
        <div class="container pb-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">OUR CLIENTS RIVIEWS</h4>
                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">What Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel pt-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="testimonial-item border text-center rounded">
                    <div class="rounded-circle position-absolute"
                        style="width: 100px; height: 100px; top: 25px; left: 50%; transform: translateX(-50%);">
                        <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" alt="img">
                    </div>
                    <div class="position-relative" style="margin-top: 140px;">
                        <h5 class="mb-0">Person Name</h5>
                        <p>Profession</p>
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-content p-4">
                        <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitati eiusmod tempor incididunt.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item border text-center rounded">
                    <div class="rounded-circle position-absolute"
                        style="width: 100px; height: 100px; top: 25px; left: 50%; transform: translateX(-50%);">
                        <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" alt="img">
                    </div>
                    <div class="position-relative" style="margin-top: 140px;">
                        <h5 class="mb-0">Person Name</h5>
                        <p>Profession</p>
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-content p-4">
                        <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitati eiusmod tempor incididunt.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item border text-center rounded">
                    <div class="rounded-circle position-absolute"
                        style="width: 100px; height: 100px; top: 25px; left: 50%; transform: translateX(-50%);">
                        <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" alt="img">
                    </div>
                    <div class="position-relative" style="margin-top: 140px;">
                        <h5 class="mb-0">Person Name</h5>
                        <p>Profession</p>
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-content p-4">
                        <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitati eiusmod tempor incididunt.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item border text-center rounded">
                    <div class="rounded-circle position-absolute"
                        style="width: 100px; height: 100px; top: 25px; left: 50%; transform: translateX(-50%);">
                        <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" alt="img">
                    </div>
                    <div class="position-relative" style="margin-top: 140px;">
                        <h5 class="mb-0">Person Name</h5>
                        <p>Profession</p>
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-content p-4">
                        <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitati eiusmod tempor incididunt.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->

@endsection
