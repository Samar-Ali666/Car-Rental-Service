@extends('layouts.master')
@section('content')

	<div class="wrapper reveal-side-navigation">
		<div class="wrapper-inner">

			<!-- Header -->
			<header class="header header-absolute header-transparent header-fixed-on-mobile" data-bkg-threshold="100" data-sticky-threshold="0">
				<div class="header-inner">
					<div class="row nav-bar">
						<div class="column width-12 nav-bar-inner">
							<div class="logo">
								<div class="logo-inner">
									<a href="index.html"><img src="/assets/images/issem.png" alt="Faulkner Logo" /></a>
									<a href="index.html"><img src="/assets/images/issem-logo.png" alt="Faulkner Logo" /></a>
								</div>
							</div>
							<nav class="navigation nav-block secondary-navigation nav-right">
								<ul>
									<li>
										<!-- Button -->
										<div class="v-align-middle">
											<a href="contact-style-two.html" class="weight-semi-bold color-green">Need Support?</a>
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

				<!-- Maintenance Section -->
				<div class="section-block bkg-pink pt-150 pb-150">
					<div class="row">
						<div class="column width-8 offset-2 center">
							<h2 class="title-large color-white">Account Blocked!</h2>
							<p class="title-medium color-white">Your account is temporarly blocked by the Issem-Rental's team<br>We are reviewing you account</p>
						</div>
					</div>
				</div>
				<!-- Maintenance Section End -->

				<!-- Signup Modal End -->
				<div id="signup-lightbox" class="signup-1 pt-70 pb-50 hide">
					<div class="row">
						<div class="column width-12 left mb-20">
							<div class="signup-form-container">
								<h3 class="mb-30 center">You'll receive a notification</h3>
								<form class="signup-form merged-form-elements" action="php/subscribe.php" method="post" novalidate>
									<div class="row">
										<div class="column width-7 offset-1">
											<div class="field-wrapper">
												<input type="email" name="email" class="form-email form-element large" placeholder="Email address" tabindex="2" required>
											</div>
										</div>
										<div class="column width-4 cente-on-mobile">
											<input type="submit" value="Signup" class="form-submit button large bkg-charcoal bkg-hover-theme color-white color-hover-white">
										</div>
									</div>
									<input type="text" name="honeypot" class="form-honeypot form-element">
								</form>
								<div class="form-response"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- Signup Modal End -->

			</div>
			<!-- Content End -->

			<!-- Footer -->
			@include('includes.footer')
			<!-- Footer End -->

		</div>
	</div>
@endsection	