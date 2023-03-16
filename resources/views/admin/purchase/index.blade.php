@extends('layouts.app')
@section('title','Purchase Course List')
@push('css')
<link href="{{ asset('backend') }}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
<link href="{{ asset('backend') }}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
<link href="{{ asset('backend') }}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
<link href="{{ asset('backend') }}/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endpush
@section('content')
<!--start breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Purchase Course List</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;">
                        <ion-icon name="copy-sharp"></ion-icon>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Purchase Course List</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->
<div class="row align-items-end">
    <div class="col">
        <h6 class="mb-0 text-uppercase d-inline">Purchase Course List</h6>
    </div>
    {{-- <div class="col">
        <a href="{{ route('category.create') }}" class="btn btn-success px-3 float-end">
            <i class="lni lni-circle-plus"></i><span>Add Category</span>
        </a>
    </div> --}}
</div>
<hr />
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Student</th>
                        <th>Course</th>
                        <th>Payment Method</th>
                        <th>Payment Status</th>
                        <th>Payment Amount</th>
                        <th>Payment Date</th>
                        <th>Payment Number</th>
                        <th>Transaction Id</th>
                        <th>Reference Number</th>
                        <th>Payment Currency</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($enroll_courses as $key=>$course)
                    <tr>
                        <td>{{ $course->order_number }}</td>
                        <td>{{ $course->user->name }}</td>
                        <td>{{ $course->course->name }}</td>
                        <td>{{ Str::title($course->payment_method) }}</td>
                        <td>{{ Str::title($course->payment_status) }}</td>
                        <td>{{ setting('currency_symbol') }}{{ $course->payment_amount }}</td>
                        <td>{{ $course->payment_time }}</td>
                        <td>{{ $course->payment_number }}</td>
                        <td>{{ $course->transaction_id }}</td>
                        <td>{{ $course->reference_number }}</td>
                        <td>{{ $course->payment_currency }}</td>
                        <td>{{ Str::title($course->status) }}</td>
                        <td>
                            <a href="{{ route('purchase.course.edit', $course->id) }}" class="btn btn-success btn-sm"><i
                                    class="fadeIn animated bx bx-edit"></i></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Order ID</th>
                        <th>Student</th>
                        <th>Course</th>
                        <th>Payment Method</th>
                        <th>Payment Status</th>
                        <th>Payment Amount</th>
                        <th>Payment Date</th>
                        <th>Payment Number</th>
                        <th>Transaction Id</th>
                        <th>Reference Number</th>
                        <th>Payment Currency</th>
                        <th>Status</th>
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