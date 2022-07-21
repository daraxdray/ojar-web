@extends('layouts.landing')
@section('title', __('Home - OjarLogisitics'))
@section('content')

    <!-- header area start  -->
    <header class="header-area header-bg dark-home-2" id="home">

        <div class="shape-1"><img src="{{asset('landing_assets/img/shape/01.png')}}" alt=""></div>
        <div class="shape-2"><img src="{{asset('landing_assets/img/shape/02.png')}}" alt=""></div>
        <div class="shape-3"><img src="{{asset('landing_assets/img/shape/03.png')}}" alt=""></div>
        <div class="shape-4"><img src="{{asset('landing_assets/img/shape/05.png')}}" alt=""></div>

        <div class="header-right-image">
            <img src="{{asset('landing_assets/img/mobile-image-4.png')}}" alt="header right image" value="{{rand(0,2)}}">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="header-inner">
                        <h1 class="title wow fadeInDown">Deliver Packages with Ojarh Logistic</h1>
                        <p>With Ojarh Logistics you can move your packages to any area you wish. Sign up, and order for a delivery and in no time we will be there to pick it up and deliver.</p>
                        <div class="btn-wrapper wow fadeInUp">
                       <x-buttons.new title="{{ $actionTitle ?? ''  }}" />
                        <a href="#" class="boxed-btn btn-rounded gd-bg-1"><i class="flaticon-apple-1"></i> App Store</a>
                            <a href="#" class="boxed-btn btn-rounded gd-bg-2"><i class="flaticon-android-logo"></i> Play Store</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end  -->

<!-- about us area start -->

<section class="about-us-area style-two dark-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title left-aligned white"><!-- section title -->
                    <span class="subtitle">About Ojar Logistic</span>
                    <h3 class="title extra">A system that serves everybody</h3>
                    <p>OJARH Logistics is a fulfillment service that delivers packages especially for e-retailers and online platforms. OJARH Logistics has maintained reputation to providing first Class, cost effective and efficient logistics solutions to its customers. The services are tailored to meet our customers needs and satisfaction. . We also provide our special delivery services.</p>
                </div><!-- //. section title -->
            </div>
            <div class="col-lg-6">
                <div class="feature-area">
                    <ul class="feature-list">
                        <li class="single-feature-list wow zoomIn white">
                            <div class="icon icon-bg-1">
                                <i class="flaticon-vector"></i>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#">Pacel Delivery</a></h4>
                                <p>We provide delivery of parcels in different sizes and weight. We are partnered with several vendors to deliver your product at doorstep.</p>
                            </div>
                        </li>
                        <li class="single-feature-list wow zoomIn white">
                            <div class="icon icon-bg-2">
                                <i class="flaticon-responsive"></i>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#">Food Delivery</a></h4>
                                <p>We are also partnered with many food vendors and so get your food ordered and delivered in shortest time frame.</p>
                            </div>
                        </li>
                        <li class="single-feature-list wow zoomIn white">
                            <div class="icon icon-bg-3">
                                <i class="flaticon-layers-2"></i>   
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#">Services</a></h4>
                                <p>With our service package you can quickly search for a service provider near you</p>
                            </div>
                        </li>
                        <li class="single-feature-list wow zoomIn white">
                            <div class="icon icon-bg-4">
                                <i class="flaticon-picture"></i>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#">City Manager</a></h4>
                                <p>Our city manager controls the whole activity of the delivery and is able to tell you where your product has landed</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about us area end -->

<!-- video area start -->
<section class="video-area dark-bg white" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="img-with-video">
                    <div class="img-wrap">
                        <img src="{{asset('landing_assets/img/2.png')}}" alt="">
                        <div class="hover">
                            <a href="https://www.youtube.com/watch?v=tdBzJRdy33M" class="video-play-btn mfp-iframe"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content-area ">
                    <span class="subtitle">Amazing Experience</span>
                    <h3 class="title">Join us as a Rider</h3>
                    <p>Flexible working hours, weekly payments and insurance coverage</p>
                    <p>we respect your time and efforts. We know you deserve the best, so we strive to give you the best... </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- video area end -->

<!-- counterup area start -->
<section class="counterup-area dark-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-counter-item white fadeInUp wow"><!-- single counter item -->
                    <div class="icon">
                        <i class="flaticon-rating"></i>
                    </div>
                    <div class="content">
                        <span class="count-num">14,567</span>
                        <h4 class="title">Positive Reviews</h4>
                    </div>
                </div><!-- //. single counter item -->
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-counter-item white fadeInUp wow"><!-- single counter item -->
                    <div class="icon">
                        <i class="flaticon-conversation-1"></i>
                    </div>
                    <div class="content">
                        <span class="count-num">567</span>
                        <h4 class="title">Good Comments</h4>
                    </div>
                </div><!-- //. single counter item -->
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-counter-item white fadeInUp wow"><!-- single counter item -->
                    <div class="icon">
                        <i class="flaticon-email"></i>
                    </div>
                    <div class="content">
                        <span class="count-num">200</span>
                        <h4 class="title">App Downloads</h4>
                    </div>
                </div><!-- //. single counter item -->
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-counter-item white fadeInUp wow"><!-- single counter item -->
                    <div class="icon">
                        <i class="flaticon-trophy"></i>
                    </div>
                    <div class="content">
                        <span class="count-num">30</span>
                        <h4 class="title">Best Awards</h4>
                    </div>
                </div><!-- //. single counter item -->
            </div>
        </div>
    </div>
</section>
<!-- counterup area end -->

<!-- why choose area start -->
<section class="why-choose-area dark-bg">
    <div class="shape-1"><img src="{{asset('landing_assets/img/shape/05.png')}}" alt=""></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title white"><!-- section title -->
                    <span class="subtitle">why choose this</span>
                    <h3 class="title extra">Users love Ojar as their delivery service</h3>
                    <p>Our optimal satisfaction comes from satisfying our customer which in turn brings them back to us for more.</p>
                </div><!-- //. section title -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="single-why-us-item white margin-top-60 slideInUp wow"><!-- single why us item -->
                    <div class="icon gdbg-1">
                        <i class="flaticon-settings-1"></i>
                    </div>
                    <div class="content">
                        <h4 class="title">Easy to Use</h4>
                        <p>Our App is so easy to use. We target best user experience</p>
                    </div>
                </div><!-- //. single why us item -->
                <div class="single-why-us-item white slideInUp wow"><!-- single why us item -->
                    <div class="icon gdbg-2">
                        <i class="flaticon-checked"></i>
                    </div>
                    <div class="content">
                        <h4 class="title">Fast & Secure</h4>
                        <p>All our communication channels are fast and safe. easily navigating the route provide to deliver product</p>
                    </div>
                </div><!-- //. single why us item -->
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="center-image">
                    <img src="{{asset('landing_assets/img/mobile-img-2.png')}}" alt="mobile image two">
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="single-why-us-item white margin-top-60 slideInUp wow"><!-- single why us item -->
                    <div class="icon gdbg-3">
                        <i class="flaticon-chat-1"></i>
                    </div>
                    <div class="content">
                        <h4 class="title">Live Chat</h4>
                        <p>Have a live chat with our customer support or the rider</p>
                    </div>
                </div><!-- //. single why us item -->
                <div class="single-why-us-item white slideInUp wow"><!-- single why us item -->
                    <div class="icon gdbg-4">
                        <i class="flaticon-cloud"></i>
                    </div>
                    <div class="content">
                        <h4 class="title">Secure Data</h4>
                        <p>Be rest assured your packages are in safe hands</p>
                    </div>
                </div><!-- //. single why us item -->
            </div>
        </div>
    </div>
</section>
<!-- why choose area end -->

<!-- how it works area start -->
<section class="how-it-work-area dark-bg">
        <div class="shape-1"><img src="{{asset('landing_assets/img/shape/06.png')}}" alt=""></div>
        <div class="shape-2"><img src="{{asset('landing_assets/img/shape/07.png')}}" alt=""></div>
        <div class="shape-3"><img src="{{asset('landing_assets/img/shape/06.png')}}" alt=""></div>
        <div class="shape-4"><img src="{{asset('landing_assets/img/shape/07.png')}}" alt=""></div>
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title white"><!-- section title -->
                        <span class="subtitle">Working Process</span>
                        <h3 class="title">How it works?</h3>
                        <p>It is all a simple process you can follow - easy pizzy.</p>
                    </div><!-- //. section title -->
                </div>
            </div>
        <div class="row">
            <div class="col-lg-12">
                    <div class="how-it-work-tab-nav">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true"><i class="flaticon-checked"></i> Log In Account <span class="number">1</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false"><i class="flaticon-settings-1"></i> Request/Accept Delivery <span class="number">2</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="chat-tab" data-toggle="tab" href="#chat" role="tab" aria-controls="chat" aria-selected="false"><i class="flaticon-chat-1"></i> Get you package <span class="number">3</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content fadeIn wow">
                        <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                            <div class="how-it-works-tab-content white">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="left-content-area">
                                            <h4 class="title">Login Account</h4>
                                            <p>You will be required to register an account with us and then login to access your dashboard</p>
                                            <p>You can register as customer or a driver if you area available to make extra cash by delivering the products.</p>
                                                <p>These are all simple procedure to follow. However, we are available to answer you.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="right-content-area">
                                            <div class="img-wrapper">
                                                <img src="{{asset('landing_assets/img/1.png')}}" alt="how it works image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                            <div class="how-it-works-tab-content white">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="left-content-area">
                                            <h4 class="title">Request / Accept Delivery</h4>
                                            <p>You can easily make a request to get your product delivered from any location we provide our services.</p>
                                            <p>As a rider, you can as well accept request for delivery for whic all details of delivery will be provided and for every packages delivered you get paid. </p>
                                                <p></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="right-content-area">
                                            <div class="img-wrapper">
                                                <img src="{{asset('landing_assets/img/2.png')}}" alt="how it works image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="chat-tab">
                            <div class="how-it-works-tab-content white">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="left-content-area">
                                            <h4 class="title">Get your package</h4>
                                            <p>Your package is delivered to your doorstep in proper time.</p>
                                            <p></p>
                                                <p></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="right-content-area">
                                            <div class="img-wrapper">
                                                <img src="{{asset('landing_assets/img/3.png')}}" alt="how it works image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<!-- how it works area end -->

<!-- screenshort area start -->
<section class="screenshort-area dark-bg">
    <div class="shape-1"><img src="{{asset('landing_assets/img/shape/06.png')}}" alt=""></div>
    <div class="shape-2"><img src="{{asset('landing_assets/img/shape/07.png')}}" alt=""></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title white"><!-- section title -->
                    <span class="subtitle">Screenshots</span>
                    <h3 class="title extra">Amazing visual interface</h3>
                    <p>Quickly have an experience with our built application avaible on both IOS and Android.</p>
                </div><!-- //. section title -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="screenshort-carousel"><!-- screenshort carousel -->
                    <div class="single-screenshort-item"><!-- single screenshort item -->
                        <img src="{{asset('landing_assets/img/screenshort/screen-1.jpg')}}" alt="">
                    </div><!-- //.single screenshort item -->
                    <div class="single-screenshort-item"><!-- single screenshort item -->
                        <img src="{{asset('landing_assets/img/screenshort/screen-2.jpg')}}" alt="">
                    </div><!-- //.single screenshort item -->
                    <div class="single-screenshort-item"><!-- single screenshort item -->
                        <img src="{{asset('landing_assets/img/screenshort/screen-3.jpg')}}" alt="">
                    </div><!-- //.single screenshort item -->
                    <div class="single-screenshort-item"><!-- single screenshort item -->
                        <img src="{{asset('landing_assets/img/screenshort/screen-4.jpg')}}" alt="">
                    </div><!-- //.single screenshort item -->
                    <div class="single-screenshort-item"><!-- single screenshort item -->
                        <img src="{{asset('landing_assets/img/screenshort/screen-5.jpg')}}" alt="">
                    </div><!-- //.single screenshort item -->
                    <div class="single-screenshort-item"><!-- single screenshort item -->
                        <img src="{{asset('landing_assets/img/screenshort/screen-6.jpg')}}" alt="">
                    </div><!-- //.single screenshort item -->
                </div><!-- //. screenshort carousel -->
            </div>
        </div>
    </div>
</section>
<!-- screenshort area end -->

<!-- testimonial area start -->
<section class="testimonial-area dark-bg">
        <div class="shape-1"><img src="{{asset('landing_assets/img/shape/06.png')}}" alt=""></div>
        <div class="shape-2"><img src="{{asset('landing_assets/img/shape/07.png')}}" alt=""></div>
    <div class="container">
        
        <div class="row">
            <div class="col-lg-12">
                <div class="download-area-wrapper margin-top-120"><!-- download area wrapper -->
                    <span class="subtitle">Download Now</span>
                    <h3 class="title">Available for all device</h3>
                    <p>Our application is made available on all devices.</p>
                    <div class="btn-wrapper">
                            <a href="#" class="boxed-btn btn-rounded gd-bg-1"><i class="flaticon-apple-1"></i> App Store</a>
                            <a href="#" class="boxed-btn btn-rounded gd-bg-2"><i class="flaticon-android-logo"></i> Play Store</a>
                            <!-- <a href="#" class="boxed-btn btn-rounded gd-bg-3"><i class="flaticon-windows"></i> Windows</a> -->
                    </div>
                </div><!-- //. download area wrapper -->
            </div>
        </div>
    </div>
</section>
<!-- testimonial area end -->

<!-- price plan area start -->
<!-- <section class="pricing-plan-area dark-bg" id="pricing">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title white">
                
                    <span class="subtitle">Pricing plans</span>
                    <h3 class="title extra">Choose your pricing</h3>
                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor  tempor incididunt ut labore dolore magna.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-price-plan-01 white wowo slideInUp">
                    
                   <div class="price-header">
                        <h4 class="name">Primary Plan</h4>
                        <div class="price-wrap">
                            <span class="price">$250</span>
                            <span class="month">/Mo</span>
                        </div>
                   </div>
                   <div class="price-body">
                       <ul>
                           <li>5 Analyzer</li>
                           <li>3 Month Support</li>
                           <li>10 Sessions</li>
                           <li>No Risk Garrunty</li>
                       </ul>
                   </div>
                   <div class="price-footer">
                       <a href="#" class="boxed-btn btn-rounded gd-bg-2">Get Started</a>
                   </div>
                </div>
               
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-price-plan-01 white wowo slideInUp">
                   
                   <div class="price-header">
                        <h4 class="name">Basic Plan</h4>
                        <div class="price-wrap">
                            <span class="price">$350</span>
                            <span class="month">/Mo</span>
                        </div>
                   </div>
                   <div class="price-body">
                       <ul>
                           <li>5 Analyzer</li>
                           <li>3 Month Support</li>
                           <li>10 Sessions</li>
                           <li>No Risk Garrunty</li>
                       </ul>
                   </div>
                   <div class="price-footer">
                       <a href="#" class="boxed-btn btn-rounded gd-bg-2">Get Started</a>
                   </div>
                </div>
                
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-price-plan-01 white wowo slideInUp">
                   <div class="price-header">
                        <h4 class="name">Advance Plan</h4>
                        <div class="price-wrap">
                            <span class="price">$150</span>
                            <span class="month">/Mo</span>
                        </div>
                   </div>
                   <div class="price-body">
                       <ul>
                           <li>5 Analyzer</li>
                           <li>3 Month Support</li>
                           <li>10 Sessions</li>
                           <li>No Risk Garrunty</li>
                       </ul>
                   </div>
                   <div class="price-footer">
                       <a href="#" class="boxed-btn btn-rounded gd-bg-2">Get Started</a>
                   </div>
                </div>
                
            </div>
        </div>
    </div>
</section> -->
<!-- price plan area end -->

<!-- team member area start -->
<!-- <section class="team-member-area dark-bg" id="team">
    <div class="bg-shape-1">
        <img src="{{asset('landing_assets/img/bg/team-shape-dark.png')}}" alt="">
    </div>
    <div class="bg-shape-2">
        <img src="{{asset('landing_assets/img/bg/contact-map-bg-dark.png')}}" alt="">
    </div>
    <div class="bg-shape-3">
        <img src="{{asset('landing_assets/img/bg/contact-mobile-bg.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title white">
                    <span class="subtitle">Our Team</span>
                    <h3 class="title">Meet The Team</h3>
                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor  tempor incididunt ut labore dolore magna.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="team-carousel">
                    <div class="single-team-member white">
                        <div class="thumb">
                            <img src="{{asset('landing_assets/img/team-member/01.jpg')}}" alt="team member image">
                            <div class="hover">
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="title">Eiusmod Tempor</h4>
                            <span class="post">CEO, Appside</span>
                        </div>
                    </div>
                    <div class="single-team-member white">
                        <div class="thumb">
                            <img src="{{asset('landing_assets/img/team-member/02.jpg')}}" alt="team member image">
                            <div class="hover">
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="title">Maria Hexa</h4>
                            <span class="post">CEO, Appside</span>
                        </div>
                    </div>
                    <div class="single-team-member white">
                        <div class="thumb">
                            <img src="{{asset('landing_assets/img/team-member/03.jpg')}}" alt="team member image">
                            <div class="hover">
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="title">Scotty Hedge</h4>
                            <span class="post">Creative Designer</span>
                        </div>
                    </div>
                    <div class="single-team-member white">
                        <div class="thumb">
                            <img src="{{asset('landing_assets/img/team-member/04.jpg')}}" alt="team member image">
                            <div class="hover">
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="title">Lara Croft</h4>
                            <span class="post">CEO, Appside</span>
                        </div>
                    </div>
                    <div class="single-team-member white">
                        <div class="thumb">
                            <img src="{{asset('landing_assets/img/team-member/05.jpg')}}" alt="team member image">
                            <div class="hover">
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="title">Eiusmoy Smith</h4>
                            <span class="post">Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="download-area-wrapper white margin-top-120">
                    <span class="subtitle">Download now</span>
                    <h3 class="title">Available for all device</h3>
                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor  tempor incididunt ut labore dolore magna.</p>
                    <div class="btn-wrapper">
                            <a href="#" class="boxed-btn btn-rounded gd-bg-1"><i class="flaticon-apple-1"></i> App Store</a>
                            <a href="#" class="boxed-btn btn-rounded gd-bg-2"><i class="flaticon-android-logo"></i> Play Store</a>
                            <a href="#" class="boxed-btn btn-rounded gd-bg-3"><i class="flaticon-windows"></i> Windows</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-area-wrapper white" id="contact">
                    <span class="subtitle">Contact us</span>
                    <h3 class="title">Get In Touch</h3>
                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor  tempor incididunt ut labore dolore magna.</p>
                    <form action="index.html" class="contact-form sec-margin">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group textarea">
                                    <textarea name="message" id="message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                                <button class="submit-btn  btn-rounded gd-bg-1" type="submit">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- team member area end -->

@endsection
