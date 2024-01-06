<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from meditro.themetrades.com/html/demo/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Aug 2023 19:04:43 GMT -->
<head>
	
	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- OG -->
	<meta name="robots" content="index, follow">
	<meta name="keywords" content="Clinic, Medical Health Center, Health Dental, Creative, Healthcare, Industry, Lifestyle, Blogging, meditation, Design" />
	<meta name="author" content="ThemeTrades" />
	<meta name="description" content="MediTro is a Fully Creative Mobile Responsive HTML Template. It is designed specifically for Clinic, Medical Health Center, Health Dental, Creative, Healthcare, Industry, Lifestyle, Blogging, meditation, Design" />
	
	<meta property="og:url" content="index.html"/>
	<meta property="og:site_name" content="MediTro - Doctor, Medical & Healthcare HTML Template"/>
	<meta property="og:type" content="website"/>
	<meta property="og:locale" content="en_us"/>
	<meta property="og:title" content="MediTro - Doctor, Medical & Healthcare HTML Template" />
	<meta property="og:description" content="MediTro is a Fully Creative Mobile Responsive HTML Template. It is designed specifically for Clinic, Medical Health Center, Health Dental, Creative, Healthcare, Industry, Lifestyle, Blogging, meditation, Design"/>
	<meta property="og:image" content="preview.png"/>
	
	<meta name="twitter:card" content="summary"/>
	<meta name="twitter:url" content="index.html"/>
	<meta name="twitter:creator" content="@themetrades"/>
	<meta name="twitter:title" content="MediTro - Doctor, Medical & Healthcare HTML Template"/>
	<meta name="twitter:description" content="MediTro is a Fully Creative Mobile Responsive HTML Template. It is designed specifically for Clinic, Medical Health Center, Health Dental, Creative, Healthcare, Industry, Lifestyle, Blogging, meditation, Design"/>
	
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="{{asset('frontend/images/favicon.png')}}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/images/favicon.png')}}" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>Mediplus Specialized Clinic</title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/bootstrap-select/css/bootstrap-select.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendor/swiper/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
	
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

</head>
<body>

	<div id="loading-icon-bx">
		<div class="loading-inner">
			<div class="load-one"></div>
			<div class="load-two"></div>
			<div class="load-three"></div>
		</div>
	</div>

	<!-- Login -->
	<div class="section-area account-wraper2">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-5 col-lg-6 col-md-8">
					<div class="appointment-form form-wraper">
						<div class="logo">
                        <a href="{{url('/')}}"><img src="{{asset('frontend/images/mediplus.png')}}" alt=""></a>
						</div>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="formLogin" role="tabpanel" aria-labelledby="formLogin">
								<form action="{{route('login')}}" method = "POST">
                                    @csrf
									<div class="form-group">
										<input type="email" name = "email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
									</div>
									<div class="form-group">
										<input type="password" name = "password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
									</div>
									<div class="form-group">
										<button type="submit" class="btn mb-30 btn-lg btn-primary w-100">login</button>
										
									</div>
									<div class="form-group">
									<a href="#formForget" data-toggle="tab">Forgot Password</a>
									@if (Route::has('register'))
										<li class="nav-item">
											<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
										</li>
									@endif
									</div>								
								</form>
							</div>
							<div class="tab-pane fade" id="formForget" role="tabpanel" aria-labelledby="formForget">
								<div class="tab-pane fade show active" id="login-home" role="tabpanel" aria-labelledby="login-home">
									<form action="#">
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Password">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" placeholder="New Password">
										</div>						
										<div class="form-group">
											<button type="button" class="btn btn-primary w-100 radius-xl">Submit</button>
										</div>													
										<div class="text-center mt-40">						
											<p class="mt-0">Click below to login</p>
											<a class="btn btn-lg btn-secondary w-100" data-toggle="tab" href="#formLogin">Login</a>
										</div>	
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>					
		</div>
	</div>
	
<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('frontend/vendor/swiper/swiper.min.js')}}"></script>
<script src="{{asset('frontend/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('frontend/js/functions.js')}}"></script>
<script src="{{asset('frontend/js/contact.js')}}"></script>
</body>

<!-- Mirrored from meditro.themetrades.com/html/demo/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Aug 2023 19:04:43 GMT -->
</html>

