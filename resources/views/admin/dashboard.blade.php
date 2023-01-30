@extends('layouts.app')
@section('title','Admin Dashboard')

@section('content')
<!--start breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Dashboard</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;">
                        <ion-icon name="home-outline"></ion-icon>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">eCommerce</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <button type="button" class="btn btn-outline-primary">Settings</button>
            <button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                    href="javascript:;">Action</a>
                <a class="dropdown-item" href="javascript:;">Another action</a>
                <a class="dropdown-item" href="javascript:;">Something else here</a>
                <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
            </div>
        </div>
    </div>
</div>
<!--end breadcrumb-->


<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-cols-xxl-3">
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="widget-icon-2 bg-gradient-info text-white">
                        <ion-icon name="bag-handle-sharp"></ion-icon>
                    </div>
                    <div class="fs-5 ms-auto">
                        <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                    </div>
                </div>
                <h5 class="my-3">Total Orders</h5>
                <div class="progress mt-1" style="height: 5px;">
                    <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 65%">
                    </div>
                </div>
                <p class="mb-0 mt-2">48,256<span class="float-end text-danger">-2.8%</span></p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="widget-icon-2 bg-gradient-danger text-white">
                        <ion-icon name="card-sharp"></ion-icon>
                    </div>
                    <div class="fs-5 ms-auto">
                        <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                    </div>
                </div>
                <h5 class="my-3">Total Expense</h5>
                <div class="progress mt-1" style="height: 5px;">
                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 65%">
                    </div>
                </div>
                <p class="mb-0 mt-2">$98,246<span class="float-end text-success">+5.9%</span></p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="widget-icon-2 bg-gradient-success text-white">
                        <ion-icon name="wallet-sharp"></ion-icon>
                    </div>
                    <div class="fs-5 ms-auto">
                        <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                    </div>
                </div>
                <h5 class="my-3">Total Income</h5>
                <div class="progress mt-1" style="height: 5px;">
                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 65%">
                    </div>
                </div>
                <p class="mb-0 mt-2">$58,653,24<span class="float-end text-success">+5.9%</span></p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="widget-icon-2 bg-gradient-purple text-white">
                        <ion-icon name="people-sharp"></ion-icon>
                    </div>
                    <div class="fs-5 ms-auto">
                        <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                    </div>
                </div>
                <h5 class="my-3">New Visitors</h5>
                <div class="progress mt-1" style="height: 5px;">
                    <div class="progress-bar bg-gradient-purple" role="progressbar" style="width: 65%">
                    </div>
                </div>
                <p class="mb-0 mt-2">87,532,16<span class="float-end text-success">+8.5%</span></p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="widget-icon-2 bg-gradient-branding text-white">
                        <ion-icon name="pie-chart-sharp"></ion-icon>
                    </div>
                    <div class="fs-5 ms-auto">
                        <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                    </div>
                </div>
                <h5 class="my-3">Bounce Rate</h5>
                <div class="progress mt-1" style="height: 5px;">
                    <div class="progress-bar bg-gradient-branding" role="progressbar" style="width: 65%"></div>
                </div>
                <p class="mb-0 mt-2">24.3%<span class="float-end text-danger">-5.6%</span></p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="widget-icon-2 bg-gradient-warning text-white">
                        <ion-icon name="logo-facebook" role="img" class="md hydrated" aria-label="logo facebook">
                        </ion-icon>
                    </div>
                    <div class="fs-5 ms-auto">
                        <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                    </div>
                </div>
                <h5 class="my-3">Followers</h5>
                <div class="progress mt-1" style="height: 5px;">
                    <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 65%">
                    </div>
                </div>
                <p class="mb-0 mt-2">1,328<span class="float-end text-success">+7.6%</span></p>
            </div>
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