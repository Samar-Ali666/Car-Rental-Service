@extends('layouts.master')
@section('content')

<div class="single-product">
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

				<!-- Intro Title Section 1 -->
				<div class="section-block intro-title-1 small">
					<div class="row">
						<div class="column width-12">
							<div class="title-container">
								<div class="title-container-inner">
									<div class="row flex">
										<div class="column width-6 v-align-middle">
											<div>
												<h1 class="mb-0">{{$car->name}}</h1>
												<p class="lead mb-0 mb-mobile-20">{{$car->category->name}} class car</p>
											</div>
										</div>
										<div class="column width-6 v-align-middle">
											<div>
												<ul class="breadcrumb mb-0 pull-right clear-float-on-mobile">
													<li>
														<a href="{{ url('/') }}">Home</a>
													</li>
													<li>
														<a href="{{ route('shop') }}">Shop</a>
													</li>
													<li>
														Car
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

				<div class="section-block clearfix pt-0">
					<div class="row">

						<!-- Content Inner -->
						<div class="column width-8 content-inner">

							<!-- Product Images -->
							<div class="row">
								<div class="column width-12">
									<div class="product freeze" data-extra-space-top="100" data-extra-space-bottom="90" data-push-section=".products-similar" data-width="730" data-height="541">
										<div class="product-images">
											<div class="tm-slider-container content-slider mb-0" data-animation="slide" data-scale-min-height="100" data-scale-under="1080" data-width="1080" data-height="800" data-nav-show-on-hover="false">
												<ul class="tms-slides">
													<li class="tms-slide" data-image data-force-fit data-nav-dark	 data-as-bkg-image>
														<img data-src="{{$car->photo->file}}" data-retina src="/assets/images/blank.png" alt=""/>
													</li>
												</ul>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							<!-- Product Images -->
						
						</div>
						<!-- Content Inner End -->

						<!-- Sidebar -->
						<aside class="column width-4 sidebar right">
							<div class="sidebar-inner">
								<div class="product-summary">
									<div class="row">
										<div class="column width-12">

											<!-- Product Price -->
											<div class="product-price price">
												<ins><span class="amount">PKR {{$car->rent}}.00 / Per Day</span></ins>
											</div>
											<!-- Product Price End --> 
	
											<!-- Product Description -->
											<div class="product-description">
												<hr class="mt-0">
												<p>{{$car->description}}</p>
											</div>
											<!-- Product Description End -->

											<!-- Product Specs -->
											<div class="product-specs mb-10">
												<hr>
												<h4>Select Days</h4>
												<form class="product-form" action="{{ route('checkout.show', $car->id) }}" method="get" novalidate="">
													<div class="row">
														<div class="column width-12">
															<div class="field-wrapper">
												                <input type="number" name="days" class="form-lname form-element rounded medium" placeholder="Days" value="1" min="1" tabindex="2">
															</div>
															<h4>Rental Type</h4>
															<div class="form-select form-element rounded medium mb-20" tabindex="2">
																<select name="type">
																	<option selected="selected" value="Inside City">Inside city</option>
																	<option value="Out of city">Out of city</option>
																</select>
															</div>
														</div>
													</div>
													<hr>
													<div class="row merged-form-elements">
														<div class="column width-12">
															<button type="submit" class="form-submit button full-width rounded medium bkg-theme bkg-hover-theme color-white color-hover-white center">Book Now</button>
														</div>
													</div>
												</form>
											</div>
											<!-- Product Specs -->
										</div>
									</div>
								</div>
							</div>
						</aside>
						<!-- Sidebar End -->

						<!-- Products Similar -->
						<div class="column width-12">
							<div class="products-similar">
								<hr>
								<h3 class="mb-50">Related Cars</h3>
								<div id="product-grid" class="grid-container products fade-in-progressively no-padding-top" data-layout-mode="masonry" data-grid-ratio="1.5" data-animate-resize data-animate-resize-duration="0">
									<div class="row">
										<div class="column width-12">
											<div class="row grid content-grid-3">
												@foreach($related_cars as $related_car)
												<div class="grid-item product grid-sizer cameras">
													<div class="thumbnail rounded product-thumbnail border-grey-light img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
														<a class="overlay-link" href="single-product-device.html">
															<img src="{{$related_car->photo->file}}" alt=""/>
															<span class="overlay-info">
																<span>
																	<span>
																		View
																	</span>
																</span>
															</span>
														</a>
														<div class="product-actions center">
															<a href="#" class="button add-to-cart-button rounded small">Book Now</a>
														</div>
													</div>
													<div class="product-details center">
														<h3 class="product-title text-truncate">
															<a href="#">
																{{$related_car->name}}
															</a>
														</h3>
														<span class="product-price price"><ins><span class="amount">PKR {{$related_car->rent}}.00 / One Day</span></ins></span>
														<div class="product-actions-mobile">
															<a href="#" class="button add-to-cart-button rounded small">Book Now</a>
														</div>
													</div>
												</div>
												@endforeach
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Content End -->

			<!-- Footer -->
			@include('includes.footer')
			<!-- Footer End -->

		</div>
	</div>
	</div>



@endsection