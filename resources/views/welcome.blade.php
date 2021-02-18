@extends('layouts.master')
@section('content')

<!-- Overlay Navigation Menu -->
<div class="overlay-navigation-wrapper enter-right" data-no-scrollbar data-animation="scale-in">
    <div class="overlay-navigation-scroll-pane">
        <div class="overlay-navigation-inner">
            <div class="v-align-middle">
                <div class="overlay-navigation-header row collapse full-width">
                    <div class="column width-12">
                        <div class="navigation-hide overlay-nav-hide">
                            <a href="#">
                                <span class="icon-cancel"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row collapse full-width">
                    <div class="column width-12">
                        <nav class="overlay-navigation nav-block left">
                            <ul>
                                <li class="current">
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{ route('shop') }}">Shop</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="overlay-navigation-footer row full-width center">
                    <div class="column width-12 no-padding">
                        <p class="copyright">&copy; 2021 Issem-rent-a-ride.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Overlay Navigation Menu End -->

<div class="wrapper reveal-side-navigation bkg-charcoal">
    <div class="wrapper-inner">

        <!-- Header -->

        <header class="header header-absolute header-fixed-on-mobile header-transparent" data-helper-in-threshold="200" data-helper-out-threshold="500" data-sticky-threshold="200" data-bkg-threshold="100" data-compact-threshold="100">
            <div class="header-inner">
                <div class="row nav-bar">
                    <div class="column width-12 nav-bar-inner">
                        <div class="logo">
                            <div class="logo-inner">
                                <a href="{{ url('/') }}"><img src="/assets/images/issem.png" alt="Faulkner Logo" /></a>
                                <a href="{{ url('/') }}"><img src="/assets/images/issem-logo.png" alt="Faulkner Logo" /></a>
                            </div>
                        </div>
                        <nav class="navigation nav-block secondary-navigation nav-right">
                            <ul>
                                <li>
                                    <!-- Dropdown Login -->
                                    @if(Route::has('login'))
                                    <div class="v-align-middle">
                                        @auth
                                        <div class="dropdown">
                                            <a href="#" class="nav-icon flex no-page-fade no-label-on-mobile no-margin-bottom no-padding-right">
                                                <img width="30" height="30" class="avatar circle pull-left no-margin-bottom hide-on-mobile" src="assets/images/assets/avatar.jpg" alt=""><span>{{Auth::user()->name}}</span><span class="icon-down"></span></a>
                                                <div class="dropdown-list custom-content">
                                                    <h5 style="text-align: center;">Manage Your Account</h5>
                                                    <div class="login-form-container">
                                                        <div class="row">
                                           {{--  <div class="column width-12">
                                                <div class="field-wrapper">
                                                    <input type="text" name="login[email]" class="form-name form-element rounded small" placeholder="E-mail" tabindex="1" required>
                                                </div>
                                            </div>
                                            <div class="column width-12">
                                                <div class="field-wrapper">
                                                    <input type="password" name="login[password]" class="form-email form-element rounded small" placeholder="Password" tabindex="2" required>
                                                </div>
                                            </div> --}}
                                            <div class="column width-12">
                                                <div class="row flex">
                                                    <div class="column width-6 left">
                                                        <a class="form-submit button small rounded bkg-pink bkg-hover-pink color-white color-hover-white" href="{{ route('home') }}">Profile</a>
                                                    </div>
                                                    <div class="column width-6 right">
                                                        <a class="form-submit button small rounded bkg-pink bkg-hover-pink color-white color-hover-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">Logout</a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <a href="{{route('login')}}" class="button small rounded no-page-fade no-margin-bottom"><span class="icon-lock left"></span>Sign In</a>
                            @if(Route::has('register'))
                            <a href="{{route('register')}}" class="button small rounded no-page-fade no-margin-bottom">Register</a>
                            @endif
                            @endauth
                        </div>
                        @endif
                    </li>
                    <li class="aux-navigation hide">
                        <!-- Aux Navigation -->
                        <a href="#" class="navigation-show overlay-nav-show nav-icon">
                            <span class="icon-menu"></span>
                        </a>
                    </li>
                </ul>
            </nav>
            <nav class="navigation nav-block primary-navigation nav-center">
                <ul>
                    <li class="current">
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li class="#">
                        <a href="{{ route('about') }}">About Us</a>
                    </li>
                    <li>
                        <a href="{{ route('shop') }}">Shop</a>
                    </li>
                    <li class="#">
                        <a href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
</div>
</header>

<!-- Header End -->

<!-- Content -->
<div class="content clearfix reveal-footer">

    <!-- Fullscreen Slider Section -->
    <div id="home" class="section-block featured-media tm-slider-parallax-container">
        <div class="tm-slider-container full-width-slider" data-featured-slider data-parallax data-parallax-fade-out data-animation="scaleIn" data-speed="1400" data-scale-under="960" data-scale-min-height="450">
            <ul class="tms-slides">
                <li class="tms-slide" data-video data-mute-video data-video-bkg-vimeo data-overlay-bkg-color="#000000" data-overlay-bkg-opacity="0.4">
                    <div class="tms-content">
                        <div class="tms-content-inner center left-on-mobile v-align-middle">
                            <div class="row">
                                <div class="column width-8 offset-2">
                                    <h1 class="tms-caption weight-light color-white mb-5" data-no-scale data-animate-in="preset:slideInUpShort;duration:800ms;delay:400ms;">
                                        Ride your car at affordable prices with
                                    </h1>
                                    <div class="clear"></div>
                                    <h1 class="tms-caption weight-semi-bold color-white mb-40" data-no-scale data-animate-in="preset:slideInUpShort;duration:800ms;delay:100ms;">
                                        Issem Car Rentals
                                    </h1>
                                    <div class="clear"></div>
                                    <a href="{{ route('shop') }}" class="tms-caption button rounded large text-small text-uppercase shadow bkg-theme color-white bkg-hover-theme color-hover-white"
                                    data-animate-in="preset:slideInUpShort;duration:800ms;delay:1000ms;"
                                    data-no-scale>
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <img data-src="assets/images/slider/slide-6-fw-short.jpg" data-retina src="assets/images/blank.png" alt=""/>
                <iframe width="2500" height="1600" src="https://player.vimeo.com/video/4811928?api=1"></iframe>
            </li>
        </ul>
    </div>
</div>
<!-- Fullscreen Slider Section End -->

<!-- Testimonial Section -->
<div class="section-block pb-0 bkg-grey-ultralight">
    <div class="row">
        <div class="column width-8 offset-2 center">
            <h2>Start Booking the Ride, Today</h2>
        </div>
    </div>
</div>
<div class="section-block pt-50 pb-0 bkg-grey-ultralight">
    <div class="row full-width collapse">
        <div class="column width-12 slider-column no-padding">
            <div class="tm-slider-container recent-slider" data-nav-dark data-carousel-visible-slides="3" data-nav-keyboard="false" data-nav-pagination="true" data-nav-show-on-hover="false" data-carousel-1024="2">
                <ul class="tms-slides">
                @foreach($cars as $car) 
                    <li class="tms-slide">
                        <div class="thumbnail rounded img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="{{ route('car.single', $car->id) }}">
                                <img src="{{$car->photo->file}}" alt=""/>
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="icon-plus"></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="item-description mb-20">
                            <h3 class="project-title mb-0"><b>{{$car->name}}</b></h3>
                            <span class="project-description">{{$car->rent}} / Per Day</span>
                        </div>
                    </li>
                @endforeach
                    {{-- <li class="tms-slide">
                        <div class="thumbnail rounded img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="project-style-one.html">
                                <img src="assets/images/portfolio/grid/large-margins/project-2-landscape.jpg" alt=""/>
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="icon-plus"></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="item-description mb-20">
                            <h3 class="project-title mb-0">Suzuki <strong>Cultus</strong></h3>
                            <span class="project-description">1000cc car</span>
                        </div>
                    </li>
                    <li class="tms-slide">
                        <div class="thumbnail rounded img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="project-style-one.html">
                                <img src="assets/images/portfolio/grid/large-margins/project-3-landscape.jpg" alt=""/>
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="icon-plus"></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="item-description mb-20">
                            <h3 class="project-title mb-0">Toyota <strong>Corolla XLI</strong></h3>
                            <span class="project-description">13000cc car</span>
                        </div>
                    </li>
                    <li class="tms-slide">
                        <div class="thumbnail rounded img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="project-style-one.html">
                                <img src="assets/images/portfolio/grid/large-margins/project-4-landscape.jpg" alt=""/>
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="icon-plus"></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="item-description mb-20">
                            <h3 class="project-title mb-0">Toyota <strong>Corolla GLI</strong></h3>
                            <span class="project-description">15000 car</span>
                        </div>
                    </li>
                    <li class="tms-slide">
                        <div class="thumbnail rounded img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="project-style-one.html">
                                <img src="assets/images/portfolio/grid/large-margins/project-5-landscape.jpg" alt=""/>
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="icon-plus"></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="item-description mb-20">
                            <h3 class="project-title mb-0">Honda <strong>Civic Oriel</strong></h3>
                            <span class="project-description">1800cc car</span>
                        </div>
                    </li>
                    <li class="tms-slide">
                        <div class="thumbnail rounded img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <a class="overlay-link" href="project-style-one.html">
                                <img src="assets/images/portfolio/grid/large-margins/project-6-landscape.jpg" alt=""/>
                                <span class="overlay-info">
                                    <span>
                                        <span>
                                            <span class="icon-plus"></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="item-description mb-20">
                            <h3 class="project-title mb-0">Suzuki <strong>Wagon R</strong></h3>
                            <span class="project-description">1000cc car</span>
                        </div>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Section End -->

<!-- Feature Section 2 -->
<div class="section-block feature-2">
    <div class="row flex">
        <div class="column width-6 push-5 offset-1">
            <div class="feature-image mb-mobile-50">
                <div class="feature-image-inner center-on-mobile horizon" data-animate-in="preset:slideInRightShort;duration:1000;" data-threshold="0.6">
                    <img src="assets/images/generic/emrecan-arik-dgquDmlhRAI-unsplash.jpg" alt="" />
                </div>
            </div>
        </div>
        <div class="column width-5 pull-7">
            <div class="feature-content">
                <div class="feature-content-inner horizon" data-animate-in="preset:slideInUpShort;duration:1000;delay:300ms;" data-threshold="0.6">
                    <h2 class="mb-30">Quality Service</h2>
                    <p class="lead">We analyse every corner of our services and knockout the bottlenecks before they arise.</p>
                    <p>Issem rent a ride aims to provide excellence and high quality service to his clients by providing timely deliveries and full support and building good relations with them.</p>
                    <span class="progress-bar-label">Client's Support<span class="pull-right">85%</span></span>
                    <div class="progress-bar small pill bkg-grey-light mb-0">
                        <div class="bar small bkg-green color-white horizon percent-80" data-animate-in="transX:-100%;duration:1000ms;easing:swing;"></div>
                    </div>
                    <span class="progress-bar-label">Timely Delivery<span class="pull-right">90%</span></span>
                    <div class="progress-bar small pill bkg-grey-light mb-0">
                        <div class="bar small bkg-pink color-white horizon percent-90" data-animate-in="transX:-100%;duration:1000ms;easing:swing;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature Section 2 End -->

<!-- Feature Section 2 -->
<div class="section-block bkg-grey-ultralight feature-2 right">
    <div class="row flex">
        <div class="column width-6">
            <div class="feature-image">
                <div class="feature-image-inner center-on-mobile horizon" data-animate-in="preset:slideInLeftShort;duration:1000;" data-threshold="0.6">
                    <img src="assets/images/generic/raivis-razgals-ostLWBW4hsw-unsplash.jpg" alt="" />
                </div>
            </div>
        </div>
        <div class="column width-5 offset-1">
            <div class="feature-content">
                <div class="feature-content-inner left horizon" data-animate-in="preset:slideInUpShort;duration:1000;delay:300ms;" data-threshold="0.6">
                    <h2 class="mb-30">Book ride anywhere, anytime</h2>
                    <p class="lead">We allow our customers to book their rides anytime and anywhere smartly and efficiently.</p>
                    <p>We allow our customers to book their rides remotely anywhere and anytime. We provide ease and convenience to our customers so that they will enjoy their favourite rides anytime at their doorsteps.</p>
                    <div class="row">
                        <div class="column width-6">
                            <h4 class="color-pink">Smart</h4>
                            <p>We implement smart packages for our customers for their convenience
                            and ease.</p>
                        </div>
                        <div class="column width-6">
                            <h4 class="color-green">Fast</h4>
                            <p>Always aims to deliver your rides as fastest as possible at your doorsteps.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature Section 2 End -->

<!-- Feature Section 2 -->
<div class="section-block feature-2">
    <div class="row flex">
        <div class="column width-6 push-5 offset-1">
            <div class="feature-image mb-mobile-50">
                <div class="feature-image-inner center-on-mobile horizon" data-animate-in="preset:slideInRightShort;duration:1000;" data-threshold="0.6">
                    <img src="assets/images/generic/lucho-renolfi-BHcOMNG6weM-unsplash.jpg" alt="" />
                </div>
            </div>
        </div>
        <div class="column width-5 pull-7">
            <div class="feature-content">
                <div class="feature-content-inner horizon" data-animate-in="preset:slideInUpShort;duration:1000;delay:300ms;" data-threshold="0.6">
                    <h2 class="mb-30">Maintained Cars</h2>
                    <p class="lead">Our every car is highly maintained and error free which provide exellence to our customer.</p>
                    <p>Issem car rentals take special care of his cars by knocking out the errors on daily basis. We have a team of mechanics which take care of maintaining the cars regurlarly.</p>
                                    {{-- <div class="stats-3 left">
                                        <div class="row content-grid-2 no-margin-top">
                                            <div class="grid-item mega-stat">
                                                <div class="stat">
                                                    <div class="stat-inner">
                                                        <p class="counter color-theme">
                                                            <span class="stat-counter" data-count-from="200" data-count-to="300">200</span> K
                                                        </p>
                                                        <p class="description">Active Users</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-item mega-stat">
                                                <div class="stat">
                                                    <div class="stat-inner">
                                                        <p class="counter color-green">
                                                            <span class="stat-counter" data-count-from="400" data-count-to="600">400</span> K
                                                        </p>
                                                        <p class="description">Presentations Built</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <span class="progress-bar-label">Performance<span class="pull-right">85%</span></span>
                                    <div class="progress-bar small pill bkg-grey-light mb-0">
                                        <div class="bar small bkg-green color-white horizon percent-80" data-animate-in="transX:-100%;duration:1000ms;easing:swing;"></div>
                                    </div>
                                    <span class="progress-bar-label">Safety<span class="pull-right">90%</span></span>
                                    <div class="progress-bar small pill bkg-grey-light mb-0">
                                        <div class="bar small bkg-pink color-white horizon percent-90" data-animate-in="transX:-100%;duration:1000ms;easing:swing;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Feature Section 2 End -->

                <!-- Feature Section -->
                <div class="section-block replicable-content bkg-grey-ultralight">
                    <div class="row">
                        <div class="column width-8 offset-2 center">
                            <h3>Why Book Rides With Us?</h3>
                            <p class="lead mb-50">With variety of small to sedan class cars, Issem rent a ride provides best packages for customers under afforable prices.</p>
                        </div>
                    </div>
                    <div class="row flex">
                        <div class="column width-4 center">
                            <div class="feature-column">
                                <span class="title-large weight-light font-alt-1 color-gradient-royal-garden">01.</span>
                                <h4 class="mb-30">Affordable Prices</h4>
                                <p>Issem rent a ride provides every type of small to sedan class car at your doorsteps on affordable prices. Our every car is error free and regurlarly maintained by our team of mechanics. This is our one of the key feature that we provide quality in affordable prices.</p>
                            </div>
                        </div>
                        <div class="column width-4 center">
                            <div class="feature-column">
                                <span class="title-large weight-light font-alt-1 color-gradient-royal-garden">02.</span>
                                <h4 class="mb-30">Personal Drivers</h4>
                                <p>Issem car rentals also provides drivers with a car on the wish of our customer. Issem rent a ride have a team of quality  drivers which we provide on our customer’s choice. We offer variety of features and packages that suites our customer’s requirement to provide them excellence.</p>
                            </div>
                        </div>
                        <div class="column width-4 center">
                            <div class="feature-column">
                                <span class="title-large weight-light font-alt-1 color-gradient-royal-garden">03.</span>
                                <h4 class="mb-30">Easy Payments</h4>
                                <p>We take care of our customers by providing them ease and convenience. So that’s why we offer easy cash on delivery method for our customers. We allow our customer to pay the bill on car delivery. We aim to provide quality and excellence to our customer with simplicity.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column width-12">
                            <div class="box rounded small bkg-grey-light">
                                <div class="row flex v-align-middle">
                                    <div class="column width-12 center mb-mobile-20">
                                        <div>
                                            <p class="mb-mobile-20"><span class="weight-semi-bold">Have Questions?</span> Get in touch with our sales team and they'll be happy help. <a href="{{ route('contact') }}">Send us an email and we'll respond in 48hrs &rarr;</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Feature Section End -->

                <!-- Blog Section -->
                <!-- ################################## -->
                <!-- Blog Section End -->

                <!-- Sign Up Section 2 -->
                <div class="section-block signup-2 signup-2-1">
                    <div class="row one-column-on-tablet">
                        <div class="column width-5">
                            <div class="signup-form-container">
                                <div class="row">
                                    <div class="column width-12">
                                        <h3>Stay in the know.</h3>
                                        <p class="lead mb-30">Unlock cool new features and new building blocks. Unsubcribe at any time!</p>
                                    </div>
                                </div>
                                <form class="signup-form" action="php/subscribe.php" method="post" novalidate>
                                    <div class="row">
                                        <div class="column width-12">
                                            <div class="field-wrapper">
                                                <input type="text" name="fname" class="form-fname rounded form-element medium" placeholder="Your Name*" tabindex="1" required>
                                            </div>
                                        </div>
                                        <div class="column width-12">
                                            <div class="field-wrapper">
                                                <input type="email" name="email" class="form-email rounded form-element medium" placeholder="Email address*" tabindex="2" required>
                                            </div>
                                        </div>
                                        <div class="column width-12 left">
                                            <input type="submit" value="Subscribe" class="form-submit rounded button medium text-uppercase bkg-theme bkg-hover-theme color-white color-hover-white" tabindex="3">
                                        </div>
                                    </div>
                                    <input type="text" name="honeypot" class="form-honeypot form-element">
                                </form>
                                <div class="form-response">We don't spam, promise!</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sign Up Section 2 End -->

            </div>
            <!-- Content End -->

            <!-- Footer -->
            <footer class="footer footer-fixed" data-animate-reveal>
                <div class="footer-top">
                    <div class="row flex">
                        <div class="column width-3">
                            <div class="widget">
                                <div class="footer-logo">
                                    <a href="{{ url('/') }}"><img src="assets/images/issem-logo.png" alt="Faulkner Logo" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="column width-9">
                            <div class="row two-columns-on-tablet">
                                <div class="column width-3">
                                    <div class="widget">
                                        <h3 class="widget-title mb-30">Contact</h3>
                                        <address>
                                            Sunnynoon2111@outlook.de<br>
                                            Issem Rentals &amp; Co, Inc.<br>
                                            Shahpur stop,<br>
                                            Adyala Road, Rawalpindi, Pakistan
                                        </address>
                                    </div>
                                </div>
                                <div class="column width-3">
                                    <div class="widget">
                                        <h3 class="widget-title mb-30">Pages</h3>
                                        <ul>
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li><a href="{{ route('about') }}">About Us</a></li>
                                            <li><a href="{{ route('shop') }}">Shop</a></li>
                                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="column width-3">
                                    <div class="widget">
                                        <h3 class="widget-title mb-30">Featured Cars</h3>
                                        <ul>
                                            <li><a href="#">Audi A5</a></li>
                                            <li><a href="#">Land Cruiser V8</a></li>
                                            <li><a href="#">Toyota Prado Tx</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="column width-3">
                                    <div class="widget">
                                        <h3 class="widget-title mb-30">Socialize</h3>
                                        <ul class="social-list list-horizontal">
                                            <li><a href="#"><span class="icon-twitter small"></span></a></li>
                                            <li><a href="https://www.facebook.com/sunny.kahn.33" target="_blank"><span class="icon-facebook small"></span></a></li>
                                            <li><a href="https://www.instagram.com/sunny33101/" target="_blank"><span class="icon-instagram small"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row">
                        <div class="column width-12">
                            <div class="footer-bottom-inner">
                                <p class="copyright pull-left clear-float-on-mobile">&copy; Issem-rent-a-ride. All Rights Reserved.</p> <a href="#" class="scroll-to-top pull-right clear-on-mobile" data-no-hide>Back Top</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->

        </div>
    </div>

    @endsection
