<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <title>LearnPLUS | Learning Management System HTML Template</title>
    <link rel="shortcut icon" href="{{ asset('frontend') }}/images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend') }}/rs-plugin/css/A.settings.css.pagespeed.cf.xeOyGChsgq.css" media="screen" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend') }}/A.fonts%2c%2c_font-awesome-4.3.0%2c%2c_css%2c%2c_font-awesome.min.css%2bcss%2c%2c_bootstrap.css%2bcss%2c%2c_animate.css%2cMcc.kSNwpaaMDX.css.pagespeed.cf.w2G3xGgFf0.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/A.menu.css.pagespeed.cf.0_hLwXzYkZ.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend') }}/css/A.carousel.css%2bbbpress.css%2cMcc.aXsJ7_Y__m.css.pagespeed.cf.ERce4VkS3l.css" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend') }}/A.style.css%2bcss%2c%2c_custom.css%2cMcc.HvWh1qoob-.css.pagespeed.cf.pWH5huNcWh.css" />
</head>

<body>
    <div id="loader">
        <div class="loader-container">
            <img src="{{ asset('frontend') }}/images/site.gif" alt="" class="loader-site">
        </div>
    </div>
    <div id="wrapper">
        @include('layouts.partials.frontend.topbar')
        @include('layouts.partials.frontend.header')


        @yield('content')


        @include('layouts.partials.frontend.footer')
        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                    </div>
                    <div class="col-md-6 text-right">
                        <ul class="list-inline">
                            <li><a href="#">Terms of Usage</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="{{ asset('frontend') }}/js/jquery.min.js.pagespeed.jm.iDyG3vc4gw.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js%2bretina.js%2bwow.js.pagespeed.jc.pMrMbVAe_E.js"></script>
    <script>
        eval(mod_pagespeed_gFRwwUbyVc);
    </script>
    <script>
        eval(mod_pagespeed_rQwXk4AOUN);
    </script>
    <script>
        eval(mod_pagespeed_U0OPgGhapl);
    </script>
    <script src="{{ asset('frontend') }}/js/carousel.js%2bparallax.min.js%2bcustom.js.pagespeed.jc.lVSvRd9-tY.js">
    </script>
    <script>
        eval(mod_pagespeed_6Ja02QZq$f);
    </script>
    <script>
        eval(mod_pagespeed_AZ_gON44eP);
    </script>
    <script>
        eval(mod_pagespeed_KxQMf5X6rF);
    </script>
    <script src="{{ asset('frontend') }}/rs-plugin/js/jquery.themepunch.tools.min.js.pagespeed.jm.0PLSBOOLZa.js">
    </script>
    <script src="{{ asset('frontend') }}/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script>
        jQuery(document).ready(function(){jQuery('.tp-banner').show().revolution({dottedOverlay:"none",delay:16000,startwidth:1170,startheight:620,hideThumbs:200,thumbWidth:100,thumbHeight:50,thumbAmount:5,navigationType:"none",navigationArrows:"solo",navigationStyle:"preview3",touchenabled:"on",onHoverStop:"on",swipe_velocity:0.7,swipe_min_touches:1,swipe_max_touches:1,drag_block_vertical:false,parallax:"mouse",parallaxBgFreeze:"on",parallaxLevels:[10,7,4,3,2,5,4,3,2,1],parallaxDisableOnMobile:"off",keyboardNavigation:"off",navigationHAlign:"center",navigationVAlign:"bottom",navigationHOffset:0,navigationVOffset:20,soloArrowLeftHalign:"left",soloArrowLeftValign:"center",soloArrowLeftHOffset:20,soloArrowLeftVOffset:0,soloArrowRightHalign:"right",soloArrowRightValign:"center",soloArrowRightHOffset:20,soloArrowRightVOffset:0,shadow:0,fullWidth:"on",fullScreen:"off",spinner:"spinner4",stopLoop:"off",stopAfterLoops:-1,stopAtSlide:-1,shuffle:"off",autoHeight:"off",forceFullWidth:"off",hideThumbsOnMobile:"off",hideNavDelayOnMobile:1500,hideBulletsOnMobile:"off",hideArrowsOnMobile:"off",hideThumbsUnderResolution:0,hideSliderAtLimit:0,hideCaptionAtLimit:0,hideAllCaptionAtLilmit:0,startWithSlide:0,fullScreenOffsetContainer:""});});
    </script>
</body>

</html>