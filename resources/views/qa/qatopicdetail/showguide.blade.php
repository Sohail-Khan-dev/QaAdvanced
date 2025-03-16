@extends('layout')

@section('title', 'ISTQB Guide')

@section('content')
    <!-- Events Start -->
    <div class="container-fluid guide py-5">
        <div class="container py-5">
            <div class="pb-5">
                <div class="row g-4 align-items-end">
                    <div class="col-xl-12 col-12">
                        {{-- <h5 class="text-secondary sub-title fw-bold wow fadeInUp mt-4" data-wow-delay="0.1s">Quality Assurance</h5> --}}
                        <h2 class="display-2 mb-0 wow fadeInUp title" data-wow-delay="0.3s"> {{ $artical->title}} </h2>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-12 d-flex">
                    <div class=" col-4 h-100">
                        <nav class="position-sticky" style="z-index: 1020; top:5rem;">
                            <h4 class="guide-sidebar-title pt-15">Quick Access</h4>
                            <ul class="guide-list">
                                <li><a href="#What-is-website-QA">What is website QA?</a></li>
                                <li><a href="#How-does-QA-differ-from-other-testing-types">How does QA differ from other testing types?</a></li>
                                <li><a href="#Why-is-it-important">Why is it important?</a></li>
                                <li><a href="#How-to-carry-out-website-QA-testing">How to carry out website QA testing</a></li>
                                <li><a href="#QA-best-practices">QA best practices</a></li>
                                <li><a href="#What-tools-can-you-use-for-your-website-QA">What tools can you use for your website QA?</a></li>
                                <li><a href="#Website-QA-checklist">Website QA checklist</a></li>
                                <li><a href="#In-conclusion">In conclusion</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-8" id="artical-content">
                        {!! $artical->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Events End -->
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            let headingsText = $("#artical-content").find('h1').map(function() {
                return { text: $(this).text(), id: $(this).attr("id") || "" };
            }).get();

            let listHtml = headingsText.map(h => 
                `<li><a href="#${h.id}">${h.text}</a></li>`
            ).join("");

            $(".guide-list").html(listHtml);
        });

    </script>
@endpush()
