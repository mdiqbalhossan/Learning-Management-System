<section class="counter-section-2">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-5 pr-xl-5 col-lg-8">
                <div class="section-heading mb-5 mb-xl-0 text-center text-xl-start">
                    <span class="subheading">10,000+ Trusted Clients All Over The World</span>
                    <h2 class="font-lg">Some reasons why Start Your Online Learning with Us</h2>
                </div>
            </div>

            <div class="col-xl-7">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="counter-box bg-1 mb-4 mb-lg-0">
                            <i class="flaticon-man"></i>
                            <div class="count">
                                @if (totalCount('student') < 1000) <span class="counter h2">{{ totalCount('student')
                                    }}</span>
                                    @else
                                    @php
                                    $total = $totalCount('student')/1000;
                                    @endphp
                                    <span class="counter h2">{{ $total }}</span><span>k</span>
                                    @endif
                            </div>
                            <p>Students</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="counter-box bg-2 mb-4 mb-lg-0">
                            <i class="flaticon-infographic"></i>
                            <div class="count">
                                <span class="counter h2">{{ totalCount('course') }}</span><span>+</span>
                            </div>
                            <p>Online Courses</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="counter-box bg-3">
                            <i class="flaticon-satisfaction"></i>
                            <div class="count">
                                <span class="counter h2">100</span><span>%</span>
                            </div>
                            <p>Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>