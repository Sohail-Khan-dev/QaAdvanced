@extends('layout')

@section('title', 'About Us')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-primary display-3 wow fadeInDown" data-wow-delay="0.1s">About Us</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-dark">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">About</li>
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
