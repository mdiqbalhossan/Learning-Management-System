<section class="banner banner-style-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-xl-6 col-lg-6">
                <div class="banner-content">
                    <h1>{{ settingSlider('title') }}</h1>
                    <p>{{ settingSlider('description') }}</p>

                    <div class="banner-form me-5">
                        <form action="#" class="form">
                            <input type="text" class="form-control" placeholder="What do you want to learn?">
                            <a href="#"> Search<i class="far fa-search"></i></a>
                        </form>
                    </div>
                    <div class="category-name">
                        <span>Popular:</span>
                        <a href="#">Design ,</a>
                        <a href="#">Development ,</a>
                        <a href="#">Marketing ,</a>
                        <a href="#">Affiliate</a>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-6 col-lg-6">
                <div class="banner-img-round mt-5 mt-lg-0">
                    <img src="{{ asset('settings') }}/{{ settingSlider('image') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>