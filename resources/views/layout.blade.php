<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'just Quality')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="@yield('meta_keywords', '')" name="keywords">
    <meta content="@yield('meta_description', '')" name="description">

    <!-- Preload critical assets -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
   

    <!-- Google Web Fonts - Load asynchronously -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Yantramanav:wght@400;500;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">

    <!-- Icon Font Stylesheet - Load asynchronously -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" media="print" onload="this.media='all'" />

    <!-- Critical CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    @vite(['resources/css/style.css', 'resources/css/common.css'])

    <!-- Non-critical CSS - Load asynchronously -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">

    <!-- Fallback for browsers that don't support JS -->
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Yantramanav:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
        <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    </noscript>

    <!-- Include the stack for styles -->
    @stack('styles')

    <!-- Firebase Config for JS -->
    <script>
        window.firebaseConfig = @json($firebaseConfig ?? []);
    </script>
</head>

<body>
    <!-- Spinner Start -->
    @include('partials.spinner')
    <!-- Spinner End -->

    <!-- Topbar Start -->
    {{-- @include('partials.topbar') --}}
    <!-- Topbar End -->

    <!-- Navbar Start -->
    @include('partials.navbar')
    <!-- Navbar End -->

    <!-- Content Section -->
    @yield('content')

    <!-- Footer Start -->
    {{-- <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s"> --}}
        @include('partials.footer') <!-- Create a separate footer file if needed -->
    {{-- </div> --}}
    <!-- Footer End -->
 <!-- this is test -->
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Lazy Loading Script -->
    @vite(['resources/js/lazy-load.js', 'resources/js/firebase.js'])
    <!-- Non-critical JavaScript - Load deferred -->
    <script src="{{ asset('lib/wow/wow.min.js') }}" defer></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}" defer></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}" defer></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}" defer></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}" defer></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" defer></script>

    <!-- Template Javascript -->
    @vite(['resources/js/main.js'])

    @stack('scripts')
</body>

</html>
