<header class="header-style-1">
    <div class="header-topbar topbar-style-1">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-8 col-lg-8 col-sm-6">
                    <div class="header-contact text-center text-sm-start text-lg-start">
                        <a href="{{ route('home') }}">{{ setting('address') }}</a>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="header-socials text-center text-lg-end">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-navbar navbar-sticky">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="site-logo">
                    <a href="index.html">
                        <img src="{{ asset('settings') }}/{{ setting('logo') }}" alt="" class="img-fluid" />
                    </a>
                </div>

                <div class="offcanvas-icon d-block d-lg-none">
                    <a href="#" class="nav-toggler"><i class="fal fa-bars"></i></a>
                </div>

                <div class="header-category-menu d-none d-xl-block">
                    <ul>
                        <li class="has-submenu">
                            <a href="#"><i class="fa fa-th me-2"></i>Categories</a>
                            <ul class="submenu">
                                @foreach ($categories as $category)
                                <li><a href="#">{{ $category->name }}</a></li>

                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>

                <nav class="site-navbar ms-auto">
                    <ul class="primary-menu">
                        <li class="current">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li><a href="about.html">About</a></li>

                        <li>
                            <a href="courses.html">Courses</a>
                        </li>

                        <li>
                            <a href="blog.html">Blog</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>

                    <a href="#" class="nav-close"><i class="fal fa-times"></i></a>
                </nav>

                <div class="header-btn d-none d-xl-block">
                    @if (Auth::guard('web')->check())
                    <a href="{{ route('dashboard') }}" class="login">Dashboard</a>
                    <a href="{{ route('logout') }}" class="btn btn-main-2 btn-sm-2 rounded">Logout</a>
                    @else
                    <a href="{{ route('login') }}" class="login">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-main-2 btn-sm-2 rounded">Sign up</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>