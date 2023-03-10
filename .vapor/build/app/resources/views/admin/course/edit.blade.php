@extends('layouts.app')
@section('title','Edit Course')
@push('css')
@endpush
@section('content')
<!--start breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Course</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;">
                        <ion-icon name="copy-sharp"></ion-icon>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit Course</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->
<div class="row align-items-end">
    <div class="col">
        <h6 class="mb-0 text-uppercase d-inline">Edit Course</h6>
    </div>
    <div class="col">
        <button type="button" class="btn btn-danger px-3 float-end">
            <i class="lni lni-backward"></i><span>Back</span>
        </button>
    </div>
</div>
<hr />
<div class="row">
    <div class="col-xl-12 mx-auto">

        <div class="card">
            <div class="card-body">
                <div class="border p-3 rounded">
                    <h6 class="mb-0 text-uppercase">Edit Course</h6>
                    <hr>
                    <form class="row g-3" method="post" action="{{ route('course.update',$course->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-12">
                            <label class="form-label">Course Name <span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" name="name" value="{{ $course->name }}">
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">Course Category <span
                                    class="text-danger">(*)</span></label>
                            <select class="form-select mb-3" aria-label="Default select example" name="category_id">
                                <option selected="">Select Cateegory</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $course->category_id == $category->id ?
                                    'selected':'' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">Course Level</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="level">
                                <option selected="">Select Course Level</option>
                                <option value="begineer" {{ $course->level == 'begineer' ?
                                    'selected':'' }}>Begineer</option>
                                <option value="intermidiate" {{ $course->level == 'intermidiate' ?
                                    'selected':'' }}>Intermidiate</option>
                                <option value="advance" {{ $course->level == 'advance' ?
                                    'selected':'' }}>Advance</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Course Details</label>
                            <textarea class="form-control" rows="4" cols="4" name="details"
                                id="editor">{{ $course->details }}</textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Short Details</label>
                            <textarea class="form-control" rows="2" cols="4"
                                name="short_details">{{ $course->short_description }}</textarea>
                        </div>
                        <div class="col-12">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                    name="is_popular" {{ $course->is_popular != null ? 'checked':'' }}>
                                <label class="form-check-label" for="flexSwitchCheckDefault">Is Popular?</label>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">Course Provider Source</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="source">
                                <option selected="">Select One</option>
                                <option value="youtube" {{ $course->source == 'youtube' ?
                                    'selected':'' }}>Youtube</option>
                                <option value="vimeo" {{ $course->source == 'vimeo' ?
                                    'selected':'' }}>Vimeo</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">Course URL</label>
                            <input type="text" class="form-control" name="source_url" value="{{ $course->source_url }}">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Image</label>
                            <input class="form-control" type="file" name="image">
                        </div>
                        <div class="col-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                    name="is_free" {{ $course->is_free != null ? 'checked':'' }}>
                                <label class="form-check-label" for="flexSwitchCheckDefault">Is Free?</label>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label for="validationCustom01" class="form-label">Current Price</label>
                            <input type="text" class="form-control" name="current_price"
                                value="{{ $course->current_price }}">
                        </div>
                        <div class="col-md-5">
                            <label for="validationCustom01" class="form-label">Old Price</label>
                            <input type="text" class="form-control" name="default_price"
                                value="{{ $course->default_price }}">
                        </div>
                        <div class="col-6">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                    name="status" {{ $course->status != null ? 'checked':'' }}>
                                <label class="form-check-label" for="flexSwitchCheckDefault">Published?</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Update Course</button>
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
</script>
@endpush