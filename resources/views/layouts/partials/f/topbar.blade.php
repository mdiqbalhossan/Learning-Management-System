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
                    <li>
                        <a class="btn btn-primary" href="{{ route('login') }}"><i class="fa fa-lock"></i>
                            Login</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>