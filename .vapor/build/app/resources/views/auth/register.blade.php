<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Edumel- Education Html Template by dreambuzz">
    <meta name="keywords"
        content="education,edumel,instructor,lms,online,instructor,dreambuzz,bootstrap,kindergarten,tutor,e learning">
    <meta name="author" content="dreambuzz">

    <title>User Register</title>

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

    <section class="woocommerce single page-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-7">

                    <div class="signup-form">
                        <div class="form-header">
                            <h2 class="font-weight-bold mb-3">Sign Up</h2>
                            <p class="woocommerce-register">
                                Already have an account? <a href="{{ route('login') }}"
                                    class="text-decoration-underline">Log in</a>
                            </p>
                        </div>

                        <form method="post" class="woocommerce-form woocommerce-form-register register"
                            action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label>Name&nbsp;<span class="required">*</span></label>
                                        <input type="text" class="form-control" name="name" placeholder="Name">
                                    </p>
                                </div>

                                <div class="col-xl-12">
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label>Email&nbsp;<span class="required">*</span></label>
                                        <input type="email" class="form-control" name="email" value=""
                                            placeholder="Your Email">
                                    </p>
                                </div>
                                <div class="col-xl-12">
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label>Phone&nbsp;<span class="required">*</span></label>
                                        <input type="phone" class="form-control" name="phone" value=""
                                            placeholder="Your Phone">
                                    </p>
                                </div>

                                <div class="col-xl-6">
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label>Password&nbsp;<span class="required">*</span></label>
                                        <input type="password" class="form-control" name="password" value=""
                                            placeholder="Password">
                                    </p>
                                </div>
                                <div class="col-xl-6">
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label>Re-Enter Password&nbsp;<span class="required">*</span></label>
                                        <input type="password" class="form-control" name="password_confirmation"
                                            value="" placeholder="Re-Enter Password">
                                    </p>
                                </div>

                                <div class="col-xl-12">
                                    <div class="d-flex align-items-center justify-content-between py-2">
                                        <p class="form-row">
                                            <label
                                                class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__policy">
                                                <input class="woocommerce-form__input woocommerce-form__input-checkbox"
                                                    name="policy" type="checkbox" id="policy" value="forever">
                                                <span>Accept
                                                    the Terms and Privacy Policy</span>
                                            </label>
                                        </p>

                                        <p class="woocommerce-LostPassword lost_password">
                                            <a href="{{ route('password.request') }}">Forgot password?</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <p class="woocommerce-FormRow form-row">
                                <button type="submit" class="woocommerce-button button" name="register"
                                    value="Register">Register</button>
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