@extends('layouts.master')
@section('title','About Us')

@section('content')
<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-8">
                <div class="title-block">
                    <h1>About Us</h1>
                    <ul class="header-bradcrumb justify-content-center">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active" aria-current="page">About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-3 section-padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-5 col-lg-6">
                <div class="about-img">
                    <img src="{{ asset('frontend/assets/images/banner/img_9.png') }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="about-content mt-5 mt-lg-0">
                    <div class="heading mb-50">
                        <span class="subheading">10 years Glory of success</span>
                        <h2 class="font-lg">Some reasons why Start Your Online Learning with Us</h2>
                    </div>

                    <div class="about-features">
                        <div class="feature-item feature-style-left">
                            <div class="feature-icon icon-bg-3 icon-radius">
                                <i class="fa fa-video"></i>
                            </div>
                            <div class="feature-text">
                                <h4>Online Classes</h4>
                                <p>Brainacademia facilitate the delivery of online classes by providing a platform for
                                    instructors
                                    to create and manage digital course content, assessments, and evaluations. </p>
                            </div>
                        </div>

                        <div class="feature-item feature-style-left">
                            <div class="feature-icon icon-bg-2 icon-radius">
                                <i class="far fa-file-certificate"></i>
                            </div>
                            <div class="feature-text">
                                <h4>Skilled Instructors</h4>
                                <p>Brainacademia provide skilled instructors with a platform to
                                    create and deliver high-quality
                                    courses and training programs.</p>
                            </div>
                        </div>

                        <div class="feature-item feature-style-left">
                            <div class="feature-icon icon-bg-1 icon-radius">
                                <i class="fad fa-users"></i>
                            </div>
                            <div class="feature-text">
                                <h4>Get Certificate</h4>
                                <p>In Brainacademia, certificates can be awarded to learners who
                                    successfully complete a course or
                                    program within the system. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section END -->


<!-- Counter Section start -->
<section class="counter-section4" style="margin: 20px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 counter-inner">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item mb-5 mb-lg-0">
                            <div class="count">
                                @if (totalCount('student') < 1000) <span class="counter h2">{{ totalCount('student')
                                    }}</span>
                                    @else
                                    @php
                                    $total = $totalCount('student')/1000;
                                    @endphp
                                    <span class="counter h2">{{ $total }}</span><span>k</span>
                                    @endif
                            </div>
                            <p>Students</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item mb-5 mb-lg-0">
                            <div class="count">
                                <span class="counter h2">{{ totalCount('course') }}</span><span>+</span>
                            </div>
                            <p>Online Courses</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item mb-5 mb-lg-0">
                            <div class="count">
                                <span class="counter h2">100</span>
                            </div>
                            <p>Finished Seasons</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item">
                            <div class="count">
                                <span class="counter h2">100</span><span>%</span>
                            </div>
                            <p>Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- COunter Section End -->
@endsection