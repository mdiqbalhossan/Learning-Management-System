<header class="header">
    <div class="container">
        <div class="hovermenu ttmenu">
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="logo">
                        <a class="navbar-brand" href="{{ route('home') }}"><img
                                src="{{ asset('frontend') }}/images/xlogo.png.pagespeed.ic.vap6Ukaf0i.png" alt=""></a>
                    </div>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown ttmenu-half">
                            <a href="{{ route('home') }}" data-toggle="dropdown" class="dropdown-toggle">Home</a>

                        </li>
                        <li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown"
                                class="dropdown-toggle">Category
                                <b class="fa fa-angle-down"></b></a>
                            <ul class="dropdown-menu menu-bg wbg">
                                <li>
                                    <div class="ttmenu-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="box">
                                                    <ul>
                                                        @foreach ($categories as $category)
                                                        <li><a href="{{ $category->slug }}">{{ $category->name }}</a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="page-about.html">About</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="page-contact.html">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="btn btn-success" href="{{ route('cart') }}"><i class="fa fa-cart-plus"></i>
                                Cart ({{ Cart::getTotalQuantity()}})</a></li>
                        @if (Auth::guard('web')->check())
                        <li><a class="btn btn-primary" href="{{ route('dashboard') }}"><i class="fa fa-user"></i>
                                My Account</a></li>
                        @else
                        <li><a class="btn btn-primary" href="{{ route('register') }}"><i class="fa fa-sign-in"></i>
                                Register Now</a></li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>