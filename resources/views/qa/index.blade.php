@extends('layout')

@section('title', 'Dance Training')

@section('content')
    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="carousel-caption-content p-3" style="max-width: 900px;">
                    <h4 class="text-secondary text-uppercase sub-title fw-bold mb-4 wow fadeInUp" data-wow-delay="0.1s"
                        style="letter-spacing: 3px;">Let's Dance</h4>
                    <h1 class="display-1 text-capitalize text-white mb-4 wow fadeInUp" data-wow-delay="0.3s">Once A Dancer,
                        Is Always A Dance</h1>
                    <p class="fs-5 wow fadeInUp" data-wow-delay="0.5s">Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
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
                        Dance</h4>
                    <h1 class="display-1 text-capitalize text-white mb-4">Once A Dancer, Is Always A Dance</h1>
                    <p class="fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy text ever since the 1500s,
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
                        Dance</h4>
                    <h1 class="display-1 text-capitalize text-white mb-4">Once A Dancer, Is Always A Dance</h1>
                    <p class="fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy text ever since the 1500s,
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
                    <h4 class="text-secondary sub-title fw-bold">about The Dance School</h4>
                    <h1 class="display-3 mb-4"><strong class="text-primary">JustDance</strong>, We have been teaching dance
                        since 2001</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint commodi alias, eius incidunt similique
                        exercitationem magni quod recusandae maiores ducimus non porro neque odio explicabo, doloribus
                        deleniti rem sequi adipisci sed ab qui dolorem. Optio sint eius illum consequuntur. Odit.
                    </p>
                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore illum nemo
                        deserunt reiciendis perferendis incidunt ullam expedita dolor, voluptas repellat necessitatibus
                        dolore repellendus dolorum, voluptate dolorem. Debitis quis ipsa ullam neque corrupti maxime ad
                        magni, tempore, aperiam rerum, perspiciatis fuga.
                    </p>
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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


    <!-- Dance Class Start -->
    <div class="container-fluid class bg-light py-5">
        <div class="container py-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Our Dance Classes</h4>
                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Dance Classes for everyone</h1>
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
    <div class="container-fluid events py-5">
        <div class="container py-5">
            <div class="pb-5">
                <div class="row g-4 align-items-end">
                    <div class="col-xl-8">
                        <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Events</h4>
                        <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Upcoming Events</h1>
                    </div>
                    <div class="col-xl-4 text-xl-end pb-3 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">View All Events</a>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
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
                </div>
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
                <div class="blog-item bg-white rounded wow fadeInUp" data-wow-delay="0.1s">
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
                </div>
            </div>
        </div>
    </div>
    <!-- Blogs End -->


    <!-- Team Start -->
    <div class="container-fluid team pb-5">
        <div class="container pb-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Dance Teachers</h4>
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
    </div>
    <!-- Team End -->

    <!-- Video Gallery Start -->
    <div class="container-fluid gallery pb-5">
        <div class="container pb-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Dance Gallery</h4>
                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Our Dance class gallery</h1>
            </div>
            <div class="tab-class wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center pb-4">
                    <li class="nav-item bg-light border border-primary rounded-pill mb-4">
                        <a class="d-flex py-2 px-5 rounded-pill active" data-bs-toggle="pill" href="#GalleryTab-1">
                            <span class="text-dark">All</span>
                        </a>
                    </li>
                    <li class="nav-item bg-light border border-primary rounded-pill mb-4">
                        <a class="d-flex py-2 px-5 rounded-pill" data-bs-toggle="pill" href="#GalleryTab-2">
                            <span class="text-dark">Dance Practice</span>
                        </a>
                    </li>
                    <li class="nav-item bg-light border border-primary rounded-pill mb-4">
                        <a class="d-flex py-2 px-5 rounded-pill" data-bs-toggle="pill" href="#GalleryTab-3">
                            <span class="text-dark">Dance Training</span>
                        </a>
                    </li>
                    <li class="nav-item bg-light border border-primary rounded-pill mb-4">
                        <a class="d-flex py-2 px-5 rounded-pill" data-bs-toggle="pill" href="#GalleryTab-4">
                            <span class="text-dark">Dance Growth</span>
                        </a>
                    </li>
                    <li class="nav-item bg-light border border-primary rounded-pill mb-4">
                        <a class="d-flex py-2 px-5 rounded-pill" data-bs-toggle="pill" href="#GalleryTab-5">
                            <span class="text-dark">Dance Improvement</span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-2">
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="video h-100">
                                    <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.9s">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="video h-100">
                                    <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2 wow fadeInUp" data-wow-delay="0.9s">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GalleryTab-2" class="tab-pane fade show p-0">
                        <div class="row g-2">
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GalleryTab-3" class="tab-pane fade show p-0">
                        <div class="row g-2">
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GalleryTab-4" class="tab-pane fade show p-0">
                        <div class="row g-2">
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                                        data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                                        data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                                        data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                                        data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                                        data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                                        data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                                        data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                                        data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                                        data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GalleryTab-5" class="tab-pane fade show p-0">
                        <div class="row g-2">
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                                        data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                                        data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                                        data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                                        data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                                        data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                                        data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                                        data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                                        data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                                        data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100"
                                        style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                                        data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Gallery End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial pb-5">
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
    </div>
    <!-- Testimonial End -->

@endsection
