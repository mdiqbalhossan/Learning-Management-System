<section class="section-padding course-filter-section">
    <div class="container">
        <div class="row align-items-center justify-content-between mb-30">
            <div class="col-xl-12">
                <div class="heading text-center mb-40">
                    <span class="subheading">Course Trending</span>
                    <h2 class="font-lg">Explore popular courses</h2>
                </div>

                {{-- <div class="filter-wrap text-center">
                    <ul class="course-filter ">
                        <li class="active"><a href="#" data-filter="*"> All</a></li>
                        <li><a href="#" data-filter=".cat1">printing</a></li>
                        <li><a href="#" data-filter=".cat2">Web</a></li>
                        <li><a href="#" data-filter=".cat3">illustration</a></li>
                        <li><a href="#" data-filter=".cat4">media</a></li>
                        <li><a href="#" data-filter=".cat5">crafts</a></li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="container-fluid container-padding">
        <div class="row course-gallery justify-content-center">
            @foreach ($courses as $course)
            <div class="course-item cat1 cat5 col-lg-3 col-md-6 col-sm-6">
                <div class=" course-style-5 bg-white">
                    <div class="course-header">
                        <div class="course-thumb">
                            <img src="{{ asset('uploads/course') }}/{{ $course->image }}" alt="" class="img-fluid">
                            <div class="course-price">
                                @if ($course->is_free == 'on')
                                    <span class="price">Free</span>
                                @else
                                {{ setting('currency_symbol') }} {{ $course->default_price ??
                                    $course->current_price }}
                                @endif
                                
                            </div>
                        </div>
                    </div>

                    <div class="course-content">
                        <div class="course-meta meta-style-1">
                            <span class="lessons"><i class="far fa-play-circle me-2"></i>{{ totalLesson($course->id) }}
                                Lectures</span>
                            <span class="label">{{ Str::title($course->level) }}</span>
                        </div>
                        <h4> <a href="{{ route('single.course',$course->slug) }}">{{ $course->name }}</a> </h4>

                        <div class="course-footer mt-20 d-flex align-items-center justify-content-between">
                            <span class="students"><i class="far fa-user-alt me-2"></i>{{ totalStudent($course->id) }}
                                Students</span>
                            <a href="{{ route('single.course',$course->slug) }}" class="rounded-btn"><i
                                    class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!--course-->
</section>