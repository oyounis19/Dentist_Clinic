<!DOCTYPE html>
<html lang="en" class="side-panel">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Dentist | @yield('title')</title>

		<meta name="keywords" content="WebSite Template" />
		<meta name="description" content="Porto - Multipurpose Website Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="Image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{url('vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{url('vendor/animate/animate.compat.css')}}">
		<link rel="stylesheet" href="{{url('vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{url('vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{url('vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{url('vendor/magnific-popup/magnific-popup.min.css')}}">
		<link rel="stylesheet" href="{{url('vendor/twentytwenty/css/twentytwenty.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{url('css/theme.css')}}">
		<link rel="stylesheet" href="{{url('css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{url('css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{url('css/theme-shop.css')}}">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="{{url('css/demos/demo-dentist.css')}}">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{url('css/skins/skin-dentist.css')}}">

		<!-- Theme Custom CSS -->
		{{-- <link rel="stylesheet" href="{{url('css/custom.css')}}"> --}}

		<!-- Head Libs -->
		<script src="{{url('vendor/modernizr/modernizr.min.js')}}"></script>

	</head>
	<body data-plugin-page-transition>
		<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}" style="height: 104px;">
				<div class="header-body">
					<div class="header-container container" style="height: 100px;">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo" style="width: 100px; height: 48px;">
										<a href="{{route('home')}}">
											<img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" src="{{url('img/logo-default-slim.png')}}">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li>
														<a href="{{route('home')}}" class="nav-link @yield('home_nav_active')">
															Home
														</a>
													</li>
													<li class="dropdown">
														<a href="{{route('services')}}" class="nav-link dropdown-toggle @yield('services_nav_active')">Services</a>
														<ul class="dropdown-menu">
															<li><a href="{{route('services')}}" class="dropdown-item">Overview</a></li>
															<li><a href="{{route('service.exams')}}" class="dropdown-item">Dental Exams</a></li>
															<li><a href="{{route('service.cleaning')}}" class="dropdown-item">Dental Cleaning</a></li>
															<li><a href="{{route('service.tooth-extraction')}}" class="dropdown-item">Tooth Extraction</a></li>
															<li><a href="{{route('service.root-canal')}}" class="dropdown-item">Root Canal</a></li>
														</ul>
													</li>
													<li>
														<a class="nav-link @yield('about_nav_active')" href="{{route('about')}}">
															About
														</a>
													</li>
                                                    <li>
														<a class="nav-link @yield('gallery_nav_active')" href="{{route('gallery')}}">
															Gallery
														</a>
													</li>
													<li>
														<a class="nav-link @yield('contact_nav_active')" href="{{route('contact')}}">
															Contact
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
                                    @if (!Auth::check())
                                        <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                            <div class="header-nav-feature header-nav-features-user d-inline-flex mx-2 pe-2 signin" id="headerAccount">
                                                <a href="#" class="header-nav-features-toggle" aria-label="">
                                                    <i class="far fa-user"></i> Sign In
                                                </a>
                                                <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed header-nav-features-dropdown-force-right" id="headerTopUserDropdown">
                                                    <div class="signin-form">
                                                        <h5 class="text-uppercase mb-4 font-weight-bold text-3">Sign In</h5>
                                                        <form method="POST" action="{{route('login')}}">
                                                            @csrf
                                                            @if (session('error'))
                                                                <div class="alert alert-danger">
                                                                    {{ session('error') }}
                                                                </div>
                                                            @endif

                                                            <div class="form-group">
                                                                <label class="form-label mb-1 text-2 opacity-8">Email address*</label>
                                                                <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" >
                                                                @error('promocode')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label mb-1 text-2 opacity-8">Password*</label>
                                                                <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" >
                                                                @error('password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <div class="row pb-2">
                                                                <div class="form-group form-check col-lg-6 ps-1">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="rememberMeCheck" name="rmbr" value="1">
                                                                        <label class="form-label custom-control-label text-2" for="rememberMeCheck">Remember Me</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="actions">
                                                                <div class="row">
                                                                    <div class="col d-flex justify-content-end">
                                                                        <button class="btn btn-primary" href="#">Login</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="extra-actions">
                                                                <p>Don't have an account yet? <a href="#" id="headerSignUp" class="text-uppercase text-1 font-weight-bold text-color-dark">Sign Up</a></p>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="signup-form">
                                                        <h5 class="text-uppercase mb-4 font-weight-bold text-3">Sign Up</h5>
                                                        <form action="{{route('register')}}" method="POST">
                                                            @csrf

                                                            <div class="form-group">
                                                                <label class="form-label mb-1 text-2 opacity-8">Name*</label>
                                                                <input type="text" class="form-control form-control-lg" name="name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label mb-1 text-2 opacity-8">Email address*</label>
                                                                <input type="email" class="form-control form-control-lg" name="email">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label mb-1 text-2 opacity-8">Password*</label>
                                                                <input type="password" class="form-control form-control-lg" name="password">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label mb-1 text-2 opacity-8">Re-enter Password*</label>
                                                                <input type="password" class="form-control form-control-lg" name="password_confirmation">
                                                            </div>
                                                            <div class="actions">
                                                                <div class="row">
                                                                    <div class="col d-flex justify-content-end">
                                                                        <button type="submit" class="btn btn-primary">Register</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="extra-actions">
                                                                <p>Already have an account? <a href="#" id="headerSignIn" class="text-uppercase text-1 font-weight-bold text-color-dark">Log In</a></p>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                            <div class="header-nav-feature header-nav-features-user header-nav-features-user-logged d-inline-flex mx-2 pe-2" id="headerAccount">
                                                <a href="#" class="header-nav-features-toggle" aria-label="">
                                                    <i class="far fa-user"></i> {{Auth::user()->name}}
                                                </a>
                                                <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed header-nav-features-dropdown-force-right" id="headerTopUserDropdown">
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <p class="mb-0 pb-0 text-2 line-height-1 pt-1">Hello,</p>
                                                            <p><strong class="text-color-dark text-4">{{Auth::user()->name}}</strong></p>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="d-flex justify-content-end">
                                                                <div class="rounded-circle" style="width: 40px; height: 40px; background-color: #007bff; color: #fff; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                                                                    {{ substr(Auth::user()->name, 0, 1) }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <ul class="nav nav-list-simple flex-column text-3">
                                                                <li class="nav-item"><a class="nav-link" href="{{route('appointments', Auth::user()->id)}}">My Appointments</a></li>
                                                                <li class="nav-item"><a class="nav-link border-bottom-0" href="{{route('logout')}}">Log Out</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			@yield('content')

            @stack('scripts')

			<footer id="footer" class="border-0 mt-0">
				<div class="container pt-5">
					<div class="row text-center text-lg-start font-weight-semi-bold text-color-light text-4 py-3">
						<div class="col-lg-6 mb-5 mb-lg-0">
							<i class="icon-location-pin icons text-color-tertiary text-6 p-relative top-6 me-1"></i> 99 Porto St, Los Angeles, CA 10000
						</div>
						<div class="col-lg-6 text-lg-end">
							<span class="d-block d-lg-inline-block mb-3 mb-lg-0 me-lg-4">
								<i class="icon-envelope icons text-color-tertiary text-6 p-relative top-7 me-1"></i> <a href="mailto:mail@domain.com" class="text-color-light text-color-hover-tertiary text-decoration-none">mail@domain.com</a>
							</span>
							<span class="d-block d-lg-inline-block">
								<i class="icon-phone icons text-color-tertiary text-6 p-relative top-7 me-1"></i> <a href="tel:123-456-7890" class="text-color-light text-color-hover-tertiary text-decoration-none">123-456-7890</a>
							</span>
						</div>
					</div>
				</div>
				<div class="container pb-5">
					<div class="row text-center text-md-start py-4 my-5">
						<div class="col-md-6 col-lg-3 align-self-center text-center text-md-start text-lg-center mb-5 mb-lg-0">
							<a href="demo-auto-services.html" class="text-decoration-none">
								<img src="img/demos/auto-services/logo-light.png" class="img-fluid" alt="" />
							</a>
						</div>
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">About Us</h5>
							<ul class="list list-unstyled">
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5">ADDRESS</span>
									<a href="demo-auto-services-contact.html#get-direction" class="text-color-light font-weight-medium text-3-5">GET DIRECTIONS</a>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5 mb-1">PHONE</span>
									<ul class="list list-unstyled font-weight-light text-3-5 mb-0">
										<li class="text-color-light line-height-3 mb-0">
											Emergency: <a href="tel:+1234567890" class="text-decoration-none text-color-light text-color-hover-default">+123 4567 890</a>
										</li>
										<li class="text-color-light line-height-3 mb-0">
											Appointments: <a href="tel:+1234567890" class="text-decoration-none text-color-light text-color-hover-default">+123 4567 890</a>
										</li>
									</ul>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5">EMAIL</span>
									<a href="mailto:mail@example.com" class="text-decoration-none font-weight-light text-3-5 text-color-light text-color-hover-default">mail@example.com</a>
								</li>
							</ul>
							<ul class="social-icons social-icons-medium">
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
								</li>
								<li class="social-icons-twitter mx-2">
									<a href="http://www.twitter.com/" class="no-footer-css" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
								</li>
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-2 mb-5 mb-md-0">
							<h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">Our Services</h5>
							<ul class="list list-unstyled mb-0">
								<li class="mb-0"><a href="{{route('service.exams')}}">Dental Exams</a></li>
								<li class="mb-0"><a href="{{route('service.cleaning')}}">Dental Cleaning</a></li>
								<li class="mb-0"><a href="{{route('service.tooth-extraction')}}">Tooth Extraction</a></li>
								<li class="mb-0"><a href="{{route('service.root-canal')}}">Root Canal</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-3 offset-lg-1">
							<h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">Opening Hours</h5>
							<ul class="list list-unstyled list-inline mb-0">
								<li>Mon - Fri: 6:00 am to 10:00 pm</li>
								<li>Saturday: 9:30 am to 1:00 pm</li>
								<li>Sunday: Closed</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<p class="text-center text-color-light opacity-5 text-3 mb-0">Porto Dentist © 2023. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</footer>
		</div>

        @yield('js')
		<!-- Vendor -->
		<script src="{{url('vendor/plugins/js/plugins.min.js')}}"></script>
		<script src="{{url('vendor/twentytwenty/js/jquery.event.move.js')}}"></script>
		<script src="{{url('vendor/twentytwenty/js/jquery.twentytwenty.js')}}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{url('js/theme.js')}}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{url('js/views/view.contact.js')}}"></script>

		<!-- Demo -->
		<script src="{{url('js/demos/demo-dentist.js')}}"></script>

		<!-- Theme Custom -->
		{{-- <script src="{{url('js/custom.js')}}"></script> --}}

		<!-- Theme Initialization Files -->
		<script src="{{url('js/theme.init.js')}}"></script>

	</body>
</html>
