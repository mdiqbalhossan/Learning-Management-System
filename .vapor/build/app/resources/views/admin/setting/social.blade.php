@extends('layouts.app')
@section('title','Social Settings')
@push('css')
@endpush
@section('content')
<!--start breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Social Settings</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;">
                        <ion-icon name="copy-sharp"></ion-icon>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Social Settings</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->
<div class="row align-items-end">
    <div class="col">
        <h6 class="mb-0 text-uppercase d-inline">Social Settings</h6>
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
                    <h6 class="mb-0 text-uppercase">Social Settings</h6>
                    <hr>
                    <form class="row g-3" method="post" action="{{ route('setting.social.update') }}"
                        enctype="multipart/form-data">
                        @csrf                        
                        <div class="col-12">
                            <label class="form-label">Facebook</label>
                            <input type="text" class="form-control" name="facebook" value="{{ $setting->social_link->facebook }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Twitter</label>
                            <input type="text" class="form-control" name="twitter"
                                value="{{ $setting->social_link->twitter }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Linked In</label>
                            <input type="text" class="form-control" name="linkedin"
                                value="{{ $setting->social_link->linkedin }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Youtube</label>
                            <input type="text" class="form-control" name="youtube"
                                value="{{ $setting->social_link->youtube }}">
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