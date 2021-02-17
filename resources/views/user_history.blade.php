@extends('layouts.master')
@section('content')

<header class="header header-relative header-fixed-on-mobile navbar-dark">
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
                    <!-- Button -->
                    <div class="v-align-middle">
                        <div class="dropdown">
                            <a href="#" class="nav-icon flex no-page-fade no-label-on-mobile no-margin-bottom no-padding-right">
                                <img width="30" height="30" class="avatar circle pull-left no-margin-bottom hide-on-mobile" src="/assets/images/assets/avatar.jpg" alt=""><span>{{Auth::user()->name}}</span><span class="icon-down"></span></a>
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
                                                    <div class="column width-6">
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
                                    <div class="form-response"></div>
                                </div>
                            </div>
                        </div>
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
        <nav class="navigation nav-block primary-navigation nav-right sub-menu-indicator">
            <ul>
                <li class="">
                    <a href="{{ url('/home') }}">Current Rides</a>
                </li>
                <li class="current">
                    <a href="{{ route('user.history') }}">Rides Hsitory</a>
                </li>
                <li class="">
                    <a href="{{ route('shop') }}">Book Ride</a>        
                </li>
            </ul>
        </nav>
    </div>
</div>
</div>
</header>

<div class="content clearfix">
    <!-- Intro Title Section 1 -->
        <div class="section-block intro-title-1 small">
            <div class="row">
                <div class="column width-10 offset-1">
                    <div class="title-container">
                        <div class="title-container-inner">
                            <div class="row flex">
                                <div class="column width-6 v-align-middle">
                                    <div>
                                        <h1 class="mb-0">Orders History</h1>
                                        <p class="lead mb-mobile-20">My All Bookings History.</p>
                                        @if(Session::has('confirmed'))
                                        <p class="lead mb-0 mb-mobile-20 color-green">{{session('confirmed')}}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="column width-6 v-align-middle">
                                    <div>
                                        <ul class="breadcrumb mb-0 pull-right clear-float-on-mobile">
                                            <li>
                                                <a href="{{ route('home') }}">Dasboard</a>
                                            </li>
                                            <li>
                                                Rides history
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Intro Title Section 1 End -->
    <div class="section-block pt-0">
        <div class="row">
            <div class="column width-10 offset-1">
                <div class="with-background">

                    <!-- Cart Message -->
                    @if(count($bookings) > 0)
                    <div class="row">
                        <div class="column width-12">
                            <p class="lead">You have ordered <span class="item-number weight-bold">{{$order_count}}</span> cars in your past bookings.</p>
                        </div>
                        <div class="column width-12">
                            <hr>
                        </div>
                    </div>
                    <!-- Cart Message End -->

                    <!-- Cart Overview -->
                    <div class="row">
                        <div class="column width-12">
                            <div class="cart-overview">
                                <table class="table non-responsive rounded large">
                                    <thead>
                                        <tr>
                                            <th class="product-details">Car</th>
                                            <th class="product-quantity">For Days</th>
                                            <th class="product-quantity">Rental Type</th>
                                            <th class="product-subtotal right">Rent</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($bookings as $booking)
                                        <tr class="cart-item">
                                            <td class="product-details">
                                                <span>
                                                    <img src="{{$booking->car->photo->file}}" class="rounded" width="60" alt=""/>
                                                    <span>
                                                        <a href="#" class="product-title">{{$booking->car->name}}</a>
                                                        <span class="product-description"><em>{{$booking->car->category->name}} class car</em></span>
                                                        <a href="#" class="product-remove">Cancel</a>
                                                    </span>
                                                </span>
                                            </td>
                                            <td class="product-quantity">
                                                <span class="amount"> {{$booking->days}}</span>
                                            </td>
                                            <td class="product-quantity">
                                                <span class="amount"> {{$booking->type}}</span>
                                            </td>
                                            <td class="product-subtotal right">
                                                <span class="amount"> PKR {{$booking->total}}.00</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                <div class="row">
                                    <div class="column widht-12 center">
                                        <img src="/assets/images/generic/undraw_No_data_re_kwbl.svg" width="300" alt="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="column width-12 center pt-10">
                                        <h2>You don't have any bookings history yet</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="column width-12 center">
                                        <a href="{{ route('shop') }}" class="button rounded small text-small text-uppercase bkg-theme color-white bkg-hover-theme color-hover-white">Book Now</a>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- Cart Overview End -->


                    <!-- Pagination Section 3 -->
                    <!-- Pagination Section 3 End -->

                </div>
            </div>
        </div>
    </div>
</div>



<!-- Footer -->
@include('includes.footer')
<!-- Footer End -->

@endsection