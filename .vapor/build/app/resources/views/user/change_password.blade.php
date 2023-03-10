@extends('layouts.app')
@section('title','Update Password')

@section('content')
<!--start breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Change Password</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;">
                        <ion-icon name="home-outline"></ion-icon>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Change Password</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->

<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card radius-10">
            <div class="card-body">
                @include('layouts.partials.error')
                <form action="{{ route('change.password.update') }}" method="POST">
                    @csrf
                    <h5 class="mb-0 mt-4">Update Password</h5>
                    <hr>
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Old Password</label>
                            <input type="password" class="form-control" name="old_password"">
                        </div>
                        <div class=" col-6">
                            <label class="form-label">New Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation">
                        </div>
                    </div>
                    <div class="text-start mt-3">
                        <button type="submit" class="btn btn-primary px-4">Update Password</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!--end row-->
@endsection