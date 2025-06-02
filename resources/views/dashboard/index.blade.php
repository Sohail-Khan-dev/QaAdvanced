<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
        
        @vite(['resources/css/dashboard.css'])
        <!-- include summernote css -->
        <link href="summernote-bs5.css" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Load jQuery first in the head to ensure it's available for all scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <style>
            @media (max-width: 768px) {
                .top-buttons {
                    margin-left: 10rem;
                }
            }

            @media (max-width: 991px) {
                .top-buttons {
                    margin-left: 4rem;
                }
            }

            .pl-8 {
                padding-left: 10rem;
            }
        </style>
</head>

<body class="bg-light">
    @include('dashboard.navbar')
    <div class="container-fluid top-buttons">
        <div class="row" id="main">
            <div id="dashboard-content">
                <div class="ps-5 mt-5 ms-5">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-center mb-4 mt-n5">Dashboard</h3>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center g-3">
                        <div class="col-md-3 col-sm-4 col-lg-2 cursor-pointer blog-link"
                            data-content="learning-category" data-url="/get-category"
                            data-table="learning-category-dataTable">
                            <div class="card text-center shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="bi bi-journal-text"></i>Learning Category </h5>
                                    <p class="card-text text-muted">Here you can create new learning Category</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-lg-2 cursor-pointer blog-link" data-content="topic-list"
                            data-url="/get-topic" data-table="topic-list-dataTable">
                            <div class="card text-center shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="bi bi-journal-text"></i> Topics</h5>
                                    <p class="card-text text-muted">Here you can add topics to existing category</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-lg-2 cursor-pointer blog-link" data-content='blog-content'
                            data-url="/get-blog" data-table="blog-dataTable">
                            <div class="card text-center shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="bi bi-journal-text"></i> Blog Detail</h5>
                                    <p class="card-text text-muted">Here you can create blog and manage blog details</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-lg-2 cursor-pointer blog-link" data-content='quiz-category'
                            data-url="/get-quiz-category" data-table="quiz-category-dataTable">
                            <div class="card text-center shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="bi bi-puzzle"></i> Quiz Category</h5>
                                    <p class="card-text text-muted">Here you can create and manage quizzes Category.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-lg-2 cursor-pointer blog-link" data-content='quiz-content'
                            data-url="/get-quizzes" data-table="quiz-dataTable">
                            <div class="card text-center shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="bi bi-puzzle"></i> Quiz</h5>
                                    <p class="card-text text-muted">Here you can create and manage quizzes easily.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-lg-2 cursor-pointer blog-link" data-content='question-content'
                            data-url="/get-questions" data-table="question-dataTable">
                            <div class="card text-center shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="bi bi-puzzle"></i> Question</h5>
                                    <p class="card-text text-muted">Here you can create and manage Questions easily.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="blog-content" class="d-none pl-8">
                <main role="main" class="col-11 ms-5">
                    <div class="d-flex align-items-center justify-content-between py-3">
                        <h2 class="mb-0">Blogs </h2>
                        <button class="btn btn-primary" id='new-blog-btn' data-bs-toggle="modal"
                            data-bs-target="#new-blog-modal"> Create New Blog</button>
                    </div>
                    <div class="table-responsive">
                        <table id="blog-dataTable" class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Id</th>
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
            <div id="question-content" class="d-none pl-8">
                <main role="main" class="col-11 ms-5">
                    <div class="d-flex align-items-center justify-content-between py-3">
                        <h2 class="mb-0">Questions </h2>
                        <button class="btn btn-primary" id='new-question-btn' data-bs-toggle="modal" data-bs-target="#new-question-modal"> Create New Question</button>
                    </div>
                    <div class="table-responsive">
                        <table id="question-dataTable" class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Id</th>
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
            <div id="quiz-category" class="d-none pl-8">
                <main role="main" class="col-11 ms-5">
                    <div class="d-flex align-items-center justify-content-between py-3">
                        <h2 class="mb-0">Quizzes </h2>
                        <button class="btn btn-primary" id='new-quiz-category-btn' data-bs-toggle="modal"
                            data-bs-target="#quiz-category-modal"> Create New Quiz Category</button>
                    </div>
                    <div class="table-responsive">
                        <table id="quiz-category-dataTable" class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Id</th>
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
            <div id="quiz-content" class="d-none pl-8">
                <main role="main" class="col-11 ms-5">
                    <div class="d-flex align-items-center justify-content-between py-3">
                        <h2 class="mb-0">Quizzes </h2>
                        <button class="btn btn-primary" id='new-quiz-btn' data-bs-toggle="modal"
                            data-bs-target="#new-quiz-modal"> Create New Quiz</button>
                    </div>
                    <div class="table-responsive">
                        <table id="quiz-dataTable" class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Quiz</th>
                                    <th>Total Questions</th>
                                    <th style="max-width: 10%">action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
            <div id="learning-category" class="d-none pl-8">
                <main role="main" class="col-11 ms-5">
                    <div class="d-flex align-items-center justify-content-between py-3">
                        <h2 class="mb-0">Categories </h2>
                        <button class="btn btn-primary" id='learning-category-btn' data-bs-toggle="modal"
                            data-bs-target="#learning-category-modal"> Create New Category</button>
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
            <div id="topic-list" class="d-none pl-8">
                <main role="main" class="col-11 ms-5">
                    <div class="d-flex align-items-center justify-content-between py-3">
                        <h2 class="mb-0">Topics </h2>
                        <button class="btn btn-primary" id='topic-list-btn' data-bs-toggle="modal"
                            data-bs-target="#topic-list-modal"> Create New Topic</button>
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
     <!-- Include all modals first -->
    @include('dashboard.modals.new-blog')
    @include('dashboard.modals.new-quiz')
    @include('dashboard.modals.learning-category')
    @include('dashboard.modals.topic-list')
    @include('dashboard.modals.new-questions')
    @include('dashboard.modals.new-quiz-category')

    <!-- Load scripts in correct order -->
    <!-- jQuery is already loaded in the head -->
    <script>
        window.topics = @json($topics); // Pass topics to a global variable
        window.categories = @json($categories); // Pass categories to a global variable
    </script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap Bundle (includes Popper.js) - must be after jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="summernote-bs5.js"></script>
    @vite(['resources/js/dashboard.js'])

</body>

</html>

