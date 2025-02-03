@extends('layout')

@section('title', 'ISTQB Guide')
<style> 
    #qaTopics .card{
        margin-bottom: 1rem;
    }
    .topic-link {
        position: sticky;
        top: 5rem;
        min-width: 30%;
        height: fit-content;
    }

</style>
@section('content')

<div class="container mt-5 pt-5" id="topic-main-content">
    <h1 class="mb-4">Software Testing Syllabus</h1>
    <div class="d-flex gap-2">
        <div class="topic-link border p-2" style="min-width: 30%">
            <h3>Topic Links</h3>
            <ul>
                <li><a href="#testing-fundamentals">Test Fundamentals</a></li>
                <li><a href="#">ISTQB Foundation Level Exam Pattern</a></li>
                <li><a href="#">ISTQB Foundation Level Exam Dates</a></li>
                <li><a href="#">ISTQB Foundation Level Exam Fees</a></li>
                <li><a href="#">ISTQB Foundation Level Exam Registration</a></li>
            </ul>
        </div>
        <div class="accordion" id="qaTopics">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0" id="">
                            Testing Fundamentals 1
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#qaTopics">
                    <div class="card-body">
                        <ul>
                            <li><a href="qaguide.showguide">What is Software Testing? Definition, Basics & Types</a></li>
                            <li><a href="qaguide.showguide">Software Testing as a Career Path (Skills, Salary, Growth)</a></li>
                            <li><a href="qaguide.showguide">7 Software Testing Principles: Learn with Examples</a></li>
                            <li><a href="qaguide.showguide">V-Model in Software Testing</a></li>
                            <li><a href="qaguide.showguide">STLC – Software Testing Life Cycle Phases & Entry, Exit Criteria</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0" id="">
                            Testing Fundamentals 2
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#qaTopics">
                    <div class="card-body">
                        <ul>
                            <li><a href="#">What is Software Testing? Definition, Basics & Types</a></li>
                            <li><a href="#">Software Testing as a Career Path (Skills, Salary, Growth)</a></li>
                            <li><a href="#">7 Software Testing Principles: Learn with Examples</a></li>
                            <li><a href="#">V-Model in Software Testing</a></li>
                            <li><a href="#">STLC – Software Testing Life Cycle Phases & Entry, Exit Criteria</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0" id="testing-fundamentals">
                            Testing Fundamentals 3
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#qaTopics">
                    <div class="card-body">
                        <ul>
                            <li><a href="#">What is Software Testing? Definition, Basics & Types</a></li>
                            <li><a href="#">Software Testing as a Career Path (Skills, Salary, Growth)</a></li>
                            <li><a href="#">7 Software Testing Principles: Learn with Examples</a></li>
                            <li><a href="#">V-Model in Software Testing</a></li>
                            <li><a href="#">STLC – Software Testing Life Cycle Phases & Entry, Exit Criteria</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>

@endsection
