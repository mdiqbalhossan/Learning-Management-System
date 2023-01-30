@extends('layouts.app')
@section('title','Main Settings')
@push('css')
@endpush
@section('content')
<!--start breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Main Settings</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;">
                        <ion-icon name="copy-sharp"></ion-icon>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Main Settings</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->
<div class="row align-items-end">
    <div class="col">
        <h6 class="mb-0 text-uppercase d-inline">Main Settings</h6>
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
                    <h6 class="mb-0 text-uppercase">Main Settings</h6>
                    <hr>
                    <form class="row g-3" method="post" action="{{ route('setting.main.update') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <label class="form-label">Site Title </label>
                            <input type="text" class="form-control" name="title" value="{{ $setting->title }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Site Description </label>
                            <textarea class="form-control" rows="4" name="description"
                                cols="4">{{ $setting->description }}</textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" value="{{ $setting->address }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $setting->email }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" value="{{ $setting->phone }}">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Logo</label>
                            <input class="form-control" type="file" name="logo">
                        </div>

                        <img src="{{ asset('settings') }}/{{ $setting->logo }}" alt="" width="48px">
                        <hr>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Favicon</label>
                            <input class="form-control" type="file" name="favicon">
                        </div>

                        <img src="{{ asset('settings') }}/{{ $setting->favicon }}" alt="" width="48px">
                        <hr>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload User Login Background</label>
                            <input class="form-control" type="file" name="login_background">
                        </div>
                        <img src="{{ asset('settings') }}/{{ $setting->login_background }}" alt="" width="48px">
                        <hr>
                        <div class="col-12">
                            <label class="form-label">Footer Text</label>
                            <input type="text" class="form-control" name="footer_text"
                                value="{{ $setting->footer_text }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Powered By Text</label>
                            <input type="text" class="form-control" name="powered_by"
                                value="{{ $setting->powered_by }}">
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Update Settings</button>
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