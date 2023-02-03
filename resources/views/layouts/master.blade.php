<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Edumel- Education Html Template by dreambuzz">
    <meta name="keywords"
        content="education,edumel,instructor,lms,online,instructor,dreambuzz,bootstrap,kindergarten,tutor,e learning">
    <meta name="author" content="dreambuzz">

    <title>@yield('title')</title>

    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/bootstrap/bootstrap.css">
    <!-- Iconfont Css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/flaticon/flaticon.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/fonts/gilroy/font-gilroy.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/magnific-popup/magnific-popup.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/animate-css/animate.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/animated-headline/animated-headline.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/owl/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/owl/assets/owl.theme.default.min.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/woocomerce.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/responsive.css">

    @stack('css')
    
</head>

<body id="top-header">



    @include('layouts.partials.frontend.header')
    <!--====== Header End ======-->
    @yield('content')

    <!-- Footer section start -->
    @include('layouts.partials.frontend.footer')
    <!-- Footer section End -->






    <!-- 
    Essential Scripts
    =====================================-->

    <!-- Main jQuery -->
    <script src="{{ asset('frontend') }}/assets/vendors/jquery/jquery.js"></script>
    <!-- Bootstrap 5:0 -->
    <script src="{{ asset('frontend') }}/assets/vendors/bootstrap/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendors/bootstrap/bootstrap.js"></script>
    <!-- Counterup -->
    <script src="{{ asset('frontend') }}/assets/vendors/counterup/waypoint.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendors/counterup/jquery.counterup.min.js"></script>
    <!--  Owl Carousel -->
    <script src="{{ asset('frontend') }}/assets/vendors/owl/owl.carousel.min.js"></script>
    <!-- Isotope -->
    <script src="{{ asset('frontend') }}/assets/vendors/isotope/jquery.isotope.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendors/isotope/imagelaoded.min.js"></script>
    <!-- Animated Headline -->
    <script src="{{ asset('frontend') }}/assets/vendors/animated-headline/animated-headline.js"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('frontend') }}/assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>

    <script src="{{ asset('frontend') }}/assets/js/script.js"></script>

    @stack('js')
</body>

</html>