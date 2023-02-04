@extends('layouts.app')

@section('title', 'Learning')

@section('content')

<section class="shop-page">
    <div class="shop-container">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-xl-7">
                        <div class="product-wrapper">
                            <div class="card product-card">
                                <iframe id="remove_iframe" style="width:100%" height="315"
                                    src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1">
                                </iframe>
                            </div>
                            <hr>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Summary</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-5">
                        <div class="btn-mobile-filter d-xl-none"><i class='bx bx-slider-alt'></i>
                        </div>
                        <div class="filter-sidebar d-none d-xl-flex">
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="product-categories">
                                        <h6 class="text-uppercase mb-3">Content</h6>
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            @foreach ($sections as $section)
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#accordion_{{ $section->id }}"
                                                        aria-expanded="false" aria-controls="flush-collapseTwo">
                                                        {{ $section->name }}
                                                    </button>
                                                </h2>
                                                <div id="accordion_{{ $section->id }}"
                                                    class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingTwo"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        @php
                                                        $lessons = getLesson($section->id, $section->course_id);
                                                        @endphp
                                                        <ul class="list-group">
                                                            @foreach ($lessons as $lesson)
                                                            <a href="#" class="lesson_click" id="{{ $lesson->id }}">
                                                                <li
                                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                                    {{ $lesson->name }}
                                                                    <span class="badge bg-primary">{{
                                                                        $lesson->duration }}</span>
                                                                </li>
                                                            </a>
                                                            @endforeach

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                    <hr>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--end row-->
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')
<script>
    $(document).ready(function() {
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.lesson_click').click(function() {
                var id = $(this).attr('id');
                $.ajax({
                    url: "{{ route('lesson.details') }}",
                    method: "POST",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $("#remove_iframe").remove();
                        $(".product-card").html("<iframe style='width:100%' height='315' src='" + data.url + "?autoplay=1'></iframe>");
                        $(".card-text").html(data.summary);
                    }
                });
            });
        });
</script>
@endpush