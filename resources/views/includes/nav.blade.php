<header class="header header-relative header-fixed-on-mobile nav-dark" data-bkg-threshold="100" data-sticky-threshold="0">
				<div class="header-inner">
					<div class="row nav-bar">
						<div class="column width-12 nav-bar-inner">
							<div class="logo">
								<div class="logo-inner">
									<a href="{{ url('/') }}"><img src="/assets/images/issem.png" alt="Issem Logo" /></a>
									<a href="{{ url('/') }}"><img src="/assets/images/issem-logo.png" alt="Issem Logo" /></a>
								</div>
							</div>
							<nav class="navigation nav-block secondary-navigation nav-right">
								<ul>
									<li>
										<!-- Button -->
										@if(Route::has('login'))
										<div class="v-align-middle">
											 @auth
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
                                                	<div class="column width-6 left">
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
                                            @else
                                            <a href="{{route('login')}}" class="button small rounded no-page-fade no-margin-bottom"><span class="icon-lock left"></span>Sign In</a>
                                            @if(Route::has('register'))
                                            <a href="{{route('register')}}" class="button small rounded no-page-fade no-margin-bottom">Register</a>
                                            @endif
                                            @endauth
										</div>
										@endif
									</li>
									<li class="aux-navigation hide">
										<!-- Aux Navigation -->
										<a href="#" class="navigation-show side-nav-show nav-icon">
											<span class="icon-menu"></span>
										</a>
									</li>
								</ul>
							</nav>
							<nav class="navigation nav-block primary-navigation nav-center sub-menu-indicator">
								<ul>
									<li>
										<a href="{{ url('/') }}">Home</a>
									</li>
									<li>
										<a href="{{ route('about') }}">About Us</a>
									<li>
									<li>
										<a href="{{ route('shop') }}">Shop</a>
									</li>
									<li>
										<a href="{{ route('contact') }}">Contact Us</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</header>