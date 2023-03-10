@extends('layouts.app')
@section('title','Profile Settings')

@push('css')

@endpush

@section('content')

<!--start breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Profile</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;">
                        <ion-icon name="home-outline"></ion-icon>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->

<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card radius-10">
            <div class="card-body">
                <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h5 class="mb-3">Edit Profile</h5>
                    <div class="mb-4 d-flex flex-column gap-3 align-items-center justify-content-center">
                        <div class="user-change-photo shadow">
                            <img src="{{ asset('settings') }}/{{ $setting->image }}" alt="...">
                        </div>

                        <button type="button" class="btn btn-outline-primary btn-sm radius-30 px-4" id="change_photo">
                            <ion-icon name="image-sharp"></ion-icon>Change Photo
                        </button>
                    </div>
                    <h5 class="mb-0 mt-4">User Information</h5>
                    <hr>
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Email address</label>
                            <input type="text" class="form-control" name="email" value="{{ $setting->email }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $setting->name }}">
                        </div>
                    </div>

                    <h5 class="mb-0 mt-4">Contact Information</h5>
                    <hr>
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" value="{{ $setting->address }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" value="{{ $setting->mobile }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">About Me</label>
                            <textarea class="form-control" rows="4" name="about_me"
                                cols="4">{{ $setting->about }}</textarea>
                        </div>
                        <div class="col-12" id="upload_content">
                            <label class="form-label">Profile Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                    <div class="text-start mt-3">
                        <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!--end row-->

@endsection

@push('js')
<script>
    $("#change_photo").click(function() {
        $('html, body').animate({
            scrollTop: $("#upload_content").offset().top
        }, 1000);
    });
</script>
@endpush