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
@php
    $topics = \App\Models\TopicName::all();
@endphp
<div class="container mt-5 pt-5" id="topic-main-content">
    <h1 class="mb-4">Software Testing Syllabus</h1>
    <div class="d-flex gap-2">
        <div class="topic-link border p-2" style="min-width: 30%">
            <h3>Topic Links</h3>
            <ul>
                @foreach ($topics as $topic )
                <li><a href="#{{$topic->name}}">{{ $topic->name }}</a></li>                    
                @endforeach
                {{-- <li><a href="#TypesofTesting">Types of Testing</a></li>
                <li><a href="#TestCaseDevelopment">TestCase Development</a></li>
                <li><a href="#TestingTechniques">Testing Techniques</a></li>
                <li><a href="#TestManagement&Control">Test Management & Control</a></li>
                <li><a href="#Defects">Defects</a></li>
                <li><a href="#Agile">Agile</a></li>
                <li><a href="#TestingDifferentDomains">Testing Different Domains</a></li>
                <li><a href="#WhiteBoxTesting">WhiteBox Testing</a></li>
                <li><a href="#PerformanceTesting">Performance Testing</a></li>
                <li><a href="#AdvanceTestingTopics">Advance Testing Topics</a></li> --}}
                
            </ul>
        </div>
        <div class="accordion" id="qaTopics">
            {{-- @dd($topics) --}}
            @foreach($topics as $topic)
            <div class="card">
                <div class="card-header" id="{{($topic->name) }}">
                    <h2 class="mb-0">{{ $topic->name }}</h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="{{ Str::slug($topic->topic_name) }}" data-parent="#qaTopics">
                    <div class="card-body">
                        <ul id="{{($topic->topic_id) }}">
                           
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
    $(document).ready(function(){
        console.log("Document is ready");
        getAllTopics();
        function getAllTopics(){
            console.log("Getting all topics");
           let baseUrl  = "{{ url("qa/qatopicdetail/showguide")}}";
           console.log(baseUrl);
           
            $.ajax({
                url: '/get-topics',
                type: 'GET',
                success: function(response){
                    console.log( "Topics are : ",  response);
                    let ul = $("#testing-fundamentals");
                    ul.empty();
                    response.forEach(element => {
                        ul.append(`<li><a href="${baseUrl}/${element.id}">${element.title}</a></li>`);
                        
                    });
                }
            }); 
        }
});
</script>
@endpush