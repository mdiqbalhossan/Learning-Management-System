@extends('layouts.app')
@section('title','Admin Dashboard')

@section('content')
{{-- Card --}}
<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 row-cols-xxl-4">
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="">
                        <p class="mb-1">Total Orders</p>
                        <h4 class="mb-0 text-primary">{{ $total['orders'] }}</h4>
                    </div>
                    <div class="ms-auto text-primary fs-2">
                        <ion-icon name="bag-handle-sharp"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="">
                        <p class="mb-1">Total Student</p>
                        <h4 class="mb-0 text-danger">{{ $total['users'] }}</h4>
                    </div>
                    <div class="ms-auto text-danger fs-2">
                        <ion-icon name="people-sharp"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="">
                        <p class="mb-1">Total Income</p>
                        <h4 class="mb-0 text-success">{{ $total['income'] }}</h4>
                    </div>
                    <div class="ms-auto text-success fs-2">
                        <ion-icon name="wallet-sharp"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="">
                        <p class="mb-1">Total Course</p>
                        <h4 class="mb-0 text-info">{{ $total['course'] }}</h4>
                    </div>
                    <div class="ms-auto text-info fs-2">
                        <ion-icon name="pie-chart-sharp"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Chart --}}
<div class="row">
    <div class="col-12 col-lg-12 col-xl-12 d-flex">
        <div class="card radius-10 overflow-hidden w-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <h6 class="mb-0">Monthly Orders</h6>
                </div>
                <div class="chart-container1">
                    <canvas id="chart1"></canvas>
                </div>
            </div>
        </div>
    </div>

</div>
<!--end row-->

{{-- Top Category --}}
<div class="row">
    <div class="col-12 col-lg-12 col-xl-6">
        <div class="card radius-10 w-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <h6 class="mb-0">Top Categories</h6>
                    <div class="dropdown options ms-auto">
                        <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                            <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                        </div>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                            <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                            <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 g-3 mt-2 align-items-center">
                    <div class="col-lg-7 col-xl-7 col-xxl-8">
                        <div class="chart-container6">
                            <div class="piechart-legend">
                                <h2 class="mb-1">68%</h2>
                                <h6 class="mb-0">Total Sales</h6>
                            </div>
                            <canvas id="chart2"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-5 col-xxl-4">
                        <div class="">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item border-0 d-flex align-items-center gap-2">
                                    <ion-icon name="ellipse-sharp" class="text-info"></ion-icon><span>Electronics</span>
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center gap-2">
                                    <ion-icon name="ellipse-sharp" class="text-danger"></ion-icon><span>Furniture</span>
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center gap-2">
                                    <ion-icon name="ellipse-sharp" class="text-success"></ion-icon><span>Fashion</span>
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center gap-2">
                                    <ion-icon name="ellipse-sharp" class="text-primary"></ion-icon>
                                    <span>Accessories</span>
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center gap-2">
                                    <ion-icon name="ellipse-sharp" class="text-warning"></ion-icon><span>Mobiles</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-12 col-xl-6">
        <div class="card radius-10 w-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <h6 class="mb-0">Customers</h6>
                    <div class="dropdown options ms-auto">
                        <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                            <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                        </div>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                            <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                            <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 g-3 mt-2 align-items-center">
                    <div class="col-lg-7 col-xl-7 col-xxl-7">
                        <div class="chart-container6">
                            <div class="piechart-legend">
                                <h2 class="mb-1">48K</h2>
                                <h6 class="mb-0">Customers</h6>
                            </div>
                            <canvas id="chart3"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-5 col-xxl-5">
                        <div class="">
                            <div class="d-flex align-items-start gap-2 mb-3">
                                <div>
                                    <ion-icon name="ellipse-sharp" class="text-info"></ion-icon>
                                </div>
                                <div>
                                    <p class="mb-1">Current Customers</p>
                                    <p class="mb-0 h5">66%</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-2 mb-3">
                                <div>
                                    <ion-icon name="ellipse-sharp" class="text-danger"></ion-icon>
                                </div>
                                <div>
                                    <p class="mb-1">New Customers</p>
                                    <p class="mb-0 h5">48%</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <div>
                                    <ion-icon name="ellipse-sharp" class="text-success"></ion-icon>
                                </div>
                                <div>
                                    <p class="mb-1">Retargeted Customers</p>
                                    <p class="mb-0 h5">25%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end row-->
{{-- recent Order --}}
<div class="card radius-10">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <h6 class="mb-0">Recent Orders</h6>
            <div class="fs-5 ms-auto dropdown">
                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown">
                    <div class="fs-5 ms-auto">
                        <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                    </div>
                </div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <div class="table-responsive mt-2">
            <table class="table align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>#ID</th>
                        <th>Course</th>
                        <th>User</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recent_orders as $key=>$order)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <div class="product-box border">
                                    <img src="{{ asset('uploads/course') }}/{{ $order->course->image }}" alt="">
                                </div>
                                <div class="product-info">
                                    <h6 class="product-name mb-1">{{ $order->course->name }}</h6>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <div class="product-box border">
                                    <img src="{{ asset('uploads/student') }}/{{ $order->user->profile_photo_path }}"
                                        alt="">
                                </div>
                                <div class="product-info">
                                    <h6 class="product-name mb-1">{{ $order->user->name }}</h6>
                                </div>
                            </div>
                        </td>
                        <td>${{ $order->payment_amount }}</td>
                        <td>{{ $order->payment_time }}</td>
                        <td><span
                                class="badge {{ $order->payment_status == 'completed' ? 'alert-success' : 'alert-warning' }}">{{
                                $order->payment_status }}</span></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
@push('js')
<!--plugins-->
<script src="{{ asset('backend') }}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="{{ asset('backend') }}/assets/plugins/chartjs/chart.min.js"></script>
<script src="{{ asset('backend') }}/assets/js/index3.js"></script>
@endpush