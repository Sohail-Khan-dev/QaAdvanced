@extends('layout')

@section('title', 'Contact us')

@section('content')
<div class="bg-gray-100 text-gray-900">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-6 text-center">Quality Assurance Advance Blogs </h1>
        <div id="blog-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Blog posts will be loaded here -->
        </div>
        <div class="row mt-5 pt-5">
            <!-- Blog post item -->
            <div class="col-12 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://via.placeholder.com/40" class="rounded-circle me-2" alt="Author Avatar">
                            <div>
                                <h6 class="mb-0">John Doe</h6>
                                <small class="text-muted">May 15, 2023</small>
                            </div>
                        </div>
                        <h2 class="h4 mb-2"><a href="#" class="text-decoration-none text-dark">The Future of Quality Assurance in Software Development</a></h2>
                        <p class="card-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="badge bg-light text-dark me-1">QA</span>
                                <span class="badge bg-light text-dark">Software</span>
                            </div>
                            <a href="#" class="btn btn-outline-primary btn-sm">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat for more blog posts -->
            
        </div>
        <nav aria-label="Blog navigation" class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
@endsection

