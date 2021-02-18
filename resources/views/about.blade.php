@extends('layouts.master')
@section('content')

	<!-- Side Navigation Menu -->
	@include('includes.side_nav')
	<!-- Side Navigation Menu End -->

	<div class="wrapper reveal-side-navigation">
		<div class="wrapper-inner">

			<!-- Header -->
			@include('includes.nav')
			<!-- Header End -->

			<!-- Content -->
			<div class="content clearfix">

				<!-- Full Width Slider Section -->
				<div class="section-block featured-media page-intro tm-slider-parallax-container">
					<div class="tm-slider-container full-width-slider" data-parallax data-parallax-fade-out data-animation="slide" data-scale-under="1140">
						<ul class="tms-slides">
							<li class="tms-slide" data-image data-force-fit data-overlay-bkg-color="#000000" data-overlay-bkg-opacity="0.3">
								<div class="tms-content">
									<div class="tms-content-inner center">
										<div class="row flex">
											<div class="column width-6 offset-3">
												<div>
													<h1 class="tms-caption mb-0 color-white"
														data-animate-in="preset:slideInUpShort;duration:1000ms;delay:100ms;"
														data-no-scale
													>The Issem Car Rentals</h1>
													<div class="clear"></div>
													<p class="tms-caption lead mb-0 mb-mobile-20 color-white opacity-07"
														data-animate-in="preset:slideInUpShort;duration:1000ms;delay:100ms;"
														data-no-scale
													>The best car rental service in region!</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<img data-src="assets/images/slider/hedo.jpg" data-retina src="images/blank.png" alt=""/>
							</li>
						</ul>
					</div>
				</div>
				<!-- Full Width Slider Section -->

				<!-- Service Section -->
				<div class="section-block replicable-content">
					<div class="row">
						<div class="column width-3">
							<h3 class="mb-50">A Little About Us</h3>
						</div>
						<div class="column width-8 offset-1">
							<div class="row">
								<div class="column width-12">
									<p class="lead mb-50">We are team of five members motivated to provide rental car services in region of Islamabad and Rawalpindi. Our aim is to provide quality and exellence with an ease. We have variety of small to sedan class cars under affordable prices.</p>
								</div>
							</div>
							<div class="row flex">
								<div class="column width-6">
									<h6 class="mb-30 weight-bold text-uppercase">Fast Delivery</h6>
									<p class="mb-50">Issem rent a ride provides fast delivery as soon as possible at your doorsteps!. Our team works day and night to bring exellence and quality to our customer with an ease.</p>
								</div>
								<div class="column width-6">
									<h6 class="mb-30 weight-bold text-uppercase">Afforable prices</h6>
									<p class="mb-50">Our main goal is not only provide excellence and quality services to our customers but to provide under affordable prices. So that our all kind of customers enjoy their rides!</p>
								</div>
								<div class="column width-6">
									<h6 class="mb-30 weight-bold text-uppercase">Drivers</h6>
									<p>Issem car rentals provides personal drivers with all kinds car bookings. We have team of qualify drivers which are always availible on kinds of car bookings and order!</p>
								</div>
								<div class="column width-6">
									<h6 class="mb-30 weight-bold text-uppercase">Best Service!</h6>
									<p>Issem Car rental are only rentals in origin that are providing excellence and quality to their customers with ease under afforable prices!. So visit our shop and book the ride that you love!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Service Section End -->

			</div>
			<!-- Content End -->

			<!-- Footer -->
			@include('includes.footer')
			<!-- Footer End -->

		</div>
	</div>


@endsection