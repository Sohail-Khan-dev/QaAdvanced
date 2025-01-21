@extends('layout')

@section('title', 'Dance Training')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-primary display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Clients Riviews</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-dark">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Testimonial</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Banner Start -->
    @include('partials.banner')

    <!-- Banner End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
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
                        <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati
                            eiusmod tempor incididunt.
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
                        <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati
                            eiusmod tempor incididunt.
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
                        <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati
                            eiusmod tempor incididunt.
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
                        <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati
                            eiusmod tempor incididunt.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
