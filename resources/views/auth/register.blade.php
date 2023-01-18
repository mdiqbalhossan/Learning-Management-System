<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- loader-->
    <link href="{{ asset('backend') }}/assets/css/pace.min.css" rel="stylesheet" />
    <script src="{{ asset('backend') }}/assets/js/pace.min.js"></script>

    <!--plugins-->
    <link href="{{ asset('backend') }}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/assets/css/style.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <title>User Registration</title>
</head>

<body class="bg-white">

    <!--start wrapper-->
    <div class="wrapper">
        <div class="">
            <div class="row g-0 m-0">
                <div class="col-xl-6 col-lg-12">
                    <div class="login-cover-wrapper">
                        <div class="card shadow-none">
                            <div class="card-body">
                                <div class="text-center">
                                    <h4>Join us today</h4>
                                    <p>Enter your email and password to register</p>
                                </div>
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                                @endif
                                <form class="form-body row g-3" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="col-12">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required autofocus
                                            autocomplete="name">
                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            required autocomplete="new-password">
                                    </div>
                                    <div class="col-12">
                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="password_confirmation"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                    <div class="col-12 col-lg-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                I agree the Terms and Conditions
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-warning">Sign Up</button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12">
                                        <div class="position-relative border-bottom my-3">
                                            <div class="position-absolute seperator translate-middle-y">or continue with
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12">
                                        <div
                                            class="social-login d-flex flex-row align-items-center justify-content-center gap-2 my-2">
                                            <a href="javascript:;" class=""><img
                                                    src="{{ asset('backend') }}/assets/images/icons/facebook.png"
                                                    alt=""></a>
                                            <a href="javascript:;" class=""><img
                                                    src="{{ asset('backend') }}/assets/images/icons/apple-black-logo.png"
                                                    alt=""></a>
                                            <a href="javascript:;" class=""><img
                                                    src="{{ asset('backend') }}/assets/images/icons/google.png"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12 text-center">
                                        <p class="mb-0">Already have an account? <a href="{{ route('login') }}">Sign
                                                in</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="position-absolute top-0 h-100 d-xl-block d-none register-cover-img">
                        <div class="text-white p-5 w-100">

                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
    <!--end wrapper-->


</body>

</html>