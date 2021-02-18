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
                                    <a href="{{ url('/') }}"><img src="assets/images/issem.png" alt="Faulkner Logo" /></a>
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
                                    <img data-src="assets/images/generic/hero-half-1.jpg" data-retina src="assets/images/blank.png" alt=""/>
                                </li>
                                <li class="tms-slide" data-image data-force-fit data-as-bkg-image data-animation="fade">
                                    <img data-src="assets/images/generic/hero-half-2.jpg" data-retina src="assets/images/blank.png" alt=""/>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column width-5 offset-7">
                            <div class="hero-content split-hero-content">
                                <div class="hero-content-inner left">
                                    <h3>Register an Account</h3>
                                    <p class="mb-20">Already have an account? <a class="color-pink" href="{{ url('login') }}" class="fade-location">Click Here</a></p>
                                    <div class="register-form-container">
                                        <form class="register-form" action="{{ route("register") }}" method="POST" novalidate>
                                            <div class="row merged-form-elements">
                                                @csrf
                                                <div class="column width-6">
                                                    <div class="field-wrapper">
                                                        <label class="color-charcoal">Name:</label>
                                                        <input id="name" type="text" name="name" value="{{ old('name') }}" class="form-firstname form-element rounded medium" @error('name') is-invalid @enderror placeholder="John" required>

                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror

                                                    </div>
                                                </div>
                                                <div class="column width-6">
                                                    <div class="field-wrapper">
                                                        <label class="color-charcoal">E-Mail:</label>
                                                        <input id="email" type="text" name="email" value="{{old('email')}}" class="form-lastname form-element rounded medium" @error('email') is-invalid @enderror placeholder="johndoe@gmail.com" required>
                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="column width-12">
                                                    <div class="field-wrapper">
                                                        <label class="color-charcoal">Password:</label>
                                                        <input id="password" type="password" name="password" class="form-password form-element rounded medium" @error('password') is-invalid @enderror placeholder="•••••••• (8 or more characters)" required>
                                                        @error('password')
                                                            <strong>{{$message}}</strong>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="column width-12">
                                                    <div class="field-wrapper">
                                                        <label class="color-charcoal">Confirm password:</label>
                                                        <input id="password-confirm" type="password" name="password_confirmation" class="form-email form-element rounded medium" placeholder="••••••••" required>
                                                    </div>
                                                </div>
                                                <div class="column width-12 mt-10">
                                                    <input type="submit" value="Create Account" class="form-submit button rounded medium bkg-pink bkg-hover-theme bkg-focus-pink color-white color-hover-white no-margins">
                                                </div>
                                            </div>
                                        </form>
                                        <p class="text-small mt-20">By creating an account you agree to our terms - <a class="color-pink" href="#">Read More</a></p>
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