@extends('layout')

@section('title', 'Contact us')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-primary display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-dark">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Contact</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Banner Start -->
    @include('partials.banner')

    <!-- Banner End -->

    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="pb-5">
                
                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Get In Touch</h1>
            </div>
            <div class="bg-light rounded p-4 pb-0">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <h2 class="display-5 mb-2">Contact Us</h2>
                        <p class="mb-4">We’d love to hear from you! At QAAdvance, we not only provide top-quality 
                            QA learning resources but also offer professional QA services to help businesses ensure
                             the highest software quality. Whether you have questions, feedback, or collaboration 
                             opportunities, feel free to reach out. Our team is committed to supporting your software testing journey. 
                            Contact us today, and we’ll get back to you as soon as possible!</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="phone" class="form-control" id="phone" placeholder="Phone">
                                        <label for="phone">Your Phone</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="project" placeholder="Project">
                                        <label for="project">Your Project</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center mb-5">
                            <div class="mb-3"><i class="fa fa-map-marker-alt fa-2x text-primary"></i></div>
                            <div class="ms-4">
                                <h4>Addresses</h4>
                                <p class="mb-0">Islamabad Pakistan</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="mb-3"><i class="fa fa-phone-alt fa-2x text-primary"></i></div>
                            <div class="ms-4">
                                <h4>Mobile</h4>
                                <p class="mb-0">+923025504938</p>
                                
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="mb-3"><i class="fa fa-envelope-open fa-2x text-primary"></i></div>
                            <div class="ms-4">
                                <h4>Email</h4>
                                <p class="mb-0">info@qaadvance.com</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="me-4">
                                <i class="fas fa-share-alt fa-2x text-primary"></i>
                            </div>
                            <div class="d-flex">
                                <a class="btn btn-lg-square btn-primary rounded-circle me-2" href="https://www.facebook.com/profile.php?id=61550327523726"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href="https://www.linkedin.com/company/qa-advance/?viewAsMember=true"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded h-100 pb-3">
                            <iframe class="rounded w-100" style="height: 500px;"
                                src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d130312.61228171784!2d74.17309380764812!3d31.46482481880627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x391901b4f5bd7785%3A0xe94730b26ed322f9!2sIOI%20Technologies%20Private%20Limited%2C%20Plot%2038%2C%20Sector%20B-1%20Block%20A%201%20Block%2017%20Township%2C%20Lahore%2C%20Punjab%2054000%2C%20Pakistan!3m2!1d31.4648512!2d74.25549509999999!5e1!3m2!1sen!2s!4v1748427351809!5m2!1sen!2s"
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
