<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="Capacitación en tecnologías innovadoras">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Title -->
    <title>Capasitacion</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('img/favicon.png') }}">

    <!-- NFTMax Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/charts.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slickslider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">

</head>

<body>

    <div class="body-bg" style="background-image:url('{{ asset('img/body-bg.jpg') }}')">

        <!--sidevar -->
        @include('dashboard.sidevar')
        <!-- Endsidevar-->
        <!-- End Connect to Wallet -->

        <!-- Start Header -->
        @include('dashboard.header')
        <!-- End Header -->

        <!-- NFTmax Dashboard -->
        @yield('content')
        <!-- End NFTmax Dashboard -->

    </div>

    <!-- Jquery JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/slickslider.min.js') }}"></script>
    <script src="{{ asset('js/charts.js') }}"></script>
    <script src="{{ asset('js/countdown.min.js') }}"></script>
    <script src="{{ asset('js/final-countdown.min.js') }}"></script>
    <script src="{{ asset('js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
