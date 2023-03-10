@extends('layouts.master')

@section('title', $course->name . ' - ' . setting('title'))

@section('content')
<section class="page-wrapper">
    <div class="tutori-course-content ">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    <div class="course-header-wrapper">
                        <div class="course-thumb">
                            <img src="{{ asset('uploads/course') }}/{{ $course->image }}" alt=""
                                class="img-fluid w-100">
                        </div>

                        <div class="course-single-header">
                            <h2 class="course-title">{{ $course->name }}</h2>
                            <p>{{$course->short_description}}
                            </p>

                            <div class="course-header-meta">
                                <ul class="inline-list list-info">
                                    <li>
                                        <div class="course-author">
                                            <img src="{{ asset('settings') }}/{{ getAdmin()->image }}" alt="#">{{
                                            getAdmin()->name }}
                                        </div>
                                    </li>
                                    <li>
                                        <div class="course-author">
                                            <img src="{{ asset('uploads/category') }}/{{ $course->category->image }}"
                                                alt="#">{{ $course->category->name }}
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list-rating">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span class="rating-count">(19)</span>
                                        </div>
                                    </li>
                                    <li><i class="fa fa-user me-2"></i>{{ totalStudent($course->id) }} enrolled students
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <nav class="course-single-tabs learn-press-nav-tabs">
                        <div class="nav nav-tabs course-nav" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home"
                                role="tab" aria-controls="nav-home-tab" aria-selected="true">Overview</a>
                            <a class="nav-item nav-link" id="nav-topics-tab" data-bs-toggle="tab" href="#nav-topics"
                                role="tab" aria-controls="nav-topics-tab" aria-selected="false">Curriculam</a>
                            {{-- <a class="nav-item nav-link" id="nav-instructor-tab" data-bs-toggle="tab"
                                href="#nav-instructor" role="tab" aria-controls="nav-instructor-tab"
                                aria-selected="false">Instructor</a> --}}
                            <a class="nav-item nav-link" id="nav-feedback-tab" data-bs-toggle="tab" href="#nav-feedback"
                                role="tab" aria-controls="nav-feedback-tab" aria-selected="false">Reviews</a>
                        </div>
                    </nav>


                    <div class="tab-content tutori-course-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="single-course-details ">
                                <h4 class="course-title">Description</h4>
                                {!! $course->details !!}
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-topics" role="tabpanel" aria-labelledby="nav-topics-tab">
                            <div class="tutori-course-curriculum">
                                <div class="curriculum-scrollable">
                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        @foreach ($sections as $key => $section)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-{{ $section->id }}"
                                                    aria-expanded="{{ $key == 0 ? 'true': '' }}"
                                                    aria-controls="panelsStayOpen-collapseOne">
                                                    {{ $section->name }}
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-{{ $section->id }}"
                                                class="accordion-collapse collapse {{ $key == 0 ? 'show': '' }}"
                                                aria-labelledby="panelsStayOpen-headingOne">
                                                <div class="accordion-body">
                                                    @php
                                                    $lessons = getLesson($section->id, $section->course_id);
                                                    @endphp
                                                    <ul class="list-group">
                                                        @foreach ($lessons as $lesson)
                                                        <li
                                                            class="list-group-item d-flex justify-content-between align-items-start">
                                                            <div class="ms-2 me-auto">
                                                                <div class="fw-bold"><i class="fa fa-play-circle"
                                                                        aria-hidden="true"></i> {{ $lesson->name }}
                                                                </div>
                                                                {{ $lesson->summary }}
                                                            </div>
                                                            <span class="text-secondary">{{
                                                                $lesson->duration }}</span>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="tab-pane fade" id="nav-instructor" role="tabpanel"
                            aria-labelledby="nav-instructor-tab">
                            <!-- Course instructor start -->
                            <div class="courses-instructor">
                                <div class="single-instructor-box">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="instructor-image">
                                                <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
                                            </div>
                                        </div>

                                        <div class="col-lg-8 col-md-8">
                                            <div class="instructor-content">
                                                <h4><a href="#">Tutori</a></h4>
                                                <span class="sub-title">Web Developer</span>

                                                <p>Jone Smit is a celebrated photographer, author, and writer who brings
                                                    passion to everything he does.</p>

                                                <div class="intructor-social-links">
                                                    <span class="me-2">Follow Me: </span>
                                                    <a href="#"> <i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"> <i class="fab fa-twitter"></i></a>
                                                    <a href="#"> <i class="fab fa-linkedin-in"></i></a>
                                                    <a href="#"> <i class="fab fa-youtube"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Conurse  instructor end -->
                        </div> --}}
                        <div class="tab-pane fade" id="nav-feedback" role="tabpanel" aria-labelledby="nav-feedback-tab">
                            <div id="course-reviews">
                                <ul class="course-reviews-list">
                                    <li>
                                        <div class="course-review">
                                            <div class="course-single-review">
                                                <div class="user-image">
                                                    <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
                                                </div>

                                                <div class="user-content user-review-content">
                                                    <div class="review-header mb-10">
                                                        <h4 class="user-name">Tutori</h4>
                                                        <p class="review-title">Cover all topicc </p>
                                                        <div class="rating review-stars-rated">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star-half"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="review-text">
                                                        <div class="review-content">
                                                            The course identify things we want to change and then figure
                                                            out the things that need to be done to create the desired
                                                            outcome. The course helped me in clearly define problems and
                                                            generate a wider variety of quality solutions. Support more
                                                            structures analysis of options leading to better decisions.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="course-review">
                                            <div class="course-single-review">
                                                <div class="user-image">
                                                    <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
                                                </div>

                                                <div class="user-content user-review-content">
                                                    <div class="review-header mb-10">
                                                        <h4 class="user-name">Tutori</h4>
                                                        <p class="review-title">Cover all topicc </p>
                                                        <div class="rating review-stars-rated">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star-half"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="review-text">
                                                        <div class="review-content">
                                                            The course identify things we want to change and then figure
                                                            out the things that need to be done to create the desired
                                                            outcome. The course helped me in clearly define problems and
                                                            generate a wider variety of quality solutions. Support more
                                                            structures analysis of options leading to better decisions.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-xl-4">
                    <!-- Course Sidebar start -->
                    <div class="course-sidebar course-sidebar-2 mt-5 mt-lg-0">
                        <div class="course-widget course-details-info">
                            <div class="course-thumbnail">
                                <img src="{{ asset('uploads/course') }}/{{ $course->image }}" alt=""
                                    class="img-fluid w-100">
                            </div>

                            <div class="price-header">
                                @if ($course->is_free)
                                <h2 class="course-price">Free
                                </h2>
                                @else
                                @if ($course->current_price)
                                <h2 class="course-price">{{ setting('currency_symbol') }} {{ $course->current_price }}
                                    <span>{{ setting('currency_symbol') }} {{ $course->default_price }}</span>
                                </h2>
                                @else
                                <h2 class="course-price">{{ setting('currency_symbol') }} {{ $course->default_price }}
                                </h2>
                                @endif
                                @endif

                                <span class="course-price-badge onsale">39% off</span>
                            </div>

                            <ul class="course-sidebar-list">
                                <li>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><i class="far fa-sliders-h"></i>Level</span>
                                        {{ $course->level }}
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><i class="fas fa-play-circle"></i>Lectures</span>
                                        {{ totalLesson($course->id) }}
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><i class="far fa-user"></i>Students</span>
                                        {{ totalStudent($course->id) }}
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><i class="far fa-calendar"></i>Updated </span>
                                        {{ $course->updated_at->diffForHumans() }}
                                    </div>
                                </li>
                            </ul>
                            <div class="buy-btn">
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                                    <input type="hidden" name="course_name" value="{{ $course->name }}">
                                    <input type="hidden" name="course_price"
                                        value="{{ $course->current_price ?? $course->default_price }}">
                                    <input type="hidden" name="course_slug" value="{{ $course->slug }}">
                                    <input type="hidden" name="course_image" value="{{ $course->image }}">
                                    <button type="submit" class="button button-enroll-course btn btn-main-2 rounded">
                                        <i class="far fa-shopping-cart me-2"></i> Enroll Course
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="course-latest">
                            <h4 class="mb-4">Popular Courses</h4>
                            <ul class="recent-posts course-popular">
                                @foreach ($popular_courses as $course)
                                <li>
                                    <div class="widget-post-thumb">
                                        <a href="{{ route('single.course', $course->slug) }}"><img
                                                src="{{ asset('uploads/course') }}/{{ $course->image }}" alt=""
                                                class="img-fluid"></a>
                                    </div>
                                    <div class="widget-post-body">
                                        <h6> <a href="{{ route('single.course', $course->slug) }}">{{ $course->name
                                                }}</a></h6>
                                        <h5>{{ setting('currency_symbol') }} {{ $course->is_free ? 'Free' :
                                            ($course->current_price ? $course->current_price: $course->default_price) }}
                                        </h5>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection