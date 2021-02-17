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
									<p class="lead mb-50">Treat every guest like a VIP from dining preferences to allergies to special occasions, Guestbook allows you to keep track of everything that matters. Bring diners back for more by creating targeted lists and exporting them to your favourite marketing tool.</p>
								</div>
							</div>
							<div class="row flex">
								<div class="column width-6">
									<h6 class="mb-30 weight-bold text-uppercase">Web Design</h6>
									<p class="mb-50">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labor.</p>
								</div>
								<div class="column width-6">
									<h6 class="mb-30 weight-bold text-uppercase">Identity Creation</h6>
									<p class="mb-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
								<div class="column width-6">
									<h6 class="mb-30 weight-bold text-uppercase">Social Strategy</h6>
									<p>Adipisicing elit, sed do eiusmod tempor incididun. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
								</div>
								<div class="column width-6">
									<h6 class="mb-30 weight-bold text-uppercase">Illustration</h6>
									<p>Adipisicing elit, sed do eiusmod tempor incididun. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Service Section End -->

				<!-- Team Grid -->
				<div class="section-block team-2 pt-0 bkg-white">
					<div class="row">
						<div class="column width-12">
							<div class="row content-grid-3">
								<div class="grid-item horizon" data-animate-in="preset:slideInUpShort;duration:1000ms;" data-threshold="0.3">
									<div class="thumbnail rounded no-margin-bottom" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
										<img src="assets/images/team/team-member-1.jpg" width="760" height="500" alt=""/>
									</div>
									<div class="team-content-info center">
										<h4 class="mb-5">Jason Ford</h4>
										<h4 class="occupation">Developer</h4>
										<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
										<ul class="social-list list-horizontal">
											<li><a href="#"><span class="icon-facebook small"></span></a></li>
											<li><a href="#"><span class="icon-twitter small"></span></a></li>
											<li><a href="#"><span class="icon-dribbble small"></span></a></li>
										</ul>
									</div>
								</div>
								<div class="grid-item horizon" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:300ms;" data-threshold="0.3">
									<div class="thumbnail rounded no-margin-bottom" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
										<img src="assets/images/team/team-member-3.jpg" width="760" height="500" alt=""/>
									</div>
									<div class="team-content-info center">
										<h4 class="mb-5">Michael Andrews</h4>
										<h4 class="occupation">Designer</h4>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non.</p>
										<ul class="social-list list-horizontal">
											<li><a href="#"><span class="icon-facebook small"></span></a></li>
											<li><a href="#"><span class="icon-twitter small"></span></a></li>
											<li><a href="#"><span class="icon-github small"></span></a></li>
										</ul>
									</div>
								</div>
								<div class="grid-item horizon" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:600ms;" data-threshold="0.3">
									<div class="thumbnail rounded no-margin-bottom" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
										<img src="assets/images/team/team-member-4.jpg" width="760" height="500" alt=""/>
									</div>
									<div class="team-content-info center">
										<h4 class="mb-5">Samuel Banks</h4>
										<h4 class="occupation">Illustrator</h4>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non.</p>
										<ul class="social-list list-horizontal">
											<li><a href="#"><span class="icon-facebook small"></span></a></li>
											<li><a href="#"><span class="icon-behance small"></span></a></li>
											<li><a href="#"><span class="icon-dribbble small"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Team Grid End -->

				<!-- Hero 5 Section -->
				<div class="section-block hero-5 hero-5-2 clear-height show-media-column-on-mobile bkg-ash">
					<div class="media-column width-6"></div>
					<div class="row">
						<div class="column width-5 push-7">
							<div class="hero-content split-hero-content">
								<div class="hero-content-inner left horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;delay:200ms;" data-threshold="0.5">
									<p class="lead color-white">Started by in New York by two guys back in early 2003 with one computer, one mouse and one big idea.</p>
									<p class="color-grey-light">Adipisicing elit, sed do eiusmod tempor incididun. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
									<p class="color-grey-light">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Hero 5 Section End -->

				<!-- Custom Call to Action Section -->
				<div class="section-block pt-40 pb-40">
					<div class="row flex">
						<div class="column width-8 left horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;delay:0;" data-threshold="1">
							<p class="lead mb-0 mb-mobile-20">Find out everything you need to know in our weekly live webinar. Interviews with creators to discover stories behind our products.</p>
						</div>
						<div class="column width-4 v-align-middle horizon right left-on-mobile " data-animate-in="preset:slideInRightShort;duration:1000ms;delay:300;" data-threshold="1">
							<div>
								<a href="https://player.vimeo.com/video/118640180?autoplay=1" class="button rounded medium no-margins bkg-theme bkg-hover-theme color-white color-hover-white mb-0 lightbox-link"><span class="icon-play left"></span> Play Our Demo</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Custom  Call to Action Section End -->

			</div>
			<!-- Content End -->

			<!-- Footer -->
			@include('includes.footer')
			<!-- Footer End -->

		</div>
	</div>


@endsection