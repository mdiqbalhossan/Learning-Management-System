@extends('layouts.app')
@section('title','Lesson')
@push('css')
<link href="{{ asset('backend') }}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
<link href="{{ asset('backend') }}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
<link href="{{ asset('backend') }}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
<link href="{{ asset('backend') }}/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endpush
@section('content')
<!--start breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Lesson</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;">
                        <ion-icon name="copy-sharp"></ion-icon>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Lesson List</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->
<div class="row align-items-end">
    <div class="col">
        <h6 class="mb-0 text-uppercase d-inline">Lesson List</h6>
    </div>
    <div class="col">
        <a href="{{ route('lesson.create') }}" class="btn btn-success px-3 float-end">
            <i class="lni lni-circle-plus"></i><span>Add Lesson</span>
        </a>
    </div>
</div>
<hr />
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Course</th>
                        <th>Section</th>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lessons as $key=>$lesson)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $lesson->course->name }}</td>
                        <td>{{ $lesson->section->name }}</td>
                        <td>{{ $lesson->name }}</td>
                        <td>{{ $lesson->created_at->diffForHumans() }}</td>
                        <td class="d-flex">
                            <a href="{{ route('lesson.edit', $lesson->id) }}" class="btn btn-primary btn-sm"><i
                                    class="fadeIn animated bx bx-edit"></i></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Course</th>
                        <th>Section</th>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="{{ asset('backend') }}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="{{ asset('backend') }}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend') }}/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="{{ asset('backend') }}/assets/js/table-datatable.js"></script>

@endpush