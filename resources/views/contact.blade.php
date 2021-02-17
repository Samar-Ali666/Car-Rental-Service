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
													>Contact Us</h1>
													<div class="clear"></div>
													<p class="tms-caption lead mb-0 mb-mobile-20 color-white opacity-07"
														data-animate-in="preset:slideInUpShort;duration:1000ms;delay:100ms;"
														data-no-scale
													>Stay in touch with Issem Car Rentals!</p>
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

				<!-- Hero Section 5 -->
				<div class="section-block hero-5 hero-5-2 bkg-grey-ultralight">
					<div class="media-column width-6"></div>
					<div class="row">
						<div class="column width-5 push-7">
							<div class="hero-content split-hero-content no-margin-top">
								<div class="hero-content-inner left-on-mobile">
									<div class="tabs button-nav rounded bordered horizontal left">
										<ul class="tab-nav">
											<li class="active">
												<a href="#tabs-2-pane-1">Address</a>
											</li>
											<li>
												<a href="#tabs-2-pane-2">General Inquiries</a>
											</li>
										</ul>
										<div class="tab-panes">
											<div id="tabs-2-pane-1" class="active animate">
												<div class="tab-content">
													<p class="mb-20">Shahpur Stop,<br>
													Adlaya Road,<br>
													Rawalpindi.</p>
													<p>If you have any general inquiries and want to ride a book you are are welcome. Here above is our address which you can visit at any time.</p>
												</div>
											</div>
											<div id="tabs-2-pane-2">
												<div class="tab-content">
													<p class="mb-20">Zaraq Khokar : <b>+92-317-0510338</b>,<br>
													Rajab Khokar : <b>+92-311-5964067</b>,<br>
													Ch.Kamran Zafar : <b>004915229709836</b>.</p>
													<p>If you have any general inquiries and want to ride a book you are are welcome. Here above is our contacts which you can call us at at any time.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Hero Section 5 End -->

				<!--Contact Form -->
				<div class="section-block replicable-content contact-2">
					<div class="row">
						<div class="column width-8 offset-2 center">
							<h2 class="mb-30">Talk To Us</h2>
							<div class="contact-form-container">
								<form action="{{ route('contacts.store') }}" method="post">
									@csrf
									<div class="row">
										<div class="column width-6">
											<div class="field-wrapper">
												<input type="text" name="firstName" class="form-fname form-element rounded medium" placeholder="First Name*" tabindex="1" required>
											</div>
										</div>
										<div class="column width-6">
											<div class="field-wrapper">
												<input type="text" name="lastName" class="form-lname form-element rounded medium" placeholder="Last Name" tabindex="2" required>
											</div>
										</div>
										<div class="column width-6">
											<div class="field-wrapper">
												<input type="email" name="email" class="form-email form-element rounded medium" placeholder="Email address*" tabindex="3" required>
											</div>
										</div>
										<div class="column width-6">
											<div class="field-wrapper">
												<input type="text" name="website" class="form-wesite form-element rounded medium" placeholder="Website" tabindex="4">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="column width-12">
											<div class="field-wrapper">
												<textarea name="message" class="form-message form-element rounded medium" placeholder="Message*" tabindex="7" required></textarea>
											</div>
											<button type="submit" class="button rounded medium bkg-theme bkg-hover-theme color-white color-hover-white">Send</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!--Contact Form End -->

			</div>
			<!-- Content End -->

			<!-- Footer -->
			@include('includes.footer')
			<!-- Footer End -->

		</div>
	</div>


@endsection