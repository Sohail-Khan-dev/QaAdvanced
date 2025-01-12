@extends('layout')

@section('title', 'Dance Training')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-primary display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Blog & News</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-dark">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Blogs</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Banner Start -->
    <div class="container-fluid bg-secondary wow zoomInDown" data-wow-delay="0.1s">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center text-center p-5">
                <h1 class="me-4"><span class="fw-normal">Join us today for </span><span> your first dance</span></h1>
                <a href="#" class="text-white fw-bold fs-2"> <i class="fa fa-phone me-1"></i> 714-783-2205</a>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Blogs Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Blog & News</h4>
                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Our Latest News & Articles</h1>
            </div>
            <div class="blog-carousel owl-carousel pt-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-item bg-white rounded wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-img rounded-top">
                        <img src="img/class-1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="bg-light rounded-bottom p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <a href="#" class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 28 August
                                2021</a>
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
                            <a href="#" class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 28 August
                                2021</a>
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
                            <a href="#" class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 28 August
                                2021</a>
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
                            <a href="#" class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 28 August
                                2021</a>
                            <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3
                                Comments</a>
                        </div>
                        <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi
                            blanditiis quidem</p>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blogs End -->


    <!-- Counter Facts Start -->
    <div class="container-fluid counter-facts py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="counter">
                        <div class="counter-icon w-100 d-flex align-items-center justify-content-center">
                            <h3>Dance Classes</h3>
                        </div>
                        <div class="counter-content d-flex align-items-center justify-content-center mt-4">
                            <span class="counter-value" data-toggle="counter-up">158</span>
                            <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="counter">
                        <div class="counter-icon w-100 d-flex align-items-center justify-content-center">
                            <h3>Best Instructor</h3>
                        </div>
                        <div class="counter-content d-flex align-items-center justify-content-center mt-4">
                            <span class="counter-value" data-toggle="counter-up">49</span>
                            <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="counter">
                        <div class="counter-icon w-100 d-flex align-items-center justify-content-center">
                            <h3>Total Brunch</h3>
                        </div>
                        <div class="counter-content d-flex align-items-center justify-content-center mt-4">
                            <span class="counter-value" data-toggle="counter-up">17</span>
                            <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="counter">
                        <div class="counter-icon w-100 d-flex align-items-center justify-content-center">
                            <h3>Happy customer</h3>
                        </div>
                        <div class="counter-content d-flex align-items-center justify-content-center mt-4">
                            <span class="counter-value" data-toggle="counter-up">567</span>
                            <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Facts End -->


    <!-- Training Start -->
    <div class="container-fluid training py-5">
        <div class="container py-5">
            <div class="pb-5">
                <div class="row g-4 align-items-end">
                    <div class="col-xl-8">
                        <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Dance Training
                        </h4>
                        <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Our Training Platform</h1>
                    </div>
                    <div class="col-xl-4 text-xl-end wow fadeInUp" data-wow-delay="0.3s">
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">View All Training</a>
                    </div>
                </div>
            </div>
            <div class="training-carousel owl-carousel pt-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="training-item bg-white rounded wow fadeInUp" data-wow-delay="0.1s">
                    <div class="training-img rounded-top">
                        <img src="img/service-1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        <h1 class="fs-1 fw-bold bg-primary text-white d-inline-block rounded p-2 position-absolute"
                            style="top: 0; left: 0;">01</h1>
                    </div>
                    <div class="rounded-bottom border border-top-0 p-4">
                        <a href="#" class="h4 mb-3 d-block">Dance Theater</a>
                        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi
                            blanditiis quidem</p>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
                <div class="training-item bg-white rounded wow fadeInUp" data-wow-delay="0.3s">
                    <div class="training-img rounded-top">
                        <img src="img/service-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        <h1 class="fs-1 fw-bold bg-primary text-white d-inline-block rounded p-2 position-absolute"
                            style="top: 0; left: 0;">02</h1>
                    </div>
                    <div class="rounded-bottom border border-top-0 p-4">
                        <a href="#" class="h4 mb-3 d-block">Personalized Learning</a>
                        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi
                            blanditiis quidem</p>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
                <div class="training-item bg-white rounded wow fadeInUp" data-wow-delay="0.5s">
                    <div class="training-img rounded-top">
                        <img src="img/service-2.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        <h1 class="fs-1 fw-bold bg-primary text-white d-inline-block rounded p-2 position-absolute"
                            style="top: 0; left: 0;">03</h1>
                    </div>
                    <div class="rounded-bottom border border-top-0 p-4">
                        <a href="#" class="h4 mb-3 d-block">Convenient Dancing</a>
                        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi
                            blanditiis quidem</p>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
                <div class="training-item bg-white rounded wow fadeInUp" data-wow-delay="0.7s">
                    <div class="training-img rounded-top">
                        <img src="img/service-4.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        <h1 class="fs-1 fw-bold bg-primary text-white d-inline-block rounded p-2 position-absolute"
                            style="top: 0; left: 0;">04</h1>
                    </div>
                    <div class="rounded-bottom border border-top-0 p-4">
                        <a href="#" class="h4 mb-3 d-block">Dance Theater</a>
                        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi
                            blanditiis quidem</p>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
                <div class="training-item bg-white rounded wow fadeInUp" data-wow-delay="0.9s">
                    <div class="training-img rounded-top">
                        <img src="img/service-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        <h1 class="fs-1 fw-bold bg-primary text-white d-inline-block rounded p-2 position-absolute"
                            style="top: 0; left: 0;">05</h1>
                    </div>
                    <div class="rounded-bottom border border-top-0 p-4">
                        <a href="#" class="h4 mb-3 d-block">Personalized Learning</a>
                        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi
                            blanditiis quidem</p>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Training End -->
@endsection
