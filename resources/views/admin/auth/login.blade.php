@extends('layouts.master')
@section('content')

	<!-- Side Navigation Menu -->
	@include('includes.side_nav')
	<!-- Side Navigation Menu End -->

	<div class="wrapper">
		<div class="wrapper-inner">

			<!-- Content -->
			<div class="content clearfix">

				<!-- Login Section -->
				<div class="section-block replicable-content window-height bkg-heavy-rain-gradient">
					<div class="row flex v-align-middle">
						<div class="column width-6 offset-3">
							<div>
								<div class="logo mb-50">
									<div class="logo-inner center">
										<a href="#"><img src="/assets/images/issem.png" width="125" alt="Faulkner Logo" /></a>
									</div>
								</div>
								<div class="signup-box box rounded xlarge bkg-white shadow">
									<h3 class="center">Sign in to continue</h3>
									<div class="divider center mt-40 mb-50"><span class="bkg-white text-large">Admin Login</span></div>
									<div class="login-form-container">
										<form class="login-form" action="{{ route('admin.auth') }}" method="POST" novalidate>
											@csrf
											<div class="row">
												<div class="column width-12">
													<div class="field-wrapper">
														<label class="color-charcoal">Email:</label>
														<input type="email" name="email" value="{{ old('email') }}" class="form-username form-element rounded medium @error('email') is-invalid @enderror" placeholder="JohnDoe" required>
														@error('email')
						                                    <span class="invalid-feedback" role="alert">
						                                        <strong>{{ $message }}</strong>
						                                    </span>
						                                @enderror
													</div>
												</div>
												<div class="column width-12">
													<div class="field-wrapper">
														<label class="color-charcoal">Password:</label>
														<input type="password" name="password" class="form-password form-element rounded medium  @error('password') is-invalid @enderror" placeholder="••••••••" required>
														@error('password')
						                                    <span class="invalid-feedback" role="alert">
						                                        <strong>{{ $message }}</strong>
						                                    </span>
						                                @enderror
													</div>
												</div>
												<div class="column width-12">
													<div class="field-wrapper pt-0 pb-20">
													 	<input id="remember" class="form-element checkbox rounded" name="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox" required>
														<label for="checkbox-1" class="checkbox-label no-margins">Remember Me</label>
													</div>
												</div>
												<div class="column width-12 center">
													<input type="submit" value="Sign In" class="form-submit button rounded medium bkg-pink bkg-hover-theme bkg-focus-green color-white color-hover-white mb-0">
												</div>
											</div>
										</form>
										<div class="form-response show"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Login Section End -->

			</div>
			<!-- Content End -->

		</div>
	</div>

@endsection