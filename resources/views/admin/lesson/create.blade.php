@extends('layouts.app')
@section('title','Add Lesson')
@push('css')
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
                <li class="breadcrumb-item active" aria-current="page">Add Lesson</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->
<div class="row align-items-end">
    <div class="col">
        <h6 class="mb-0 text-uppercase d-inline">Add Lesson</h6>
    </div>
    <div class="col">
        <button type="button" class="btn btn-danger px-3 float-end">
            <i class="lni lni-backward"></i><span>Back</span>
        </button>
    </div>
</div>
<hr />
<div class="row">
    <div class="col-xl-10 mx-auto">

        <div class="card">
            <div class="card-body">
                <div class="border p-3 rounded">
                    <h6 class="mb-0 text-uppercase">Add Lesson</h6>
                    <hr>
                    <form class="row g-3" method="post" action="{{ route('lesson.store') }}">
                        @csrf
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">Course Name <span
                                    class="text-danger">(*)</span></label>
                            <select class="form-select mb-3" aria-label="Default select example" name="course_id"
                                id="course">
                                <option selected="">Select Course</option>
                                @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">Section Name <span
                                    class="text-danger">(*)</span></label>
                            <select class="form-select mb-3" id="section_id" aria-label="Default select example"
                                name="section_id">
                                <option selected="">Select Section</option>

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">Lesson Type <span
                                    class="text-danger">(*)</span></label>
                            <select class="form-select mb-3" id="type" aria-label="Default select example">
                                <option selected="">Select Type</option>
                                <option value="video">Video</option>
                                <option value="textFile">TextFile</option>
                                <option value="picture">Picture</option>
                            </select>
                        </div>
                        <div class="row g-3 type_dependent">
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Lesson Provider</label>
                                <select class="form-select mb-3" aria-label="Default select example" name="provider">
                                    <option selected="">Select Provider</option>
                                    <option value="youtube">Youtube</option>
                                    <option value="vimeo">Vimeo</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Lesson URL</label>
                                <input type="text" class="form-control" name="url">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Duration</label>
                                <input type="text" class="form-control" name="duration">
                            </div>
                        </div>

                        <div class="mb-3 attachment">
                            <label for="formFile" class="form-label">Attachment</label>
                            <input class="form-control" type="file" name="attachment">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Lesson Name <span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Summary</label>
                            <textarea class="form-control" rows="4" cols="4" name="summary" id="editor"></textarea>
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Add Lesson</button>
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
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function () {
            $(".type_dependent").hide();
            $(".attachment").hide();
            // Type Section Change
            $("#type").on('change', function (e) {
                e.preventDefault();
                var type = e.target.value;
                if(type === 'video'){
                    $('.type_dependent').show();
                    $(".attachment").hide();
                }else{
                    $('.attachment').show();
                    $(".type_dependent").hide();
                }
            });
            // Course Dependent Dropdown
            $('#course').on('change', function (e) {
                e.preventDefault();
                var course_id = e.target.value;
                $.ajax({
                    type: "POST",
                    url: "{{ route('section_id') }}",
                    data: {
                        id: course_id
                    },
                    success: function (response) {
                        $('#section_id').empty();
                        $.each(response.sections, function (index, section) { 
                             $("#section_id").append('<option value="'+section.id+'">'+section.name+'</option>');
                        });
                    }
                });
            });
        });
</script>
@endpush