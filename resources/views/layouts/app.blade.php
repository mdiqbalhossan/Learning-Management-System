<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- loader-->
    <link href="{{ asset('backend') }}/assets/css/pace.min.css" rel="stylesheet" />
    <script src="{{ asset('backend') }}/assets/js/pace.min.js"></script>

    <!--plugins-->
    <link href="{{ asset('backend') }}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/assets/css/style.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!--Theme Styles-->
    <link href="{{ asset('backend') }}/assets/css/dark-theme.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/css/semi-dark.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/css/header-colors.css" rel="stylesheet" />

    <title>@yield('title')-{{ config('app.name', 'Laravel') }}</title>
    @stack('css')
</head>

<body>


    <!--start wrapper-->
    <div class="wrapper">
        <!--start sidebar -->
        @include('layouts.partials.backend.sidebar')
        <!--end sidebar -->

        <!--start top header-->
        @include('layouts.partials.backend.top-header')
        <!--end top header-->


        <!-- start page content wrapper-->
        <div class="page-content-wrapper">
            <!-- start page content-->
            <div class="page-content">

                @yield('content')

            </div>
            <!-- end page content-->
        </div>
        <!--end page content wrapper-->


        <!--start footer-->
        <footer class="footer">
            <div class="footer-text">
                Copyright © 2021. All right reserved.
            </div>
        </footer>
        <!--end footer-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top">
            <ion-icon name="arrow-up-outline"></ion-icon>
        </a>
        <!--End Back To Top Button-->



        <!--start overlay-->
        <div class="overlay"></div>
        <!--end overlay-->

    </div>
    <!--end wrapper-->





    <!-- JS Files-->
    <script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">
    </script>
    <!--plugins-->
    <script src="{{ asset('backend') }}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/chartjs/chart.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/index3.js"></script>
    <!-- Main JS-->
    <script src="{{ asset('backend') }}/assets/js/main.js"></script>
    @stack('js')

</body>

</html>