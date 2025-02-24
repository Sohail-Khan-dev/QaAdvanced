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

</head>
<body>
    @include('dashboard.navbar')    
    <div class="container-fluid">
        <div class="row">
           
            <main role="main" class="col-md-9 ms-auto col-lg-10 px-4" style="margin-left: 10rem;">
                <div class="d-flex align-items-center justify-content-between py-3">
                    <h2 class="mb-0">Dashboard</h2>
                    <button class="btn btn-primary" id='new-topic-btn' data-bs-toggle="modal" data-bs-target="#new-topic-modal"> Create New Topic</button>
                </div>
                @include('dashboard.modals.new-topic')     
                <div class="table-responsive">
                    <table id="dataTable" class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>title</th>
                                <th>content</th>
                                {{-- <th>Value</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data will be loaded here via AJAX -->
                        </tbody>
                    </table>
                </div>
            </main>
            
        </div>
    </div>
   <!-- include summernote css/js-->
<script src="{{ asset('js/dashboard.js')}}" > </script>
<script src="summernote-bs5.js"></script>
</body>
</html>