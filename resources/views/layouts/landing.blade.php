<!DOCTYPE html>
<html lang="{{ setting('localeCode', 'en') }}" dir="auto">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noarchive">
    <link rel="icon" type="image/png" href="{{ setting('favicon') }}" />
    <title>@yield('title', "" ) - {{ setting('websiteName', env('APP_NAME')) }}</title>
    @include('layouts.partials.landing_styles')
    @yield('styles')
</head>



<body>
     
<nav class="navbar navbar-area navbar-expand-lg nav-absolute white nav-style-01">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <a href="index.html" class="logo">
                        <img src="{{ setting('websiteLogo', asset('images/logo.png') ) }}" width="150" height="150" alt="logo">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#appside_main_menu" 
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="appside_main_menu">
                <ul class="navbar-nav">
                    <li class="current-menu-item">
                        <a href="#">Home</a>
                    </li>
                    <li><a href="https://ojarh.com">Ojarh</a></li>
                    <li><a href="https://ojarh.com/about">About</a></li>
                    <!-- <li><a href="#pricing">Pricing</a></li> -->
                    <!-- <li><a href="#team">Team</a></li> -->
                    <!-- <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog 01</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li> -->
                    <li><a href="https://ojarh.com/contact">Contact</a></li>
                    <li><a href="#contact">Privacy Policy</a></li>
                    <li><a href="#contact">Terms & Condition</a></li>
                </ul>
            </div>
            <div class="nav-right-content">
                <ul>
                    <li class="button-wrapper">
                        <a href="#" class="boxed-btn btn-rounded">Download</a>
                    </li>
                </ul>
            </div>
        </div>
</nav>
    {{ $slot ?? '' }}
    @yield('content')





    <!-- footer area start -->
<footer class="footer-area">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget about_widget">
                        <a href="index.html" class="footer-logo"><img src="assets/img/logo-white.png" alt=""></a>
                        <p>Ojarh Logistic is a company established in abuja Nigeria - providing the best logistic service. aimed at maximally satisfying customers. </p>
                        <ul class="social-icon">
                            <li><a href="https://www.facebook.com/oojarh"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget nav_menus_widget">
                        <h4 class="widget-title">Useful Links</h4>
                        <ul>
                            <li><a href="index.html"><i class="fas fa-chevron-right"></i> Home</a></li>
                            <li><a href="https://ojarh.com/about"><i class="fas fa-chevron-right"></i> About Us</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Service</a></li>
                            <!-- <li><a href="#"><i class="fas fa-chevron-right"></i> Blog</a></li> -->
                            <li><a href="https://ojarh.com/contact"><i class="fas fa-chevron-right"></i> Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget nav_menus_widget">
                        <h4 class="widget-title">Need Help?</h4>
                        <ul>
                            <li><a href="https://ojarh.com/faq"><i class="fas fa-chevron-right"></i> Faqs</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Privacy</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Policy</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Support</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Temrs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget nav_menus_widget">
                        <h4 class="widget-title">Download</h4>
                        <ul>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> For IOS</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> For Android</a></li>
                            <!-- <li><a href="#"><i class="fas fa-chevron-right"></i> For Mac</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> For Window</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> For Linax</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area"><!-- copyright area -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-inner"><!-- copyright inner wrapper -->
                        <div class="left-content-area"><!-- left content area -->
                            &copy; Copyrights 2022 Appside All rights reserved.
                        </div><!-- //. left content aera -->
                        <!-- <div class="right-content-area">right content area -->
                            <!-- Designed by <strong>Love</strong> -->
                        <!-- </div>//. right content area -->
                    </div><!-- //.copyright inner wrapper -->
                </div>
            </div>
        </div>
    </div><!-- //. copyright area -->
</footer>
<!-- footer area end -->

<!-- preloader area start -->
<div class="preloader-wrapper" id="preloader">
    <div class="preloader" >
        <div class="sk-circle">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
        </div>
    </div>
</div>

  <!-- preloader area end -->

  <!-- back to top area start -->
  <div class="back-to-top">
        <i class="fas fa-angle-up"></i>
  </div>
  <!-- back to top area end -->

    {{-- footer --}}
    @include('layouts.partials.landing_scripts')
    @stack('scripts')
</body>

</html>
