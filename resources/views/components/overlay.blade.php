<div class="card mb-3 card-topic">
    <div class="card-body text-center bg-light rounded">
        <span> {{ $topic_name  ?? "Dummy TExt"}} </span>
        <div class="overlay rounded">
            <a href="{{ $learn_link }}" class="bg-secondary rounded-start">Learn More</a>
            <a href="{{ $quiz_link }}" class="bg-secondary rounded-end">Take Quiz</a>
        </div>
    </div>
</div>
