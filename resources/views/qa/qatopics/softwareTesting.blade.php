@extends('layout')

@section('title', 'Software Testing')
<style>
    #qaTopics .card {
        margin-bottom: 1rem;
    }

    .topic-link {
        position: sticky;
        top: 5rem;
        min-width: 30%;
        height: fit-content;
    }
    h1{
        font-size: 1.3rem;
    }
</style>
@section('content')
    <div class="container mt-5 pt-5" id="topic-main-content">
        <h1 class="mb-4">Software Testing Syllabus</h1>
        <div class="d-flex gap-2">
            <div class="topic-link border p-2" style="min-width: 30%">
                <h3>Topic Links</h3>
                <ul>
                    @foreach ($topics as $topic)
                        <li><a href="#{{ $topic->name }}">{{ $topic->name }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="accordion" id="qaTopics">
                @foreach ($topics as $topic)
                    <div class="card">
                        <div class="card-header" id="{{ $topic->name }}">
                            <h2 class="mb-0">{{ $topic->name }}</h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="{{ Str::slug($topic->topic_name) }}"
                            data-parent="#qaTopics">
                            <div class="card-body">
                                <ul id="{{ $topic->topic_id }}">
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            // We have to store All the Topic in 2D Array and access through it. 
            getAllTopics();
            function getAllTopics() {
                let categoryId = "{{ $category_id}}";
                let baseUrl = "{{ url('qa/qatopicdetail/showguide') }}";
                $.ajax({
                    url: '/get-blog/'+categoryId,
                    type: 'GET',
                    success: function(response) {
                        response.forEach(element => { 
                            $("#" + element.slug).prepend(
                                `<li><a href="${baseUrl}/${element.id}">${element.title}</a></li>`
                                );
                        });
                    }
                });
            }
        });
    </script>
@endpush
