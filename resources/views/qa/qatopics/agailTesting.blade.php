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
                <li><a href="#headingOne">Introduction of Agile Methodology Tutorial for Beginners</a></li>
                <li><a href="#headingtTwo#">Learn Advanced Stuff in Agile Tutorial</a></li>
                <li><a href="#headingtThree">Agile Testing Tutorial: Must Know!</a></li>
                <li><a href="#headingtFour">JIRA Tutorial</a></li>
                
            </ul>
        </div>
        <div class="accordion" id="qaTopics">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0" id="">
                    Introduction of Agile Methodology Tutorial for Beginners
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#qaTopics">
                    <div class="card-body">
                        <ul>
                            <li><a href={{ url("qa/qatopicdetail/showguide") }}>Agile Methodology — What is Agile Software Development Model?</a></li>
                            <li><a href={{ url("qa/qatopicdetail/showguide") }}>What is Agile Testing? — Methodology, Process & Life Cycle</a></li>
                            <li><a href={{ url("qa/qatopicdetail/showguide") }}>Scrum Testing Methodology Tutorial — What is, Process, Artifacts, Sprint</a></li>
                            <li><a href={{ url("qa/qatopicdetail/showguide") }}>Automation Testing Framework — Agile/Scrum Methodology</a></li>
                            <li><a href={{ url("qa/qatopicdetail/showguide") }}>Agile Model — Agile Model in Software Engineering</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingtTwo">
                    <h2 class="mb-0" id="">
                    Learn Advanced Stuff in Agile Tutorial
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingtTwo" data-parent="#qaTopics">
                    <div class="card-body">
                        <ul>
                            <li><a href="#">SAFe Methodology Tutorial — What is Scaled Agile Framework</a></li>
                            <li><a href="#">Agile Vs Waterfall — Know the Difference Between Methodologies</a></li>
                            <li><a href="#">Bug/Defect Triage — Why Bug/Defect Triage is Important in Software Testing</a></li>
                            <li><a href="#">Agile Vs Scrum — What’s the Difference</a></li>
                            <li><a href="#">Scrum Master Tutorial — Basics Training</a></li>
                            <li><a href="#">What is Kanban? — Cards, Boards, Core Principles and Practices</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0" id="testing-fundamentals">
                    Agile Testing Tutorial: Must Know!
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingThree" data-parent="#qaTopics">
                    <div class="card-body">
                        <ul>
                            <li><a href="#">Scrum Vs. Kanban — Know the Difference</a></li>
                            <li><a href="#">Agile Vs. DevOps — What’s the difference?</a></li>
                            <li><a href="#">Agile Vs Kanban — What is Difference between Agile and Kanban?</a></li>
                            <li><a href="#">Best Agile Software — 12 BEST Agile Project Management Software</a></li>
                            <li><a href="#">BEST Scrum Tools — 13 BEST Scrum Tools for Agile Project Management</a></li>
                            <li><a href="#">Agile Testing Interview Questions — Top 34 Agile Testing Interview Q & A</a></li>
                            <li><a href="#">Agile Interview Questions — Top 50 Agile Interview Q & A</a></li>
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
