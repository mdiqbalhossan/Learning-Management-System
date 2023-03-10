@extends('layouts.app')

@section('title','User Dashboard')

@section('content')
<div class="row">
    <div class="col col-md-4">
        <div class="card radius-10">
            <div class="card-body text-center">
                <div class="profile-img">
                    <img src="{{ asset('settings') }}/{{ Auth::user()->profile_photo_path }}" class="rounded-circle"
                        width="120" height="120" alt="" />
                </div>
                <div class="mt-4">
                    <h5 class="mb-1">{{ Auth::user()->name }}</h5>
                    <p class="mb-0">{{ Auth::user()->email }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-around mt-4">
                    <div class="">
                        <h4 class="mb-0">{{ $total['course'] }}</h4>
                        <p class="mb-0">Total Course</p>
                    </div>
                    <div class="">
                        <h4 class="mb-0">0</h4>
                        <p class="mb-0">Total Certificate</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col col-md-8">
        <div class="card radius-10">
            <div class="card-body">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-3 row-cols-xxl-3 g-3">
                    <div class="col">
                        <div class="card radius-10 shadow-none bg-light-success mb-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="fs-2 text-success">
                                        <ion-icon name="card-sharp"></ion-icon>
                                    </div>
                                    <div class="fs-6 ms-auto text-success">
                                        <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-4">
                                    <div class="">
                                        <p class="mb-1 text-success">Total Purchased Course</p>
                                        <h4 class="mb-0 text-success">{{ $total['course'] }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 shadow-none bg-light-primary mb-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="fs-2 text-primary">
                                        <ion-icon name="bag-check-sharp"></ion-icon>
                                    </div>
                                    <div class="fs-6 ms-auto text-primary">
                                        <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-4">
                                    <div class="">
                                        <p class="mb-1 text-primary">Total Support Message</p>
                                        <h4 class="mb-0 text-primary">0</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 shadow-none bg-light-danger mb-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="fs-2 text-danger">
                                        <ion-icon name="gift-sharp"></ion-icon>
                                    </div>
                                    <div class="fs-6 ms-auto text-danger">
                                        <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-4">
                                    <div class="">
                                        <p class="mb-1 text-danger">Total Comment</p>
                                        <h4 class="mb-0 text-danger">0</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
</div>
<!--end row-->

{{-- Table --}}
<div class="card radius-10 w-100">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <h6 class="mb-0">Due/Pending Courses</h6>
            <div class="fs-5 ms-auto dropdown">
                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i
                        class="bi bi-three-dots"></i></div>
            </div>
        </div>
        <div class="table-responsive mt-2">
            <table class="table align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>#ID</th>
                        <th>Course</th>
                        <th>Category</th>
                        <th>Payment Status</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dueCourses as $course)
                    <tr>
                        <td>{{ $course->order_number }}</td>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <div class="product-box border">
                                    <img src="{{ asset('uploads/course') }}/{{ $course->course->image }}" alt="">
                                </div>
                                <div class="product-info">
                                    <h6 class="product-name mb-1">{{ $course->course->name }}</h6>
                                </div>
                            </div>
                        </td>
                        <td>{{ $course->course->category->name }}</td>
                        <td>{{ $course->payment_status }}</td>
                        <td><span class="badge alert-success">{{ setting('currency_symbol') }} {{
                                $course->payment_amount }}</span></td>
                        <td>
                            @if ($course->status == 'accepted')
                            <span class="badge alert-success">{{ Str::title($course->status) }}</span>
                            @elseif ($course->status == 'pending')
                            <span class="badge alert-warning">{{ Str::title($course->status) }}</span>
                            @else
                            <span class="badge alert-danger">{{ Str::title($course->status) }}</span>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-3 fs-6">


                                @if ($course->payment_status != 'completed')
                                <a href="{{ route('stripe',$course->id) }}" class="text-primary">
                                    Pay Now
                                </a>
                                @endif

                            </div>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection