@extends('layout')

@section('title', 'Blogs')

@section('content')
    <div class="bg-gray-100 text-gray-900">
        <div class="container mx-auto px-4 py-8" style="margin-top: 7rem;">
            <h1 class="text-4xl font-bold mb-6 text-center">Quality Assurance Advance Blogs </h1>
            <div id="blog-container" class="row">
                <!-- Blog posts will be loaded here -->
                @foreach ($blogs as $blog)
                    <div class="col-12 mb-4">
                        <div class="card border-0 shadow h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                        class="bi bi-person-circle me-2 text-primary" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>
                                    <div>
                                        <h6 class="mb-0">{{ $blog->author_name }}</h6>
                                        <small class="text-muted">{{ $blog->updated_at->format('F d, Y') }}</small>
                                    </div>
                                </div>
                                <h2 class="h4 mb-2"><a href="{{url('qa/qatopicdetail/showguide/'.$blog->id)}}"
                                        class="text-decoration-none text-dark">{{ $blog->title }}</a></h2>
                                <p class="card-text mb-3">{{ Str::limit($blog->content, 150) }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        @if ($blog->tags)
                                            @foreach ($blog->tags as $tag)
                                                <span class="badge bg-light text-dark me-1">{{ $tag }}</span>
                                            @endforeach
                                        @endif
                                    </div>
                                    <a href="{{url('qa/qatopicdetail/showguide/'.$blog->id)}}" class="btn btn-outline-primary btn-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
