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
    <h1 class="mb-4">Software Testing Syllabus</h1>
    <div class="d-flex gap-2">
        <div class="topic-link border p-2" style="min-width: 30%">
            <h3>Topic Links</h3>
            <ul>
                <li><a href="#TestingFundamentals">Test Fundamentals</a></li>
                <li><a href="#TypesofTesting">Types of Testing</a></li>
                <li><a href="#TestCaseDevelopment">TestCase Development</a></li>
                <li><a href="#TestingTechniques">Testing Techniques</a></li>
                <li><a href="#TestManagement&Control">Test Management & Control</a></li>
                <li><a href="#Defects">Defects</a></li>
                <li><a href="#Agile">Agile</a></li>
                <li><a href="#TestingDifferentDomains">Testing Different Domains</a></li>
                <li><a href="#WhiteBoxTesting">WhiteBox Testing</a></li>
                <li><a href="#PerformanceTesting">Performance Testing</a></li>
                <li><a href="#headingEleven">Advance Testing Topics</a></li>
                
            </ul>
        </div>
        <div class="accordion" id="qaTopics">
            <div class="card">
                <div class="card-header" id="TestingFundamentals">
                    <h2 class="mb-0" id="">
                            Testing Fundamentals
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="TestingFundamentals" data-parent="#qaTopics">
                    <div class="card-body">
                        <ul>
                            <li><a href={{ url("qa/qatopicdetail/showguide")}}>What is Software Testing? Definition, Basics & Types</a></li>
                            <li><a href={{ url("qa/qatopicdetail/showguide")}}>Software Testing as a Career Path (Skills, Salary, Growth)</a></li>
                            <li><a href={{ url("qa/qatopicdetail/showguide")}}>7 Software Testing Principles: Learn with Examples</a></li>
                            <li><a href={{ url("qa/qatopicdetail/showguide")}}>V-Model in Software Testing</a></li>
                            <li><a href={{ url("qa/qatopicdetail/showguide")}}>STLC – Software Testing Life Cycle Phases & Entry, Exit Criteria</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="TypesofTesting">
                    <h2 class="mb-0" id="">
                      Types of Testing
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="TypesofTesting" data-parent="#qaTopics">
                    <div class="card-body">
                        <ul>
                            <li><a href="#">Manual Testing Tutorial for Beginners: Concepts, Types, Tool</a></li>
                            <li><a href="#">AUTOMATION TESTING Tutorial: What is, Process, Benefits & Tools</a></li>
                            <li><a href="#">Automation Testing Vs. Manual Testing: What’s the Difference?</a></li>
                            <li><a href="#">Unit Testing Tutorial: What is, Types, Tools, EXAMPLE</a></li>
                            <li><a href="#">Types of Unit Testing</a></li>
                            <li><a href="#">Integration Testing: What is, Types, Top Down & Bottom Up Example</a></li>
                            <li><a href="#">What is System Testing? Types & Definition with Example</a></li>
                            <li><a href="#">Sanity Testing Vs Smoke Testing: Introduction & Differences</a></li>
                            <li><a href="#">What is Regression Testing? Definition, Test Cases (Example)</a></li>
                            <li><a href="#">What is Non Functional Testing? Types with Example</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="TestCaseDevelopment">
                    <h2 class="mb-0" id="testing-fundamentals">
                    TestCase Development
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="TestCaseDevelopment" data-parent="#qaTopics">
                    <div class="card-body">
                        <ul>
                            <li><a href="#">Test Documentation in Software Testing</a></li>
                            <li><a href="#">What is Test Scenario?</a></li>
                            <li><a href="#">What is Test Analysis (Test Basis) in Software Testing?</a></li>
                            <li><a href="#">How to Write Test Cases: Sample Template with Examples</a></li>
                            <li><a href="#">What is Requirements Traceability Matrix (RTM)? Example Template</a></li>
                            <li><a href="#">Test Data Generation: What is, How to, Example, Tools</a></li>
                            <li><a href="#">Download Sample Test Case Template: Example Excel, Word Formats</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="TestingTechniques">
                    <h2 class="mb-0" id="">
                    Testing Techniques
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="TestingTechniques" data-parent="#qaTopics">
                    <div class="card-body">
                        <ul>
                            <li><a href="#">Software Testing Techniques with Test Case Design Examples</a></li>
                            <li><a href="#">Boundary Value Analysis & Equivalence Partitioning with Examples</a></li>
                            <li><a href="#">Decision Table Testing: Learn with Example</a></li>
                            <li><a href="#">What is State Transition Testing? Diagram, Technique, Example</a></li>
                            <li><a href="#">What is Use Case Testing? Technique, Examples</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="TestManagement&Control">
                    <h2 class="mb-0" id="">
                    Test Management & Control
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="TestManagement&Control" data-parent="#qaTopics">
                    <div class="card-body">
                        <ul>
                            <li><a href="#">Software Test Estimation Techniques: Step By Step Guide</a></li>
                            <li><a href="#">How to Create a Test Plan (with Example)</a></li>
                            <li><a href="#">Test Plan Template: Sample Document with Web Application Example</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="Defects">
                    <h2 class="mb-0" id="">
                    Defects
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="Defects" data-parent="#qaTopics">
                    <div class="card-body">
                        <ul>
                            <li><a href="#">Test Environment for Software Testing</a></li>
                            <li><a href="#">Defect Management Process in Software Testing (Bug Report Template)</a></li>
                            <li><a href="#">Defect/Bug Life Cycle in Software Testing</a></li>
                            <li><a href="#">Top 50 Software Testing Tools</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="Agile">
                    <h2 class="mb-0" id="">
                    Agile
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="Agile" data-parent="#qaTopics">
                    <div class="card-body">
                        <ul>
                            <li><a href="#">Agile Methodology & Model: Guide for Software Development & Testing</a></li>
                            <li><a href="#">What is Agile Testing? Process, Strategy, Test Plan, Life Cycle Example</a></li>
                            <li><a href="#">Scrum Testing Methodology Tutorial: What is, Process, Artifacts, Sprint</a></li>
                            <li><a href="#">Automation Testing Framework for Agile/Scrum Methodology</a></li>
                            <li><a href="#">SAFe Methodology Tutorial: What is Scaled Agile Framework</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="TestingDifferentDomains">
                    <h2 class="mb-0" id="">
                    Testing Different Domains
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="TestingDifferentDomains" data-parent="#qaTopics">
                    <div class="card-body">
                        <ul>
                        <li><a href="#">Web Application Testing: 8 Step Guide to Website Testing</a></li>
                            <li><a href="#">Web Application Testing Checklist: Example Test Cases for Website</a></li>
                            <li><a href="#">Banking Domain Application Testing: Sample Test Cases</a></li>
                            <li><a href="#">eCommerce Testing: How to Test an E-Commerce Website</a></li>
                            <li><a href="#">Payment Gateway Testing Tutorial with Example Test Cases</a></li>
                            <li><a href="#">Mainframe Testing – Complete Tutorial</a></li>
                            <li><a href="#">Testing Retail Point Of Sale(POS) Systems: Example Test Cases</a></li>
                            <li><a href="#">HealthCare Domain Testing with Sample Test Cases</a></li>
                            <li><a href="#">Testing Insurance Domain Applications with Sample Test Cases</a></li>
                            <li><a href="#">Testing Telecom Domain with Sample OSS/BSS Test Cases</a></li>
                            <li><a href="#">Business Intelligence (BI) Testing: Sample Test Cases</a></li>
                            <li><a href="#">Database (Data) Testing Tutorial: Sample Test Cases</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="WhiteBoxTesting">
                    <h2 class="mb-0" id="">
                    WhiteBox Testing
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="WhiteBoxTesting" data-parent="#qaTopics">
                    <div class="card-body">
                        <ul>
                        <li><a href="#">What is WHITE Box Testing? Techniques, Example, Types & Tools</a></li>
                        <li><a href="#">What is Static Testing? What is a Testing Review?</a></li>
                        <li><a href="#">Mccabe’s Cyclomatic Complexity: Calculate with Flow Graph (Example)</a></li>
                        <li><a href="#">Code Coverage Tutorial: Branch, Statement, Decision, FSM</a></li>
                        <li><a href="#">Path Testing & Basis Path Testing with EXAMPLES</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="PerformanceTesting">
                    <h2 class="mb-0" id="">
                    Performance Testing
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="PerformanceTesting" data-parent="#qaTopics">
                    <div class="card-body">
                        <ul>
                        <li><a href="#">Performance Testing Tutorial: What is, Types, Metrics & Example</a></li>
                        <li><a href="#">Load Testing Tutorial: What is? How to? (with Examples)</a></li>
                        <li><a href="#">What is STRESS Testing in Software Testing? Tools, Types, Examples</a></li>
                        <li><a href="#">What is Volume Testing? Learn with Examples</a></li>
                        <li><a href="#">What is Scalability Testing? Learn with Example</a></li>
                        <li><a href="#">What is Soak Testing? Definition, Meaning, Examples</a></li>
                        <li><a href="#">Stability Testing in Software Testing</a></li>
                        <li><a href="#">What is Spike Testing? Learn With Example</a></li>
                        <li><a href="#">Load Testing vs Stress Testing vs Performance Testing: Difference Discussed</a></li>
                        <li><a href="#">What is Response Time Testing?</a></li>
                        <li><a href="#">What is Benchmark Testing? Test Plan, Tools, Example</a></li>
                        <li><a href="#">What is Endurance Testing in Software Testing? (with Example)</a></li>
                        <li><a href="#">Reliability Testing Tutorial: What is, Methods, Tools, Example</a></li>
                        <li><a href="#">13 BEST Performance Testing Tools | Load Testing Tool</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>

@endsection
