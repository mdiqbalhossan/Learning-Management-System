<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('settings') }}/{{ setting('favicon') }}" class="logo-icon" alt="logo icon">
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
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class="fadeIn animated bx bx-user-circle"></i>
                </div>
                <div class="menu-title">Student</div>
            </a>
            <ul>
                <li> <a href="{{ route('student.create') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Add Student
                    </a>
                </li>
                <li> <a href="{{ route('student.index') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Student List
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ route('purchase.course') }}">
                <div class="parent-icon">
                    <i class="fadeIn animated bx bx-purchase-tag-alt"></i>
                </div>
                <div class="menu-title">Purchased Course</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class="fadeIn animated bx bx-cog"></i>
                </div>
                <div class="menu-title">Settings</div>
            </a>
            <ul>
                <li> <a href="{{ route('setting.main') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Main Setting
                    </a>
                </li>
                <li> <a href="{{ route('setting.payment') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Payment Options
                    </a>
                </li>
                <li> <a href="{{ route('setting.social') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Social Settings
                    </a>
                <li> <a href="{{ route('setting.slider') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Slider Settings
                    </a>
                    {{--
                <li> <a href="{{ route('setting.section') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Section Settings
                    </a> --}}
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
            <a href="{{ route('course.purchase') }}">
                <div class="parent-icon">
                    <i class="fadeIn animated bx bx-label"></i>
                </div>
                <div class="menu-title">Purchased Course</div>
            </a>
        </li>
        @endif


    </ul>
    <!--end navigation-->
</aside>