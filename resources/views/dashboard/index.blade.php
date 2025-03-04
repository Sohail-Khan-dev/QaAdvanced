<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
     <!-- Bootstrap CSS -->
    < <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>    
    <!-- Bootstrap Bundle (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- include summernote css/js-->
    <link href="summernote-bs5.css" rel="stylesheet">
    <script src="summernote-bs5.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        label{
            font-weight: bold;
        }
    </style>
</head>
<body>
    @include('dashboard.navbar')    
    <div class="container-fluid">
        <div class="row" id="main">
            <div id="topic-content" class="">
                <main role="main" class="col-md-9 ms-auto col-lg-10 px-4" style="margin-left: 10rem;">
                    <div class="d-flex align-items-center justify-content-between py-3">
                        <h2 class="mb-0">Topic Dashboard</h2>
                        <button class="btn btn-primary" id='new-topic-btn' data-bs-toggle="modal" data-bs-target="#new-topic-modal"> Create New Topic</button>
                    </div>
                    @include('dashboard.modals.new-topic')     
                    <div class="table-responsive">
                        <table id="topic-dataTable" class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Topic</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
            <div id="quiz-content" class="d-none">
                <main role="main" class="col-md-9 ms-auto col-lg-10 px-4" style="margin-left: 10rem;">
                    <div class="d-flex align-items-center justify-content-between py-3">
                        <h2 class="mb-0">Quiz Dashboard</h2>
                        <button class="btn btn-primary" id='new-quiz-btn' data-bs-toggle="modal" data-bs-target="#new-quiz-modal"> Create New Quiz</button>
                    </div>
                    @include('dashboard.modals.new-quiz')     
                    <div class="table-responsive">
                        <table id="quiz-dataTable" class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Question</th>
                                    <th>Answers</th>
                                    <th>Correct Answer</th>
                                    <th style="max-width: 10%">action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </div>
    </div>
   <!-- include summernote css/js-->
<script src="{{ asset('js/dashboard.js')}}" > </script>
<script src="summernote-bs5.js"></script>
</body>
</html>