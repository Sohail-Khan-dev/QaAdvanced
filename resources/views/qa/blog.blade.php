@extends('layout')

@section('title', 'Blogs')

@section('content')
    <div class="bg-gray-100 text-gray-900">
        <div class="container mx-auto px-4 py-8" style="margin-top: 7rem;">
            <h1 class="text-4xl font-bold mb-6 text-center">Quality Assurance Advance Blogs </h1>
            <div id="blog-container" class="row">
                <!-- Blog posts will be loaded here -->
                @if($blogs->count() > 0)
                    @foreach ($blogs as $blog)
                    <div class="col-6 mb-4">
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
                                        <small class="text-muted">{{ $blog->created_at->diffForHumans() }} • {{ $blog->created_at->format('M d, Y') }}</small>
                                    </div>
                                </div>
                                <h2 class="h4 mb-2"><a href="{{url('qa/qatopicdetail/showguide/'.$blog->id)}}"
                                        class="text-decoration-none text-dark">{{ $blog->title }}</a></h2>
                                <p class="card-text mb-3">{{ Str::limit(strip_tags($blog->content), 150) }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        @if ($blog->tags)
                                            @foreach ($blog->tags as $tag)
                                                <span class="badge bg-light text-dark me-1">{{ trim($tag) }}</span>
                                            @endforeach
                                        @endif
                                    </div>
                                    <a href="{{url('qa/qatopicdetail/showguide/'.$blog->id)}}" class="btn btn-outline-primary btn-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="col-12 text-center py-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-journal-text text-muted mb-4" viewBox="0 0 16 16">
                            <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-12a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3z"/>
                        </svg>
                        <h3 class="text-muted">No blogs found</h3>
                        <p class="text-muted">Check back later for new content</p>
                    </div>
                @endif
            </div>
            <div class="mt-4 d-flex justify-content-center">
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
@endsection
