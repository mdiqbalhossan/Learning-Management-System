@extends('layouts.app')
@section('title','Edit Student')
@push('css')
@endpush
@section('content')
<!--start breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Student</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;">
                        <ion-icon name="copy-sharp"></ion-icon>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit Student</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->
<div class="row align-items-end">
    <div class="col">
        <h6 class="mb-0 text-uppercase d-inline">Edit Student</h6>
    </div>
    <div class="col">
        <button type="button" class="btn btn-danger px-3 float-end">
            <i class="lni lni-backward"></i><span>Back</span>
        </button>
    </div>
</div>
<hr />
<div class="row">
    <div class="col-xl-8 mx-auto">

        <div class="card">
            <div class="card-body">
                <div class="border p-3 rounded">
                    <h6 class="mb-0 text-uppercase">Edit Student</h6>
                    <hr>
                    <form class="row g-3" method="post" action="{{ route('student.update',$student->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-12">
                            <label class="form-label">Student Name <span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" name="name" value="{{ $student->name }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Student Email <span class="text-danger">(*)</span></label>
                            <input type="email" class="form-control" name="email" value="{{ $student->email }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Student Phone</label>
                            <input type="text" class="form-control" name="phone" value="{{ $student->phone }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Student Address</label>
                            <input type="text" class="form-control" name="address" value="{{ $student->address }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Profile Photo</label>
                            <input class="form-control" type="file" name="profile_photo_path">
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Update Student</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')

@endpush