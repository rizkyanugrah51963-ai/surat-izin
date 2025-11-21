<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'AbsenFlow - Surat Izin')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link href="{{ asset('user/assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries -->
    <link href="{{ asset('user/assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}">

    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}">
</head>

<body>
    <div class="container-xxl bg-white p-0">

        @include('partials.navbar')

        @yield('content')

        @include('partials.footer')

    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('user/assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('user/assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('user/assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('user/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('user/assets/lib/lightbox/js/lightbox.min.js') }}"></script>

    <script src="{{ asset('user/assets/js/main.js') }}"></script>
</body>

</html>
