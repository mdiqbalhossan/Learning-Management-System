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
    <link href="{{ asset('backend') }}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/assets/css/style.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <title>Admin Login</title>
</head>

<body>

    <!--start wrapper-->
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto mt-5">
                    <div class="card radius-10">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h4>Sign In</h4>
                                <p>Sign In to Admin Dashboard</p>
                            </div>
                            <form class="form-body row g-3" method="POST" action="{{ route('admin.login') }}">
                                @csrf
                                <div class="col-12">
                                    <label for="inputEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" name="email" required
                                        autofocus>
                                </div>
                                <div class="col-12">
                                    <label for="inputPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="inputPassword" name="password"
                                        required autocomplete="current-password">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckRemember" name="remember">
                                        <label class="form-check-label" for="flexSwitchCheckRemember">Remember
                                            Me</label>
                                    </div>
                                </div>
                                @if (Route::has('password.request'))
                                <div class="col-12 col-lg-6 text-end">
                                    <a href="authentication-reset-password-simple.html">Forgot Password?</a>
                                </div>
                                @endif
                                <div class="col-12 col-lg-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Sign In</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="my-5">
            <div class="container">
                <div class="text-center">
                    <p class="my-4">Copyright © 2021 UI Admin by Codervent.</p>
                </div>
            </div>
        </footer>
    </div>
    <!--end wrapper-->


</body>

</html>