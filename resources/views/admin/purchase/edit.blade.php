@extends('layouts.app')
@section('title','Edit Category')
@push('css')
@endpush
@section('content')
<!--start breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Category</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;">
                        <ion-icon name="copy-sharp"></ion-icon>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit Purchase Status</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->
<div class="row align-items-end">
    <div class="col">
        <h6 class="mb-0 text-uppercase d-inline">Edit Purchase Status</h6>
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
                    <h6 class="mb-0 text-uppercase">Edit Category</h6>
                    <hr>
                    <form class="row g-3" method="post"
                        action="{{ route('purchase.course.update',$enroll_courses->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-6">
                            <div class="form-check">
                                <label class="form-check-label" for="gridCheck1">
                                    Select Status
                                </label>
                                <select class="form-select mb-3" aria-label="Default select example" name="status">
                                    <option selected="">Open this select menu</option>
                                    <option value="accepted" {{ $enroll_courses->status == 'accepted' ? 'selected' : ''
                                        }}>Accepted</option>
                                    <option value="pending" {{ $enroll_courses->status == 'pending' ? 'selected' : ''
                                        }}>Pending</option>
                                    <option value="cancelled" {{ $enroll_courses->status == 'cancelled' ? 'selected' :
                                        ''
                                        }}>Cancel</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Update Status</button>
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