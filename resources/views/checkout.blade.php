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

				<!-- Intro Title Section 1 -->
				<div class="section-block intro-title-1 small">
					<div class="row">
						<div class="column width-6 offset-3">
							<div class="title-container">
								<div class="title-container-inner center left-on-mobile">
									<h1 class="mb-0">Checkout</h1>
									<p class="lead mb-0 mb-mobile-20">Verify Your Booking</p>
									<ul class="breadcrumb center left-on-mobile pd-60 mb-0">
										<li>
											<a href="{{ route('shop') }}">Shop</a>
										</li>
										<li>
											<a href="{{ route('car.single', $car->id) }}">Car</a>
										</li>
										<li>
											Checkout
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Intro Title Section 1 End -->

				<!-- Checkout -->
				<div class="section-block pt-0">
					<div class="row one-column-on-tablet">
						<div class="column width-6 offset-3">
							
							<div class="with-background">
					
								<!-- Cart Overview and Totals -->
								<div class="row">
									<div class="column width-12">
										<div class="cart-overview">
											<table class="table non-responsive rounded large mb-60">
												<thead>
													<tr>
														<th class="product-details">Car</th>
														<th class="product-subtotal right">Rent</th>
													</tr>
												</thead>
												<tbody>
													<tr class="cart-item">
														<td class="product-details">
															<span>
																<img src="{{$car->photo->file}}" class="rounded" width="60" alt=""/>
																<span>
																	<a href="{{ route('car.single', $car->id) }}" class="product-title">{{$car->name}}</a>
																	<span class="product-description"><em>{{$car->category->name}} class</em></span>
																</span>
															</span>
														</td>
														<td class="product-subtotal right">
															<span class="amount">PKR {{$car->rent}}.00</span>
														</td>
													</tr>
													<tr class="cart-order-tax right">
														<td colspan="2">Rental-Type : <span class="amount"> {{$type}}</span></td>
													</tr>
													<tr class="cart-order-tax right">
														<td colspan="2">Days: <span class="amount">{{$days}}</span></td>
													</tr>
													<tr class="cart-order-total right">
														<td colspan="2">Total: <span class="amount">PKR {{$totalAmount}}.00</span></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!-- Cart Overview and Totals End -->

								<div class="row full-width collapse">
									<div class="column width-12">
										<hr class="mb-20">
									</div>
								</div>
								@if($errors->any())
									@foreach($errors->all() as $error)
										<p style="color: red;">{{ $error }}</p>
									@endforeach
								@endif
								@if(Session::has('Oops'))
									<p style="color: red">{{session('Oops')}}</p>
								@endif
								<!-- Billing Form -->
								<div class="billing-details">
									<div class="billing-form-container">
										<form class="billing-form" action="{{ route('checkout.confirm') }}" method="post" novalidate>
											@csrf
										<!-- Billing Shipping Address -->
										<div class="row">
											<div class="column width-12">
												<div class="row">
													<div class="column width-6">
														<h4 class="">Address</h4>
													</div>
													<div class="column width-6 right left-on-mobile">
														<p class="mb-mobile-20"><a href="#">Returning Customer &rarr;</a></p>
													</div>
												</div>
												<div class="tabs button-nav rounded small bordered left">
													<div class="tab-panes">
														<div id="tabs-billing-address" class="active animate">
															<div class="tab-content">
																<div class="row">
																	<div class="column width-12">
																		<div class="row merged-form-elements">
																			<div class="column width-6">
																				<input type="text" name="firstName" class="form-fname form-element rounded medium" placeholder="First Name*" tabindex="4" required>
																			</div>
																			<div class="column width-6">
																				<input type="text" name="lastName" class="form-lname form-element rounded medium" placeholder="Last Name" tabindex="5" required>
																			</div>
																		</div>
																	</div>
																	<div class="column width-12">
																		<input type="email" name="email" class="form-email form-element rounded medium" placeholder="Email Address*" tabindex="6" required>
																	</div>
																	<div class="column width-12">
																		<input type="text" name="address" class="form-billing-address form-element rounded medium" placeholder="Billing Address*" tabindex="7" required>
																	</div>
																	<div class="column width-12">
																		<input type="text" name="contact" class="form-billing-address-2 form-element rounded medium" placeholder="Contact No.*" tabindex="8" required>
																	</div>
																	<div class="column width-12">
																		<div class="row merged-form-elements">
																			<div class="column width-8">
																				<input type="text" name="city" class="form-city form-element rounded medium" placeholder="City*" tabindex="10" required>
																			</div>
																			<div class="column width-4">
																				<input type="text" name="zip" class="form-zip-code form-element rounded medium" placeholder="Zip Code*" tabindex="11" required>
																				<input name="car_id" type="hidden" value="{{$car->id}}">
																				<input name="days" type="hidden" value="{{$days}}">
																				<input name="type" type="hidden" value="{{$type}}">
																				<input name="total" type="hidden" value="{{$totalAmount}}">
																				<input name="user_id" type="hidden" value="{{Auth::user()->id}}">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Billing Shipping Address End -->

										<!-- Confirm Booking -->
										<div class="row">
											<div class="column width-12 center">
												<input type="submit" value="Confirm Booking" class="form-submit button rounded medium bkg-theme bkg-hover-theme color-white color-hover-white mb-0" tabindex="27">
											</div>
										</div>
										<!-- Confirm Booking End -->

									</form>
									</div>
								</div>
								<!-- Billing Form End -->

							</div>

						</div>
					</div>
					<!-- Checkout End -->

				</div>

				<!-- CVV Modal -->
				<div id="cvv-modal" class="modal-dialog-inner section-block cart-overview pt-0 pb-30 background-none hide">
					<div class="modal-header bkg-green color-white">
						<h4 class="modal-header-title">Locating CVV</h4>
					</div>
					
					<div class="thumbnail">
						<img src="images/generic/cvv-credit-card.jpeg" width="300" alt="">
					</div>
					<p>The CVV of your credit card can be found at the back of your credit card, as indicated in the image above.</p>

					<!-- Aux Close -->
					<div class="row">
						<div class="column width-12 center">
							<a href="#" class="tml-aux-exit button rounded medium bkg-theme bkg-hover-theme color-white color-hover-white no-margin-right">Yup, got it!</a>
						</div>
					</div>
					<!-- Aux Close End -->

				</div>
				<!-- CVV Modal End -->
				
			</div>
			<!-- Content End -->

			<!-- Footer -->
			@include('includes.footer')
			<!-- Footer End -->

		</div>
	</div>

@endsection