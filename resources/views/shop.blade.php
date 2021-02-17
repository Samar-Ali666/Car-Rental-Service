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
													>Issem's Rental Shop</h1>
													<div class="clear"></div>
													<p class="tms-caption lead mb-0 mb-mobile-20 color-white opacity-07"
														data-animate-in="preset:slideInUpShort;duration:1000ms;delay:100ms;"
														data-no-scale
													>Book the best cars from our shop under afforable prices.</p>
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

				<!-- Filter Menu -->
				<div class="section-block pt-0 pb-0 grid-filter-dropdown" data-target-grid="#product-grid">
					<div class="freeze pt-10 bkg-white" data-extra-space-top="80" data-extra-space-bottom="0">
						<div class="row">
							<div class="column width-12">
								<div class="filter-menu-inner">
									<div class="row flex">
										<div class="column width-8 v-align-middle">
											<div class="product-result-count">
												<p class="mb-0 mb-mobile-30">Showing 1–10 of 46 results</p>
											</div>
										</div>
										<div class="column width-4 right left-on-mobile">
											<span class="dropdown-label mb-0 mb-mobile-30">Filter: </span>
											<div class="dropdown medium inline-block" data-update-selection>
												<a href="#" class="button rounded center border-grey-light color-grey bkg-hover-theme color-hover-white"><span>All Cars</span><span class="icon-down-open-mini pull-right"></span></a>
												<ul class="dropdown-list">
													<li><a class="active" href="#" data-filter="*">All Cars</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Filter Menu End -->

				<!-- Product Grid -->
				<div id="product-grid" class="section-block grid-container products fade-in-progressively pt-30 pb-0" data-layout-mode="masonry" data-grid-ratio="1.5" data-animate-resize data-animate-resize-duration="0">
					<div class="row">
						<div class="column width-12">
							<div class="row grid content-grid-4">
								@foreach($cars as $car)
								<div class="grid-item product grid-sizer cameras">
									<div class="thumbnail rounded product-thumbnail border-grey-light img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
										<a class="overlay-link" href="{{ route('car.single', $car->id) }}">
											<img src="{{$car->photo->file}}" alt=""/>
											<span class="overlay-info">
												<span>
													<span>
														View
													</span>
												</span>
											</span>
										</a>
										<div class="product-actions center">
											<a href="{{ route('car.single', $car->id) }}" class="button add-to-cart-button rounded small">Book Now</a>
										</div>
									</div>
									<div class="product-details center">
										<h3 class="product-title text-truncate">
											<a href="#">
												{{$car->name}}
											</a>
										</h3>
										<span class="product-price price"><ins><span class="amount">PKR {{$car->rent}}.00 / per Day</span></ins></span>
										<div class="product-actions-mobile">
											<a href="{{ route('car.single', $car->id) }}" class="button add-to-cart-button rounded small">Book Now</a>
										</div>
									</div>
								</div>
								@endforeach
						</div>
					</div>
				</div>
				<!-- Product Grid End -->

				<!-- Pagination Section 3 -->
				<div class="section-block pagination-3">
					<div class="row">
						<div class="column width-12">
							<ul>
								<li><a class="pagination-previous icon-left-open" href="#"><span class="icon-left-open-mini"></span></a></li>
								<li><a class="current" href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a class="pagination-next disabled" href="#"><span class="icon-right-open-mini"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Pagination Section 3 End -->

			</div>
			<!-- Content End -->

			<!-- Footer -->
			@include('includes.footer')
			<!-- Footer End -->

		</div>
		</div>

@endsection