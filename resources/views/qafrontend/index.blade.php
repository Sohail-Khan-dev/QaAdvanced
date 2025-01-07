<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>JustDance - Dance Class Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Yantramanav:wght@400;500;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Topbar Start -->
        <div class="container-fluid bg-secondary px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="#" class="text-light me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                        <a href="#" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                        <a href="#" class="text-light me-0"><i class="fas fa-envelope text-primary me-2"></i>Example@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex justify-content-end">
                        <div class="border-end border-start py-1">
                            <a href="#" class="btn text-primary"><i class="fab fa-facebook-f"></i></a>
                        </div>
                        <div class="border-end py-1">
                            <a href="#" class="btn text-primary"><i class="fab fa-twitter"></i></a>
                        </div>
                        <div class="border-end py-1">
                            <a href="#" class="btn text-primary"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="border-end py-1">
                            <a href="#" class="btn text-primary"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="#" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fas fa-biohazard me-3"></i>JustDance</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="event.html" class="nav-item nav-link">Events</a>
                        <a href="blog.html" class="nav-item nav-link">Blogs</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="classes.html" class="dropdown-item">Our classes</a>
                                <a href="training.html" class="dropdown-item">Dance Training</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="gallery.html" class="dropdown-item">Dance Gallery</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                    </div>
                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Register Now</a>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item">
                <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="carousel-caption-content p-3" style="max-width: 900px;">
                        <h4 class="text-secondary text-uppercase sub-title fw-bold mb-4 wow fadeInUp" data-wow-delay="0.1s" style="letter-spacing: 3px;">Let's Dance</h4>
                        <h1 class="display-1 text-capitalize text-white mb-4 wow fadeInUp" data-wow-delay="0.3s">Once A Dancer, Is Always A Dance</h1>
                        <p class="fs-5 wow fadeInUp" data-wow-delay="0.5s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        </p>
                        <div class="pt-2">
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5 m-2 wow fadeInLeft" data-wow-delay="0.1s" href="#">Join Now</a>
                            <a class="btn btn-secondary rounded-pill text-white py-3 px-5 m-2 wow fadeInRight" data-wow-delay="0.3s" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-carousel-item">
                <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="carousel-caption-content p-3" style="max-width: 900px;">
                        <h4 class="text-secondary text-uppercase sub-title fw-bold mb-4" style="letter-spacing: 3px;">Let's Dance</h4>
                        <h1 class="display-1 text-capitalize text-white mb-4">Once A Dancer, Is Always A Dance</h1>
                        <p class="fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        </p>
                        <div class="pt-2">
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5 m-2 wow fadeInLeft" data-wow-delay="0.1s" href="#">Join Now</a>
                            <a class="btn btn-secondary rounded-pill text-white py-3 px-5 m-2 wow fadeInRight" data-wow-delay="0.3s" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-carousel-item">
                <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="carousel-caption-content p-3" style="max-width: 900px;">
                        <h4 class="text-secondary text-uppercase sub-title fw-bold mb-4" style="letter-spacing: 3px;">Let's Dance</h4>
                        <h1 class="display-1 text-capitalize text-white mb-4">Once A Dancer, Is Always A Dance</h1>
                        <p class="fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        </p>
                        <div class="pt-2">
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5 m-2 wow fadeInLeft" data-wow-delay="0.1s" href="#">Join Now</a>
                            <a class="btn btn-secondary rounded-pill text-white py-3 px-5 m-2 wow fadeInRight" data-wow-delay="0.3s" href="#">Read More</a>
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
                        <h1 class="display-3 mb-4"><strong class="text-primary">JustDance</strong>, We have been teaching dance since 2001</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint commodi alias, eius incidunt similique exercitationem magni quod recusandae maiores ducimus non porro neque odio explicabo, doloribus deleniti rem sequi adipisci sed ab qui dolorem. Optio sint eius illum consequuntur. Odit.
                        </p>
                        <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore illum nemo deserunt reiciendis perferendis incidunt ullam expedita dolor, voluptas repellat necessitatibus dolore repellendus dolorum, voluptate dolorem. Debitis quis ipsa ullam neque corrupti maxime ad magni, tempore, aperiam rerum, perspiciatis fuga.
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
                            <h1 class="fs-1 fw-bold bg-primary text-white d-inline-block rounded p-2 position-absolute" style="top: 0; left: 0;">01</h1>
                        </div>
                        <div class="rounded-bottom border border-top-0 p-4">
                            <a href="#" class="h4 mb-3 d-block">Dance Theater</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="training-item bg-white rounded wow fadeInUp" data-wow-delay="0.3s">
                        <div class="training-img rounded-top">
                            <img src="img/service-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            <h1 class="fs-1 fw-bold bg-primary text-white d-inline-block rounded p-2 position-absolute" style="top: 0; left: 0;">02</h1>
                        </div>
                        <div class="rounded-bottom border border-top-0 p-4">
                            <a href="#" class="h4 mb-3 d-block">Personalized Learning</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="training-item bg-white rounded wow fadeInUp" data-wow-delay="0.5s">
                        <div class="training-img rounded-top">
                            <img src="img/service-2.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            <h1 class="fs-1 fw-bold bg-primary text-white d-inline-block rounded p-2 position-absolute" style="top: 0; left: 0;">03</h1>
                        </div>
                        <div class="rounded-bottom border border-top-0 p-4">
                            <a href="#" class="h4 mb-3 d-block">Convenient Dancing</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="training-item bg-white rounded wow fadeInUp" data-wow-delay="0.7s">
                        <div class="training-img rounded-top">
                            <img src="img/service-4.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            <h1 class="fs-1 fw-bold bg-primary text-white d-inline-block rounded p-2 position-absolute" style="top: 0; left: 0;">04</h1>
                        </div>
                        <div class="rounded-bottom border border-top-0 p-4">
                            <a href="#" class="h4 mb-3 d-block">Dance Theater</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="training-item bg-white rounded wow fadeInUp" data-wow-delay="0.9s">
                        <div class="training-img rounded-top">
                            <img src="img/service-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            <h1 class="fs-1 fw-bold bg-primary text-white d-inline-block rounded p-2 position-absolute" style="top: 0; left: 0;">05</h1>
                        </div>
                        <div class="rounded-bottom border border-top-0 p-4">
                            <a href="#" class="h4 mb-3 d-block">Personalized Learning</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
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
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Explore Details</a>
                        </div>
                    </div>
                    <div class="class-item bg-white rounded wow fadeInUp" data-wow-delay="0.3s">
                        <div class="class-img rounded-top">
                            <img src="img/class-2.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Explore Details</a>
                        </div>
                    </div>
                    <div class="class-item bg-white rounded wow fadeInUp" data-wow-delay="0.5s">
                        <div class="class-img rounded-top">
                            <img src="img/class-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Explore Details</a>
                        </div>
                    </div>
                    <div class="class-item bg-white rounded wow fadeInUp" data-wow-delay="0.7s">
                        <div class="class-img rounded-top">
                            <img src="img/class-2.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Explore Details</a>
                        </div>
                    </div>
                    <div class="class-item bg-white rounded wow fadeInUp" data-wow-delay="0.9s">
                        <div class="class-img rounded-top">
                            <img src="img/class-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
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
                                <div class="bg-primary text-white fw-bold rounded d-inline-block position-absolute p-2" style="top: 0; right: 0;">JAN 20</div>
                                <div class="d-flex justify-content-between border-start border-end bg-white px-2 py-2 w-100 position-absolute" style="bottom: 0; left: 0; opacity: 0.8;">
                                    <a href="#" class="text-dark"><i class="fas fa-clock text-primary"></i> 08:00AM - 10:00PM</a>
                                    <a href="#" class="text-dark"><span class="fas fa-map-marker-alt text-primary"></span> New York</a>
                                </div>
                            </div>
                            <div class="border border-top-0 rounded-bottom p-4">
                                <a href="#" class="h4 mb-3 d-block">Open House - Springs Dance</a>
                                <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                                <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Watch Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="event-item rounded">
                            <div class="position-relative">
                                <img src="img/service-2.jpg" class="img-fluid rounded-top w-100" alt="Image">
                                <div class="bg-primary text-white rounded d-inline-block position-absolute p-2" style="top: 0; right: 0;">JUN 30</div>
                                <div class="d-flex justify-content-between border-start border-end bg-white px-2 py-2 w-100 position-absolute" style="bottom: 0; left: 0; opacity: 0.8;">
                                    <a href="#" class="text-dark"><i class="fas fa-clock text-primary"></i> 08:00AM - 10:00PM</a>
                                    <a href="#" class="text-dark"><span class="fas fa-map-marker-alt text-primary"></span> New York</a>
                                </div>
                            </div>
                            <div class="border rounded-bottom p-4">
                                <a href="#" class="h4 mb-3 d-block">Open House And Registration</a>
                                <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                                <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Watch Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="event-item rounded">
                            <div class="position-relative">
                                <img src="img/service-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                                <div class="bg-primary text-white rounded d-inline-block position-absolute p-2" style="top: 0; right: 0;">MAY 15</div>
                                <div class="d-flex justify-content-between border-start border-end bg-white px-2 py-2 w-100 position-absolute" style="bottom: 0; left: 0; opacity: 0.8;">
                                    <a href="#" class="text-dark"><i class="fas fa-clock text-primary"></i> 08:00AM - 10:00PM</a>
                                    <a href="#" class="text-dark"><span class="fas fa-map-marker-alt text-primary"></span> New York</a>
                                </div>
                            </div>
                            <div class="border rounded-bottom p-4">
                                <a href="#" class="h4 mb-3 d-block">Open House Morris Dance</a>
                                <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                                <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Watch Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="event-item rounded">
                            <div class="position-relative">
                                <img src="img/service-4.jpg" class="img-fluid rounded-top w-100" alt="Image">
                                <div class="bg-primary text-white rounded d-inline-block position-absolute p-2" style="top: 0; right: 0;">APR 2</div>
                                <div class="d-flex justify-content-between border-start border-end bg-white px-2 py-2 w-100 position-absolute" style="bottom: 0; left: 0; opacity: 0.8;">
                                    <a href="#" class="text-dark"><i class="fas fa-clock text-primary"></i> 08:00AM - 10:00PM</a>
                                    <a href="#" class="text-dark"><span class="fas fa-map-marker-alt text-primary"></span> New York</a>
                                </div>
                            </div>
                            <div class="border rounded-bottom p-4">
                                <a href="#" class="h4 mb-3 d-block">Open House Dance Studio</a>
                                <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
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
                                <a href="#" class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 28 August 2021</a>
                                <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                            </div>
                            <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="blog-item bg-white rounded wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-img rounded-top">
                            <img src="img/class-2.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="bg-light rounded-bottom p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <a href="#" class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 28 August 2021</a>
                                <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                            </div>
                            <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="blog-item bg-white rounded wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-img rounded-top">
                            <img src="img/class-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="bg-light rounded-bottom p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <a href="#" class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 28 August 2021</a>
                                <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                            </div>
                            <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="blog-item bg-white rounded wow fadeInUp" data-wow-delay="0.7s">
                        <div class="blog-img rounded-top">
                            <img src="img/class-1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="bg-light rounded-bottom p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <a href="#" class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 28 August 2021</a>
                                <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                            </div>
                            <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
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
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
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
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
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
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
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
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
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
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
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
                                        <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="video h-100">
                                        <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.9s">
                                    <div class="video h-100">
                                        <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="video h-100">
                                        <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="video h-100">
                                        <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2 wow fadeInUp" data-wow-delay="0.9s">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
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
                                        <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="video h-100">
                                        <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="video h-100">
                                        <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
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
                                        <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="video h-100">
                                        <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="video h-100">
                                        <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
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
                                        <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="video h-100">
                                        <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="video h-100">
                                        <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
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
                                        <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="video h-100">
                                        <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="video h-100">
                                        <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                    <div class="video h-100">
                                        <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
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
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
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
                        <div class="rounded-circle position-absolute" style="width: 100px; height: 100px; top: 25px; left: 50%; transform: translateX(-50%);">
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
                            <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item border text-center rounded">
                        <div class="rounded-circle position-absolute" style="width: 100px; height: 100px; top: 25px; left: 50%; transform: translateX(-50%);">
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
                            <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item border text-center rounded">
                        <div class="rounded-circle position-absolute" style="width: 100px; height: 100px; top: 25px; left: 50%; transform: translateX(-50%);">
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
                            <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item border text-center rounded">
                        <div class="rounded-circle position-absolute" style="width: 100px; height: 100px; top: 25px; left: 50%; transform: translateX(-50%);">
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
                            <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                                <h4 class="text-white mb-4">JustDanc</h4>
                                <p class="text-white mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit.</p>
                                <div class="d-flex">
                                    <a class="btn btn-lg-square btn-primary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Address</h4>
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i class="fas fa-map-marker-alt"></i></a>
                                <div class="text-white ms-2">
                                    <p class="mb-0">0123.. Street, New York, USA</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i class="fa fa-phone-alt"></i></a>
                                <div class="text-white ms-2">
                                    <p class="mb-0">+012 345 67890</p>
                                    <p class="mb-0">+012 345 67890</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i class="fas fa-envelope"></i></a>
                                <div class="text-white ms-2">
                                    <p class="mb-0">info@example.com</p>
                                    <p class="mb-0">info@example.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <a href="#" class="footer-link"> About Us</a>
                            <a href="#" class="footer-link"> Classes</a>
                            <a href="#" class="footer-link"> Privacy Policy</a>
                            <a href="#" class="footer-link"> Terms & Conditions</a>
                            <a href="#" class="footer-link"> Schedule</a>
                            <a href="#" class="footer-link"> FAQ</a>
                            <a href="#" class="footer-link"> Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                                <h4 class="text-white mb-4">Newsletter</h4>
                                <p class="text-white mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit.</p>
                                <div class="position-relative mx-auto rounded-pill">
                                    <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                    <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>