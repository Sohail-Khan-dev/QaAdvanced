@extends('layout')

@section('title', 'ISTQB Guide')

@section('content')

<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Certified Tester Foundation Level (CTFL) v4.0    </h1>
        <h5>Overview</h5>
        <P style="color: cornsilk;">The ISTQB® Certified Tester Foundation Level (CTFL) certification is the cornerstone of essential testing knowledge that can be applied to real-world scenarios. The syllabus provides a comprehensive understanding of the terminology and concepts used in the testing domain worldwide, making it relevant for all software delivery approaches and practices, including Waterfall, Agile, DevOps, and Continuous Delivery.

            CTFL certification is recognized as a prerequisite to all other ISTQB® certifications where Foundation Level is required.
            </P>
    </div>
</div>
 <!-- Breadcrumb End -->
<!--  Audiance Section -->
<div class="container">
    <div class="row">
        <div class="col-12 text-center py-5">
            <h3 class="mb-4 align-text-left">Audience</h3>
            <p class="align-text-left">The CTFL 4.0 certification is suitable for anyone who needs to demonstrate practical knowledge of the fundamental concepts of software testing. It is relevant for individuals in roles such as testers, test analysts, test engineers, test consultants, test managers, user acceptance testers, and software developers. Additionally, it is appropriate for those who require a basic understanding of software testing, including project managers, quality managers, software development managers, business analysts, IT directors, and management consultants. </p>
            <p class="align-text-left"> With the ISTQB® Certified Tester Scheme, testing professionals at all stages of their careers can benefit from the breadth and depth of knowledge offered, with the opportunity to pursue higher-level software testing qualifications such as the Core Advanced Levels, Specialist, and Expert Level certifications. </p>
        </div>
    </div>
</div>
<!--  Audiance Section End -->

<!-- Content Section -->
<div class="container my-4 istqb-guide">
    <!-- Content Title -->
    <h2 class="align-text-left mb-4">Content</h2>

    <!-- Main Section -->
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="text-center bg-light p-3 mb-4 rounded">
                <strong>ISTQB® Certified Tester Foundation Level (CTFL)</strong>
            </div>
        </div>
    </div>

    <!-- Responsive Content Grid -->
    <div class="row g-3">
        <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="d-flex flex-column align-items-center">
                {{-- card heading  --}}
                <div class="card mb-3 card-chapter">
                    <div class="card-body text-center bg-primary text-white rounded">
                        <span>What is Testing</span>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card mb-3 card-topic">
                    <div class="card-body text-center bg-light rounded">
                        <span>Why is Testing Necessary</span>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card mb-3 card-topic">
                    <div class="card-body text-center bg-light rounded">
                        <span>Testing Principles</span>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="card mb-3 card-topic">
                    <div class="card-body text-center bg-light rounded">
                        <span>New Activities, Testware & Test Roles</span>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="card mb-3 card-topic">
                    <div class="card-body text-center bg-light rounded">
                        <span>Essential Skills & Good Practices in Testing</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="d-flex flex-column align-items-center">
                {{-- card heading  --}}
                <div class="card mb-3 card-chapter">
                    <div class="card-body text-center bg-primary text-white rounded">
                        <span>Testing Throughout the Software Development Lifecycle</span>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card mb-3 card-topic">
                    <div class="card-body text-center bg-light rounded">
                        <span>Testing in the Context of SDLC</span>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card mb-3 card-topic">
                    <div class="card-body text-center bg-light rounded">
                        <span>Test Levels & Test Types</span>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="card mb-3 card-topic">
                    <div class="card-body text-center bg-light rounded">
                        <span>Maintenance Testing</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="d-flex flex-column align-items-center">
                {{-- card heading  --}}
                <div class="card mb-3 card-chapter">
                    <div class="card-body text-center bg-primary text-white rounded">
                        <span>Static Testing</span>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card mb-3 card-topic">
                    <div class="card-body text-center bg-light rounded">
                        <span>Static Testing Basics</span>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card mb-3 card-topic">
                    <div class="card-body text-center bg-light rounded">
                        <span>Feedback & Review Process</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="d-flex flex-column align-items-center">
                {{-- card heading  --}}
                <div class="card mb-3 card-chapter">
                    <div class="card-body text-center bg-primary text-white rounded">
                        <span>Test Analysis & Design</span>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card mb-3 card-topic">
                    <div class="card-body text-center bg-light rounded">
                        <span>Test Techniques Overview</span>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card mb-3 card-topic">
                    <div class="card-body text-center bg-light rounded">
                        <span>Back-Box Test Techniques</span>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="card mb-3 card-topic">
                    <div class="card-body text-center bg-light rounded">
                        <span>White-Box Test Techniques</span>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="card mb-3 card-topic">
                    <div class="card-body text-center bg-light rounded">
                        <span>Experience Based Test Techniques</span>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="card mb-3 card-topic">
                    <div class="card-body text-center bg-light rounded">
                        <span>Collaboration Based Test Approaches</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="d-flex flex-column align-items-center">
                {{-- card heading  --}}
                <div class="card mb-3 card-chapter">
                    <div class="card-body text-center bg-primary text-white rounded">
                        <span>Managing The Test Activities</span>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card mb-3 card-topic">
                    <div class="card-body text-center bg-light rounded">
                        <span>Test Planning</span>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card mb-3 card-topic">
                    <div class="card-body text-center bg-light rounded">
                        <span>Risk Management</span>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="card mb-3 card-topic">
                    <div class="card-body text-center bg-light rounded">
                        <span>Test Monitoring, Test Control & Test Completion</span>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="card mb-3 card-topic">
                    <div class="card-body text-center bg-light rounded">
                        <span>Configuration Management</span>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="card mb-3 card-topic">
                    <div class="card-body text-center bg-light rounded">
                        <span>Defect Management</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="d-flex flex-column align-items-center">
                {{-- card heading  --}}
                <div class="card mb-3 card-chapter">
                    <div class="card-body text-center bg-primary text-white rounded">
                        <span>Test Tools</span>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card mb-3 card-topic">
                    <div class="card-body text-center bg-light rounded">
                        <span>Tool Support For Testing</span>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card mb-3 card-topic">
                    <div class="card-body text-center bg-light rounded">
                        <span>Benefits & Risks of Test Automation</span>
                    </div>
                </div>
            </div>
        </div>

     
    </div>
</div>
<!-- Content Section End -->

@endsection
