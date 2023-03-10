@extends('layouts.master')

@section('title', setting('title'))

@section('content')

<!-- Banner Section Start -->
@include('layouts.partials.frontend.banner')
<!-- Banner Section End -->

<!--  Feature Intro Start -->
@include('layouts.partials.frontend.intro')
<!--  Feature Intro End -->




<!--  Course category -->
@include('layouts.partials.frontend.category')
<!--  Course category End -->
<!-- Counter Section start -->
@include('layouts.partials.frontend.counter')
<!-- COunter Section End -->



<!--course section start-->
@include('layouts.partials.frontend.course')
<!--course section end-->


<!-- Section cta start -->
@include('layouts.partials.frontend.cta')
<!-- Section cta End -->
<!-- Work Process Section Start -->
@include('layouts.partials.frontend.work')
<!-- Work Process Section End -->
<!-- Testimonial section start -->
@include('layouts.partials.frontend.testimonial')
<!-- Testimonial section End -->

<!-- InstructorsSection Start -->
@include('layouts.partials.frontend.instructor')
<!--Instructors Section End -->

@endsection