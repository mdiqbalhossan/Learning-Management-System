@extends('layouts.app')

@section('title','Purchase Course')

@section('content')
<div class="demo-seprater">
    <h6 class="mb-0 text-uppercase">Purchase Course</h6>
    <div class="my-3 border-bottom"></div>
</div>
<div class="row row-cols-1 row-cols-lg-3">
    @foreach ($courses as $course)
    <div class="col">
        <div class="card">
            <img src="{{ asset('uploads/course') }}/{{ $course->course->image }}" class="card-img-top"
                style="height: 200px;" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $course->course->name }}</h5>
                <p class="card-text">{{ $course->course->short_description }}</p>
                <a href="{{ route('learning.course',$course->course->slug) }}" class="btn btn-primary">Start
                    Learning</a>
            </div>
        </div>
    </div>
    @endforeach


</div>
<!--end row-->
@endsection