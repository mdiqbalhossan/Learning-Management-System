<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
                <p><i class="fa fa-graduation-cap"></i> Best learning management template for ever.</p>
            </div>
            <div class="col-md-6 text-right">
                <ul class="list-inline">
                    <li>
                        <a class="social" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="social" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="social" href="#"><i class="fa fa-google-plus"></i></a>
                        <a class="social" href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                    @if (Auth::guard('web')->check())
                    <li>
                        <form method="POST" action="{{ route('logout') }}" id="frm-logout">
                            @csrf
                        </form>
                        <a class="btn btn-primary" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i
                                class="fa fa-sign-out"></i>
                            Logout</a>
                    </li>
                    @else
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-lock"></i>
                            Login & Register</a>
                        <div class="dropdown-menu">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-title">
                                    <h4>Login Area</h4>
                                    <hr>
                                </div>
                                <input class="form-control" type="text" name="email" placeholder="User Name or email">
                                <div class="formpassword">
                                    <input class="form-control" type="password" name="password" placeholder="******">
                                </div>
                                <div class="clearfix"></div>
                                <button type="submit" class="btn btn-block btn-primary">Login</button>
                                <hr>
                                <h4><a href="{{ route('register') }}">Create an Account</a></h4>
                            </form>
                        </div>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>