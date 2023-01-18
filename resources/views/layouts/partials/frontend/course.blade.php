@if ($courses->count()>0)
<section class="gray section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h4>All Courses</h4>
                    <p>Listed Below Our All Courses</p>
                </div>
            </div>
        </div>
        <div class="row course-list shop-listing">
            @foreach ($courses as $course)
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="shop-item-list entry">
                    <div class="">
                        <img src="{{ asset('uploads/course') }}/{{ $course->image }}" alt="">
                        <div class="magnifier">
                        </div>
                    </div>
                    <div class="shop-item-title clearfix">
                        <h4><a href="{{ route('single.course',$course->slug) }}">{{ $course->name }}</a></h4>
                        <p>{!! Str::words($course->details,100) !!}</p>
                        <div class="shopmeta">
                            <span class="pull-left">$
                                @if ($course->current_price)
                                <del>{{ $course->default_price }}</del>
                                @else
                                {{ $course->default_price }}
                                @endif
                            </span>
                            <span class="badge badge-success pull-right">{{ $course->category->name }}</span>
                        </div>
                    </div>
                    <div class=" shop-button clearfix">
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="course_id" value="{{ $course->id }}">
                            <input type="hidden" name="course_name" value="{{ $course->name }}">
                            <input type="hidden" name="course_price"
                                value="{{ $course->current_price ?? $course->default_price }}">
                            <input type="hidden" name="course_image" value="{{ $course->image }}">
                            <button type="submit" class="btn btn-primary btn-block">${{
                                $course->current_price ??
                                $course->default_price }}
                                PURCHASE NOW</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                <nav class="text-center">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
@endif