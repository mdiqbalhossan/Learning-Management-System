<section class="footer">
    <div class="footer-mid">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 me-auto col-sm-8">
                    <div class="footer-logo mb-3">
                        <img src="{{ asset('settings') }}/{{ setting('logo') }}" alt="" class="img-fluid">
                    </div>
                    <div class="widget footer-widget mb-5 mb-lg-0">
                        <p>{{setting('description')}}</p>
                    </div>
                </div>

                <div class="col-xl-2 col-sm-4">
                    <div class="footer-widget mb-5 mb-xl-0">
                        <h5 class="widget-title">Explore</h5>
                        <ul class="list-unstyled footer-links">
                            <li><a href="{{ route('about') }}">About us</a></li>
                            <li><a href="{{ route('contact') }}">Contact us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-sm-4">
                    <div class="footer-widget mb-5 mb-xl-0">
                        <h5 class="widget-title ">Categories</h5>
                        <ul class="list-unstyled footer-links">
                            @foreach (footer_categories() as $category)
                            <li><a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-sm-4">
                    <div class="footer-widget mb-5 mb-xl-0">
                        <h5 class="widget-title">Links</h5>
                        <ul class="list-unstyled footer-links">
                            <li><a href="#">News & Blogs</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Return Policy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-sm-4">
                    <div class="footer-widget mb-5 mb-xl-0">
                        <h5 class="widget-title">Address</h5>
                        <p>{{ setting('address') }}</p>
                        <ul class="list-unstyled footer-links">
                            <li>
                                <h6 class="text-white">Phone</h6><a href="tel:{{ setting('phone') }}">{{
                                    setting('phone') }}</a>
                            </li>
                            <li>
                                <h6 class="text-white">Email</h6><a href="mailto:{{ setting('email') }}">{{
                                    setting('email') }}</a>
                            </li>
                        </ul>
                        <div class="footer-socials mt-4">
                            <a href="{{ settingSocial('facebook') }}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ settingSocial('twitter') }}"><i class="fab fa-twitter"></i></a>
                            <a href="{{ settingSocial('linkedin') }}"><i class="fab fa-linkedin-in"></i></a>
                            <a href="{{ settingSocial('youtube') }}"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-btm">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-sm-12 col-lg-6">
                    <p class="mb-0 copyright text-sm-center text-lg-start">{{ setting('footer_text') }}</p>
                </div>
                <div class="col-xl-6 col-sm-12 col-lg-6">
                    <div class="footer-btm-links text-start text-sm-center text-lg-end">
                        <a href="#">Legal</a>
                        <a href="#">Supports</a>
                        <a href="#">Terms</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed-btm-top">
        <a href="#top-header" class="js-scroll-trigger scroll-to-top"><i class="fa fa-angle-up"></i></a>
    </div>

</section>