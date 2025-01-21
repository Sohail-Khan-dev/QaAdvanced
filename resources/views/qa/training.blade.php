@extends('layout')

@section('title', 'Dance Training')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-primary display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Dance Training</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-dark">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Training</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Banner Start -->
    @include('partials.banner')

    <!-- Banner End -->

    <!-- Training Start -->
    <div class="container-fluid training py-5">
        <div class="container py-5">
            <div class="pb-5">
                <div class="row g-4 align-items-end">
                    <div class="col-xl-8">
                        <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Dance Training</h4>
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
                    <div id="GalleryTab-5" class="tab-pane fade show p-0">
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

@endsection
