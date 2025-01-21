@extends('layout')

@section('title', 'Dance Training')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-primary display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Team</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-dark">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Team</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Banner Start -->
    @include('partials.banner')

    <!-- Banner End -->

    <!-- Team Start -->
    <div class="container-fluid team py-5">
        <div class="container py-5">
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
@endsection
