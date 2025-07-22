@extends('layout')

@section('title', 'Software Testing')
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
    <h1 class="mb-4">Agile Methodology Syllabus</h1>
    <div class="d-flex gap-2">
        <div class="topic-link border p-2" style="min-width: 30%">
            <h3>Topic Links</h3>
            <ul>
                <li><a href="#headingOne">Fundamentals of Testing </a></li>
                <li><a href="#headingtTwo#">Testing Throughout the Software Development Lifecycle</a></li>
                <li><a href="#headingtThree">Static Testing</a></li>
                <li><a href="#headingtFour">Test Analysis and Design</a></li>
                <li><a href="#headingtFour">Managing the Test Activities</a></li>
                <li><a href="#headingtFour">Risk Management</a></li>
                
            </ul>
        </div>
        <div class="accordion" id="qaTopics">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0" id="">
                    Fundamentals of Testing 
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#qaTopics">
                    <div class="card-body">
                        <ul>
                            <li><a href="qatopicdetail.showguide">What is Testing? </a></li>
                            <li><a href="qatopicdetail.showguide">Why is Testing Necessary?</a></li>
                            <li><a href="qatopicdetail.showguide">Testing Principles</a></li>
                            <li><a href="qatopicdetail.showguide">Test Activities, Testware and Test Roles</a></li>
                            <li><a href="qatopicdetail.showguide">Essential Skills and Good Practices in Testing</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingtTwo">
                    <h2 class="mb-0" id="">
                    Testing Throughout the Software Development Lifecycle 
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingtTwo" data-parent="#qaTopics">
                    <div class="card-body">
                        <ul>
                            <li><a href="#">Testing in the Context of a Software Development Lifecycle</a></li>
                            <li><a href="#">Test Levels and Test Types</a></li>
                            <li><a href="#">Maintenance Testing</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0" id="testing-fundamentals">
                    Static Testing 
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingThree" data-parent="#qaTopics">
                    <div class="card-body">
                        <ul>
                            <li><a href="#">Static Testing Basics</a></li>
                            <li><a href="#">Feedback and Review Process</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0" id="">
                    Managing The Test Activitie
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingFour" data-parent="#qaTopics">
                    <div class="card-body">
                        <ul>
                            <li><a href="#">Test Planning</a></li>
                            <li><a href="#">Risk Management</a></li>
                            <li><a href="#">Test Monitoring, Test Control & Test Completion</a></li>
                            <li><a href="#">Configuration Management</a></li>
                            <li><a href="#">Defect Management</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0" id="">
                    Test Tools
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingFour" data-parent="#qaTopics">
                    <div class="card-body">
                        <ul>
                            <li><a href="#">Tool Support For Testing</a></li>
                            <li><a href="#">Benefits & Risks of Test Automation</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0" id="">
                    JIRA Tutorial
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingFour" data-parent="#qaTopics">
                    <div class="card-body">
                        <ul>
                            <li><a href="#">JIRA Tutorial — What is, How to use Jira Testing Software Tool</a></li>
                            <li><a href="#">JIRA Epics — JIRA Epics Tutorial</a></li>
                            <li><a href="#">Best JIRA Alternatives — 15 Best JIRA Alternatives | Free & Paid</a></li>
                            <li><a href="#">JIRA Interview Questions — Top 35 JIRA Interview Q & A</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>

@endsection
