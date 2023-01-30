<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="semi-dark color-header headercolor7">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- loader-->
    <link href="{{ asset('backend') }}/assets/css/pace.min.css" rel="stylesheet" />
    <script src="{{ asset('backend') }}/assets/js/pace.min.js"></script>
    <!--plugins-->
    <!--plugins-->
    <link href="{{ asset('backend') }}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    @stack('css')
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/plugins/notifications/css/lobibox.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/assets/css/style.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!--Theme Styles-->
    <link href="{{ asset('backend') }}/assets/css/semi-dark.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/css/header-colors.css" rel="stylesheet" />

    <title>@yield('title')-{{ config('app.name', 'Laravel') }}</title>

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
    <script src="{{ asset('backend') }}/assets/plugins/notifications/js/lobibox.min.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/notifications/js/notifications.min.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/notifications/js/notification-custom-script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    @stack('js')
    <script>
        function toast (type, icon, message) { 
            Lobibox.notify(type, {
            pauseDelayOnHover: true,
            size: 'mini',
            rounded: true,
            icon: icon,
            delayIndicator: true,
            continueDelayOnInactiveTab: false,
            position: 'top right',
            msg: message
            });
         }
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        var message = "{{ Session::get('message') }}"
        switch(type){
            case 'info':
                toast('info','bx bx-info-circle',message)
            break;
        
            case 'warning':
                toast('warning','bx bx-error',message)
            break;
            
            case 'success':
                toast('success','bx bx-check-circle',message)
            break;
            
            case 'error':
                toast('error','bx bx-x-circle',message)
            break;
        }
        @endif
        
    </script>
    <!-- Main JS-->
    <script src="{{ asset('backend') }}/assets/js/main.js"></script>


</body>

</html>