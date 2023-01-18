<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend') }}/assets/images/logo-icon-2.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">{{ Auth::guard('admin')->check() ? 'Admin' : 'User' }}</h4>
        </div>
        <div class="toggle-icon ms-auto">
            <ion-icon name="menu-sharp"></ion-icon>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        @if (Auth::guard('admin')->check())
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon">
                    <ion-icon name="home-sharp"></ion-icon>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{ route('category.index') }}">
                <div class="parent-icon">
                    <i class="fadeIn animated bx bx-label"></i>
                </div>
                <div class="menu-title">Category</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <ion-icon name="copy-sharp"></ion-icon>
                </div>
                <div class="menu-title">Course</div>
            </a>
            <ul>
                <li> <a href="{{ route('course.create') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Add Course
                    </a>
                </li>
                <li> <a href="{{ route('course.index') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Course List
                    </a>
                </li>
                <li> <a href="{{ route('section.index') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Add Section
                    </a>
                </li>
                <li> <a href="{{ route('lesson.index') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Add Lesson
                    </a>
                </li>
            </ul>
        </li>
        @else
        <li>
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon">
                    <ion-icon name="home-sharp"></ion-icon>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="parent-icon">
                    <i class="fadeIn animated bx bx-label"></i>
                </div>
                <div class="menu-title">Course</div>
            </a>
        </li>
        @endif


    </ul>
    <!--end navigation-->
</aside>