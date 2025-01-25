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
    <div class="container-fluid team py-5">
        <div class="container py-5">
            <div class="pb-5">
                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Our Team</h1>
            </div>
            <div class="team-carousel owl-carousel pt-5 wow fadeInUp" data-wow-delay="0.1s">
                
                
                
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
                        <a href="#" class="h4">zubair khan</a>
                        <p class="mb-0 text-primary">QA Engineer</p>
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
                        <a href="#" class="h4">Sohail khan</a>
                        <p class="mb-0 text-primary">Senior Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


@endsection
