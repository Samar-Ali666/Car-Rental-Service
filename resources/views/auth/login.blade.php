@extends('layouts.master')
@section('content')

@include('includes.side_nav')
    <div class="wrapper">
        <div class="wrapper-inner">
            <!-- Header -->
            <header class="header header-relative header-fixed-on-mobile nav-dark" data-bkg-threshold="100" data-sticky-threshold="0">
                <div class="header-inner">
                    <div class="row nav-bar">
                        <div class="column width-12 nav-bar-inner">
                            <div class="logo">
                                <div class="logo-inner">
                                    <a href="{{url('/')}}"><img src="assets/images/issem.png" alt="Faulkner Logo" /></a>
                                    <a href="{{ url('/') }}"><img src="assets/images/issem-logo.png" alt="Faulkner Logo" /></a>
                                </div>
                            </div>
                            <nav class="navigation nav-block secondary-navigation nav-right">
                                <ul>
                                    <li>
                                        <!-- Button -->
                                        <div class="v-align-middle">
                                            <a href="contact-style-two.html" class="weight-semi-bold color-black">Need Support?</a>
                                        </div>
                                    </li>
                                    <li class="aux-navigation hide">
                                        <!-- Aux Navigation -->
                                        <a href="#" class="navigation-show side-nav-show nav-icon">
                                            <span class="icon-menu"></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Header End -->

            <!-- Content -->
            <div class="content clearfix">

                <!-- Hero 5 Login Section -->
                <div class="section-block hero-5 window-height left show-media-column-on-mobile">
                    <div class="media-column width-6 bkg-grey-ultralight">
                        <div class="tm-slider-container content-slider window-height" data-animation="slide" data-nav-arrows="false" data-nav-pagination="false" data-pause-on-hover="false" data-speed="2000" data-auto-advance data-auto-advance-interval="5000" data-progress-bar="false" data-scale-under="0" data-width="722">
                            <ul class="tms-slides">
                                <li class="tms-slide" data-image data-force-fit data-as-bkg-image data-animation="fade">
                                    <img data-src="assets/images/generic/hero-half-1.jpg" data-retina src="images/blank.png" alt=""/>
                                </li>
                                <li class="tms-slide" data-image data-force-fit data-as-bkg-image data-animation="fade">
                                    <img data-src="assets/images/generic/hero-half-2.jpg" data-retina src="images/blank.png" alt=""/>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column width-5 offset-7">
                            <div class="hero-content split-hero-content">
                                <div class="hero-content-inner left">
                                    <h3>Sign in to continue</h3>
                                    <p class="mb-20">Need a client account? <a class="color-pink" href="{{ url('register') }}" class="fade-location">Click Here</a></p>
                                    <div class="login-form-container">
                                        <form class="login-form" action="{{ route('login') }}" method="POST" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="column width-12">
                                                    <div class="field-wrapper">
                                                        <label class="color-charcoal">Username/Email:</label>
                                                        <input id="email" type="email" name="email" value="{{old('email')}}" class="form-username form-element rounded medium" @error('email') is-invalid @enderror placeholder="JohnDoe" required>

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror

                                                    </div>
                                                </div>
                                                <div class="column width-12">
                                                    <div class="field-wrapper">
                                                        <label class="color-charcoal">Password:</label>
                                                        <input id="password" type="password" name="password" class="form-password form-element rounded medium" @error('password') is-invalid @enderror placeholder="••••••••" required>

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror

                                                    </div>
                                                </div>
                                                <div class="column width-12">
                                                    <div class="field-wrapper pt-0 pb-20">
                                                        <input id="remember" {{old('remember') ? 'checked' : ''}} class="form-element checkbox rounded" name="remember" type="checkbox" required>
                                                        <label for="remember" class="checkbox-label no-margins">Remember Me</label>
                                                    </div>
                                                </div>
                                                <div class="column width-12">
                                                    <input type="submit" value="Sign In" class="form-submit button rounded medium bkg-pink bkg-hover-theme bkg-focus-green color-white color-hover-white mb-0">
                                                </div>
                                            </div>
                                        </form>
                                        <p class="text-small mt-20">I forgot my password - <a class="color-pink" href="#">Remind me</a></p>
                                        <div class="form-response show"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero 5 Login Section End -->

            </div>
            <!-- Content End -->

            <!-- Footer -->
            @include('includes.footer')
            <!-- Footer End -->

        </div>
    </div>

@endsection