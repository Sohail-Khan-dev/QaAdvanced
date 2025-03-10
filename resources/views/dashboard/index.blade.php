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
       
    </style>
</head>
<body class="bg-light">
    @include('dashboard.navbar')    
    <div class="container-fluid" style="margin-left: 9rem">
        <div class="row" id="main">
            <div id="dashboard-content">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-center mb-4 mt-n5">Dashboard</h3>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center g-3">
                        <div class="col-md-3 cursor-pointer blog-link" data-content="learning-category" data-url="/get-category" data-table="learning-category-dataTable">
                            <div class="card text-center shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="bi bi-journal-text"></i>Learning Category </h5>
                                    <p class="card-text text-muted">Here you can create new learning Category</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 cursor-pointer blog-link" data-content="topic-list" data-url="/get-topic" data-table="topic-list-dataTable">
                            <div class="card text-center shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="bi bi-journal-text"></i> Topics</h5>
                                    <p class="card-text text-muted">Here you can add topics to existing category</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 cursor-pointer blog-link" data-content='blog-content' data-url="/get-blog" data-table="blog-dataTable">
                            <div class="card text-center shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="bi bi-journal-text"></i> Blog Detail</h5>
                                    <p class="card-text text-muted">Here you can create blog and manage blog details</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 cursor-pointer blog-link" data-content='quiz-content' data-url="/get-quizzes" data-table="quiz-dataTable">
                            <div class="card text-center shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="bi bi-puzzle"></i> Quiz</h5>
                                    <p class="card-text text-muted">Here you can create and manage quizzes easily.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="blog-content" class="d-none">
                <main role="main" class="col-md-9 ms-auto col-lg-10 px-4" style="margin-left: 10rem;">
                    <div class="d-flex align-items-center justify-content-between py-3">
                        <h2 class="mb-0">Blogs </h2>
                        <button class="btn btn-primary" id='new-blog-btn' data-bs-toggle="modal" data-bs-target="#new-topic-modal"> Create New Blog</button>
                    </div>
                    <div class="table-responsive">
                        <table id="blog-dataTable" class="table table-striped table-bordered">
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
                        <h2 class="mb-0">Quizzes </h2>
                        <button class="btn btn-primary" id='new-quiz-btn' data-bs-toggle="modal" data-bs-target="#new-quiz-modal"> Create New Quiz</button>
                    </div>
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
            <div id="learning-category" class="d-none">
                <main role="main" class="col-md-9 ms-auto col-lg-10 px-4" style="margin-left: 10rem;">
                    <div class="d-flex align-items-center justify-content-between py-3">
                        <h2 class="mb-0">Categories </h2>
                        <button class="btn btn-primary" id='learning-category-btn' data-bs-toggle="modal" data-bs-target="#learning-category-modal"> Create New Category</button>
                    </div>
                    <div class="table-responsive">
                        <table id="learning-category-dataTable" class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th style="max-width: 10%">action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
            <div id="topic-list" class="d-none">
                <main role="main" class="col-md-9 ms-auto col-lg-10 px-4" style="margin-left: 10rem;">
                    <div class="d-flex align-items-center justify-content-between py-3">
                        <h2 class="mb-0">Topics </h2>
                        <button class="btn btn-primary" id='topic-list-btn' data-bs-toggle="modal" data-bs-target="#topic-list-modal"> Create New Topic</button>
                    </div>
                    <div class="table-responsive">
                        <table id="topic-list-dataTable" class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Category Id</th>
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
    <div id="topics-data" data-topics='{{ htmlspecialchars_decode(json_encode($topics, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)) }}'></div>

    @include('dashboard.modals.new-blog')
    @include('dashboard.modals.new-quiz')     
    @include('dashboard.modals.learning-category')
    @include('dashboard.modals.topic-list')   

   <!-- include summernote css/js-->
<script src="{{ asset('js/dashboard.js')}}" > </script>
<script src="summernote-bs5.js"></script>
</body>
</html>