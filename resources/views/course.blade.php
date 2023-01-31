@extends('layouts.master')

@section('title', 'Courses')

@section('content')
<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-8">
                <div class="title-block">
                    <h1>Courses</h1>
                    <ul class="header-bradcrumb justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li class="active" aria-current="page">Courses</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--course section start-->
<section class="section-padding page">
    <div class="course-top-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <p>Showing 1-{{ $courses->count() }} of {{ $courses->total() }} results</p>
                </div>

                <div class="col-lg-4">
                    <div class="topbar-search">
                        <form method="get" action="#">
                            <input type="text" placeholder="Search our courses" class="form-control">
                            <label><i class="fa fa-search"></i></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            @foreach ($courses as $course)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="course-grid course-style-3">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img src="{{ asset('uploads/course') }}/{{ $course->image }}" alt="" class="img-fluid"
                                style="height: 200px;">
                        </div>
                    </div>

                    <div class="course-content">
                        <div class="course-meta d-flex justify-content-between mb-20">
                            <span class="category">{{ $course->category->name }}</span>
                            <span class="label"><i class="fas fa-signal me-2"></i>{{ Str::title($course->level)
                                }}</span>
                        </div>
                        <h3 class="course-title mb-20"> <a href="{{ route('single.course', $course->slug) }}">{{
                                $course->name }}</a>
                        </h3>

                        <div class="course-meta-info">
                            <div class="d-flex align-items-center">
                                <div class="author me-3">
                                    <img src="assets/images/course/course-2.jpg" alt="" class="img-fluid">
                                    By <a href="#">Josephin</a>
                                </div>
                                <span class="students"><i class="far fa-user-alt me-2"></i>51 Students</span>
                            </div>
                        </div>

                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between">
                            <div class="course-price">
                                @if ($course->is_free == 1)
                                <span class="price">Free</span>
                                @else
                                {{ setting('currency_symbol') }} {{ $course->current_price ?
                                $course->default_price : $course->current_price }}
                                @endif
                            </div>
                            <a href="{{ route('single.course', $course->slug) }}"
                                class="btn btn-main-outline btn-radius btn-sm">Buy Now <i
                                    class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $courses->links('vendor.pagination.tailwind') }}

            <!-- COURSE END -->
        </div>
    </div>
    <!--course-->
</section>
@endsection