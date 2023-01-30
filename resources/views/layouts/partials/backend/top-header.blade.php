<header class="top-header">
    <nav class="navbar navbar-expand gap-3">
        <div class="mobile-menu-button">
            <ion-icon name="menu-sharp"></ion-icon>
        </div>
        <form class="searchbar">
            <div class="position-absolute top-50 translate-middle-y search-icon ms-3">
                <ion-icon name="search-sharp"></ion-icon>
            </div>
            <input class="form-control" type="text" placeholder="Search for anything">
            <div class="position-absolute top-50 translate-middle-y search-close-icon">
                <ion-icon name="close-sharp"></ion-icon>
            </div>
        </form>
        <div class="top-navbar-right ms-auto">

            <ul class="navbar-nav align-items-center">
                <li class="nav-item mobile-search-button">
                    <a class="nav-link" href="javascript:;">
                        <div class="">
                            <ion-icon name="search-sharp"></ion-icon>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link dark-mode-icon" href="javascript:;">
                        <div class="mode-icon">
                            <ion-icon name="moon-sharp"></ion-icon>
                        </div>
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-user-setting">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                        data-bs-toggle="dropdown">
                        <div class="user-setting">
                            <img src="{{ asset('settings') }}/{{ Auth::user()->image }}" class="user-img"
                                alt="{{ Auth::user()->name }}">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex flex-row align-items-center gap-2">
                                    <img src="{{ asset('settings') }}/{{ Auth::user()->image }}" alt=""
                                        class="rounded-circle" width="54" height="54">
                                    <div class="">
                                        <h6 class="mb-0 dropdown-user-name">{{ Auth::user()->name }}</h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('admin.profile') }}">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <ion-icon name="person-outline"></ion-icon>
                                    </div>
                                    <div class="ms-3"><span>Profile</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('admin.change.password') }}">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <ion-icon name="settings-outline"></ion-icon>
                                    </div>
                                    <div class="ms-3"><span>Update Password</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <ion-icon name="speedometer-outline"></ion-icon>
                                    </div>
                                    <div class="ms-3"><span>Dashboard</span></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <form method="POST" action="{{ route('logout') }}" id="frm-logout">
                            @csrf

                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <ion-icon name="log-out-outline"></ion-icon>
                                        </div>
                                        <div class="ms-3"><span>Logout</span></div>
                                    </div>
                                </a>
                            </li>
                        </form>

                    </ul>
                </li>

            </ul>

        </div>
    </nav>
</header>