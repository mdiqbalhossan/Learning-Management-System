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
                        <h4 class="mb-0">289</h4>
                        <p class="mb-0">Total Course</p>
                    </div>
                    <div class="">
                        <h4 class="mb-0">42K</h4>
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
                                        <h4 class="mb-0 text-success">0</h4>
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
            <h6 class="mb-0">Due Courses</h6>
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
                        <th>Level</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#89742</td>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <div class="product-box border">
                                    <img src="assets/images/products/11.png" alt="">
                                </div>
                                <div class="product-info">
                                    <h6 class="product-name mb-1">Smart Mobile Phone</h6>
                                </div>
                            </div>
                        </td>
                        <td>2</td>
                        <td>$214</td>
                        <td><span class="badge alert-success">Completed</span></td>
                        <td>Apr 8, 2021</td>
                        <td>
                            <div class="d-flex align-items-center gap-3 fs-6">
                                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="" data-bs-original-title="View detail"
                                    aria-label="Views">
                                    <ion-icon name="eye-sharp"></ion-icon>
                                </a>
                                <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="" data-bs-original-title="Edit info"
                                    aria-label="Edit">
                                    <ion-icon name="pencil-sharp"></ion-icon>
                                </a>
                                <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                    aria-label="Delete">
                                    <ion-icon name="trash-sharp"></ion-icon>
                                </a>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection