@extends('layouts.master')

@section('content')
<section class="white section">
    <div class="container">
        <div class="row">
            <div id="course-content" class="col-md-8">
                <div class="course-description">
                    <div class="blog-image">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="{{ asset('uploads/course') }}/{{ $course->image }}" alt=""
                                        class="img-responsive">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <h3 class="course-title">{{ $course->name }}</h3>
                    {!! $course->details !!}
                </div>
                <hr class="invis">
                <div id="reviews" class="feedbacks">
                    <p>
                        <a class="btn btn-default btn-block" role="button" data-toggle="collapse"
                            href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            What our customers said? (3 Feedbacks)
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="well">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object"
                                            src="upload/xstudent_01.png.pagespeed.ic.756JwMcqdq.png"
                                            alt="Generic placeholder image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">John DOE</h4>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus
                                        viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
                                        lacinia congue felis in faucibus.</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object"
                                            src="upload/xstudent_02.png.pagespeed.ic.y-PM-y4pVj.png"
                                            alt="Generic placeholder image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Amanda FOXOE</h4>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus
                                        viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
                                        lacinia congue felis in faucibus.</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object"
                                            src="upload/xstudent_03.png.pagespeed.ic.uCQY3WNMCJ.png"
                                            alt="Generic placeholder image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Mark BOBS</h4>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus
                                        viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
                                        lacinia congue felis in faucibus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="other-courses">
                    <img src="images/xothers1.png.pagespeed.ic.RtZTA6aSRP.png" alt="" class="">
                </div>
            </div>
            <div id="course-left-sidebar" class="col-md-4">
                <div class="course-image-widget">
                    <img src="upload/xsingle_shop.jpg.pagespeed.ic.yMJhawG7Q-.jpg" alt="" class="img-responsive">
                </div>
                <div class="course-meta forshop">
                    <p>Course Level: {{ Str::upper($course->level) }}</p>
                    <hr>
                    <p>Release Date: {{ $course->created_at->diffForHumans() }}</p>
                    <hr>
                    @if ($course->current_price)
                    <p>Current Price: $ {{ $course->current_price }}</p>
                    <hr>
                    <del class="course-time">Old Price: $ {{ $course->default_price }}</del>
                    @else
                    <p class="course-time">Old Price: $ {{ $course->default_price }}</p>
                    @endif

                    <hr>
                    <p class="course-instructors">Category : <a href="#" title="">{{ $course->category->name }}</a></p>
                </div>
                <div class="course-button">
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="course_id" value="{{ $course->id }}">
                        <input type="hidden" name="course_name" value="{{ $course->name }}">
                        <input type="hidden" name="course_price"
                            value="{{ $course->current_price ?? $course->default_price }}">
                        <input type="hidden" name="course_slug" value="{{ $course->slug }}">
                        <input type="hidden" name="course_image" value="{{ $course->image }}">
                        <button type="submit" class="btn btn-primary btn-block">${{
                            $course->current_price ??
                            $course->default_price }}
                            PURCHASE NOW</button>
                    </form>
                </div>
            </div>
        </div>
        <hr class="invis">
        <div id="owl-featured" class="owl-custom">
            <div class="owl-featured">
                <div class="shop-item-list entry">
                    <div class="">
                        <img src="upload/xcourse_11.png.pagespeed.ic._TBnV-TA7x.png" alt="">
                        <div class="magnifier">
                        </div>
                    </div>
                    <div class="shop-item-title clearfix">
                        <h4><a href="page-shop-single.html">Learning Web Design with Sublime Text</a></h4>
                        <p>Lsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="shopmeta">
                            <span class="pull-left">$0.00</span>
                            <div class="rating pull-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="shop-button clearfix">
                        <a href="page-shop-single.html" class="btn btn-primary btn-block">Free Download</a>
                    </div>
                </div>
            </div>
            <div class="owl-featured">
                <div class="shop-item-list entry">
                    <div class="">
                        <img src="upload/xcourse_10.png.pagespeed.ic.Vk_tFeUOXa.png" alt="">
                        <div class="magnifier">
                        </div>
                    </div>
                    <div class="shop-item-title clearfix">
                        <h4><a href="page-shop-single.html">Learning Web Design with Sublime Text</a></h4>
                        <p>Lsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="shopmeta">
                            <span class="pull-left">$0.00</span>
                            <div class="rating pull-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="shop-button clearfix">
                        <a href="page-shop-single.html" class="btn btn-primary btn-block">Free Download</a>
                    </div>
                </div>
            </div>
            <div class="owl-featured">
                <div class="shop-item-list entry">
                    <div class="">
                        <img src="upload/xcourse_01.png.pagespeed.ic.XTOvCuUmZu.png" alt="">
                        <div class="magnifier">
                        </div>
                    </div>
                    <div class="shop-item-title clearfix">
                        <h4><a href="page-shop-single.html">Learning Web Design with Sublime Text</a></h4>
                        <p>Lsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="shopmeta">
                            <span class="pull-left">$0.00</span>
                            <div class="rating pull-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="shop-button clearfix">
                        <a href="page-shop-single.html" class="btn btn-primary btn-block">Free Download</a>
                    </div>
                </div>
            </div>
            <div class="owl-featured">
                <div class="shop-item-list entry">
                    <div class="">
                        <img src="upload/xcourse_04.png.pagespeed.ic.2rIKmUwjA7.png" alt="">
                        <div class="magnifier">
                        </div>
                    </div>
                    <div class="shop-item-title clearfix">
                        <h4><a href="page-shop-single.html">Learning Web Design with Sublime Text</a></h4>
                        <p>Lsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="shopmeta">
                            <span class="pull-left">$0.00</span>
                            <div class="rating pull-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="shop-button clearfix">
                        <a href="page-shop-single.html" class="btn btn-primary btn-block">Free Download</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection