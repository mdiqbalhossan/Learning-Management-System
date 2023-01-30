@extends('layouts.app')
@section('title','Student List')
@push('css')
<link href="{{ asset('backend') }}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
<link href="{{ asset('backend') }}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
<link href="{{ asset('backend') }}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
<link href="{{ asset('backend') }}/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
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
                <li class="breadcrumb-item active" aria-current="page">Student List</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->
<div class="row align-items-end">
    <div class="col">
        <h6 class="mb-0 text-uppercase d-inline">Student List</h6>
    </div>
    <div class="col">
        <a href="{{ route('student.create') }}" class="btn btn-success px-3 float-end">
            <i class="lni lni-circle-plus"></i><span>Add Student</span>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Phone</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $key=>$student)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td><img src="{{ asset('uploads/student') }}/{{ $student->profile_photo_path }}" width="32px"
                                alt=""></td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->created_at->diffForHumans() }}</td>
                        <td class="d-flex">
                            <a href="{{ route('student.edit', $student->id) }}" class="btn btn-primary btn-sm"><i
                                    class="fadeIn animated bx bx-edit"></i></a>

                            <form method="POST" class="ms-2" action="{{ route('student.destroy', $student->id) }}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn btn-sm btn-danger btn-flat show_confirm"
                                    data-toggle="tooltip" title='Delete'><i
                                        class="fadeIn animated bx bx-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Phone</th>
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
<script>
    $('.show_confirm').click(function(event) {
var form = $(this).closest("form");
var name = $(this).data("name");
event.preventDefault();
swal({
title: `Are you sure you want to delete this record?`,
text: "If you delete this, it will be gone forever.",
icon: "warning",
buttons: true,
dangerMode: true,
})
.then((willDelete) => {
if (willDelete) {
form.submit();
}
});
});
</script>
@endpush