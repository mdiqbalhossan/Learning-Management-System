<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Edumel- Education Html Template by dreambuzz">
    <meta name="keywords"
        content="education,edumel,instructor,lms,online,instructor,dreambuzz,bootstrap,kindergarten,tutor,e learning">
    <meta name="author" content="dreambuzz">

    <title>User Login</title>

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

</head>

<body id="top-header">

    <section class="page-wrapper woocommerce single">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-xl-5">
                    <div class="woocommerce-notices-wrapper"></div>
                    <div class="login-form">
                        <div class="form-header">
                            <h2 class="font-weight-bold mb-3">Login</h2>

                            <p class="woocommerce-register">
                                Don't have an account yet? <a href="{{ route('register') }}"
                                    class="text-decoration-underline">Sign Up for
                                    Free</a>
                            </p>
                        </div>
                        <form class="woocommerce-form woocommerce-form-login login" method="post"
                            action="{{ route('login') }}">
                            @csrf
                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                <label for="username">Username or email address&nbsp;<span
                                        class="required">*</span></label>
                                <input type="text"
                                    class="woocommerce-Input woocommerce-Input--text input-text form-control"
                                    name="email" id="username" autocomplete="username" value=""
                                    placeholder="Username or Email" required autofocus>
                            </p>
                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                <label for="password">Password&nbsp;<span class="required">*</span></label>
                                <input class="woocommerce-Input woocommerce-Input--text input-text form-control"
                                    type="password" name="password" id="password" autocomplete="current-password"
                                    placeholder="Password" required autocomplete="current-password">
                            </p>

                            <div class="d-flex align-items-center justify-content-between py-2">
                                <p class="form-row">
                                    <label
                                        class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                        <input class="woocommerce-form__input woocommerce-form__input-checkbox"
                                            name="remember" type="checkbox" id="rememberme" value="forever">
                                        <span>Remember me</span>
                                    </label>
                                </p>

                                <p class="woocommerce-LostPassword lost_password">
                                    <a href="{{ route('password.request') }}">Forgot password?</a>
                                </p>
                            </div>

                            <p class="form-row">
                                <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce"
                                    value="a414dce984"><input type="hidden" name="_wp_http_referer"
                                    value="/my-account/">
                                <button type="submit" class="woocommerce-button button woocommerce-form-login__submit"
                                    name="login" value="Log in">Log in</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--shop register end-->




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


</body>

</html>