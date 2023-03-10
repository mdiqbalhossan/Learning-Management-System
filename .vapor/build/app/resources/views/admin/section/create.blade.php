@extends('layouts.app')
@section('title','Add Section')
@push('css')
@endpush
@section('content')
<!--start breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Section</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;">
                        <ion-icon name="copy-sharp"></ion-icon>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Add Section</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->
<div class="row align-items-end">
    <div class="col">
        <h6 class="mb-0 text-uppercase d-inline">Add Section</h6>
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
                    <h6 class="mb-0 text-uppercase">Add Section</h6>
                    <hr>
                    <form class="row g-3" method="post" action="{{ route('section.store') }}">
                        @csrf
                        <div class="col-md-12">
                            <label for="validationCustom01" class="form-label">Course Name <span
                                    class="text-danger">(*)</span></label>
                            <select class="form-select mb-3" aria-label="Default select example" name="course_id">
                                <option selected="">Select Course</option>
                                @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Section Name <span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Add Section</button>
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