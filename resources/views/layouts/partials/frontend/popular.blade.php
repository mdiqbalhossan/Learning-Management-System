@if ($popularCourses->count()>0)
<section class="gray section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h4>Popular Courses</h4>
                    <p>Listed Below Our Most Popular Courses</p>
                </div>
            </div>
        </div>
        <div id="owl-featured" class="owl-custom">
            @foreach ($popularCourses as $popularCourse)
            <div class="owl-featured">
                <div class="shop-item-list entry">
                    <div class="">
                        <img src="{{ asset('uploads/course') }}/{{ $popularCourse->image }}" alt="">
                        <div class="magnifier">
                        </div>
                    </div>
                    <div class="shop-item-title clearfix">
                        <h4><a href="{{ route('single.course', $popularCourse->slug) }}">{{ $popularCourse->name }}</a>
                        </h4>
                        {!! $popularCourse->short_description !!}
                        <div class="shopmeta">
                            <span class="pull-left">Price: $ {{ $popularCourse->current_price ??
                                $popularCourse->default_price
                                }}</span>
                            <span class="badge badge-success pull-right">{{ $popularCourse->category->name }}</span>
                        </div>
                    </div>
                    <div class="visible-buttons">
                        <a title="Add to Cart" href="page-shop-cart.html"><span
                                class="fa fa-cart-arrow-down"></span></a>
                        <a title="Read More" href="{{ route('single.course', $popularCourse->slug) }}"><span
                                class="fa fa-search"></span></a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endif