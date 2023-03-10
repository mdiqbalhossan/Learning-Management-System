<section class="section-padding">
    <div class="container-fluid container-grid">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="heading mb-50 text-center">
                    <span class="subheading">Top Categories</span>
                    <h2>Browse Courses By Category</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($categories as $category)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="single-course-category style-2 mb-20">
                    <div class="course-cat-icon">
                        <img src="{{ asset('uploads/category') }}/{{ $category->image }}" alt="" class="img-fluid">
                    </div>
                    <div class="course-cat-content">
                        <h4 class="course-cat-title">
                            <a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a>
                        </h4>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>