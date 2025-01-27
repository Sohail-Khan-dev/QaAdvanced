@extends('layout')

@section('title', 'About Us')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid mt-5">
        <div class="container text-center py-5 mt-5" style="max-width: 900px;">
            <h3 class="text-primary display-3 wow fadeInDown" data-wow-delay="0.1s">About Us</h1>
               
        </div>
    </div>
    <!-- Header End -->




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
                    <h4 class="text-secondary sub-title fw-bold">Welcome to QA Advance</h4>
                    <h4 class=" mb-4">Your ultimate destination for mastering the art of Quality Assurance. We guide you through learning, exploring, and excelling in QA practices with modern tools and techniques.

                    </h4>
                    <p>QA Advance is a comprehensive platform dedicated to empowering quality assurance professionals 
                        with the knowledge, tools, and resources they need to excel in their careers. Whether you're 
                        just starting out or are a seasoned QA expert, QA Advance offers a range of educational content, 
                        tutorials, and best practices designed to enhance your understanding of software testing. 
                        The website fosters a vibrant community of like-minded individuals who share insights, 
                        experiences, and tips to stay ahead in the rapidly evolving tech landscape. With its user-friendly 
                        design and focus on continuous learning, QA Advance aims to be the go-to destination for anyone passionate 
                        about delivering top-quality software.
                    </p>
                    <p class="mb-4">QA Advance offers in-depth coverage of various testing tools, 
                        including security testing tools, web testing tools, mobile app testing tools,
                         API testing tools, and performance testing tools, ensuring that professionals 
                         have access to comprehensive resources for all aspects of software quality assurance.
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


    <!-- Team Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="text-center pb-5">
                <h1 class="display-4 fw-bold text-primary mb-3">Meet Our Team</h1>
                <p class="text-muted">We’re proud to introduce our exceptional team member.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="team-item border rounded shadow-lg bg-white p-4 text-center">
                        <div class="team-content">
                            <h4 class="fw-bold mb-1">Sohail Khan</h4>
                            <p class="text-primary fw-semibold mb-3">CEO & FOUNDER</p>
                            <p class="text-muted mb-4">
                                An experienced developer with a passion for creating innovative solutions and delivering high-quality applications.
                            </p>
                        </div>
                        {{-- <div class="team-social pt-3 mt-3 border-top">
                            <a class="btn btn-primary btn-square rounded-circle mx-1" href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-primary btn-square rounded-circle mx-1" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="btn btn-primary btn-square rounded-circle mx-1" href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="btn btn-primary btn-square rounded-circle mx-1" href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


@endsection
