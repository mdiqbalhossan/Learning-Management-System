@extends('layouts.app')
@section('title','Payment Settings')
@push('css')
@endpush
@section('content')
<!--start breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Payment Settings</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;">
                        <ion-icon name="copy-sharp"></ion-icon>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Payment Settings</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->
<div class="row align-items-end">
    <div class="col">
        <h6 class="mb-0 text-uppercase d-inline">Payment Settings</h6>
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
                    <h6 class="mb-0 text-uppercase">Payment Settings</h6>
                    <hr>
                    <form class="row g-3" method="post" action="{{ route('setting.payment.update') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <label class="form-label">STRIPE KEY</label>
                            <input type="text" class="form-control" value="{{ env('STRIPE_KEY') }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">STRIPE SECRET</label>
                            <input type="text" class="form-control" value="{{ env('STRIPE_SECRET') }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Currency</label>
                            <input type="text" class="form-control" name="currency" value="{{ $setting->currency }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Currency Symbol</label>
                            <input type="text" class="form-control" name="currency_symbol"
                                value="{{ $setting->currency_symbol }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Currency Position</label>
                            <input type="text" class="form-control" name="currency_position"
                                value="{{ $setting->currency_position }}">
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