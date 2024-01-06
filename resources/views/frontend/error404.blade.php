@extends('layouts.frontend.app')
@section('content')
<div class="page-content bg-white">
	
		<!-- Inner Banner -->
		<div class="banner-wraper">
			<div class="page-banner" style="background-image:url(frontend/images/banner/img1.jpg);">
				<div class="container">
					<div class="page-banner-entry text-center">
						<h1>Page Not Found</h1>
						<!-- Breadcrumb row -->
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.html"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Page Not Found</li>
							</ul>
						</nav>
					</div>
				</div>
				<img class="pt-img1 animate-wave" src="{{asset('frontend/images/shap/wave-blue.png')}}" alt="">
				<img class="pt-img2 animate2" src="{{asset('frontend/images/shap/circle-dots.png')}}" alt="">
				<img class="pt-img3 animate-rotate" src="{{asset('frontend/images/shap/plus-blue.png')}}" alt="">
			</div>
			<!-- Breadcrumb row END -->
		</div>
		<!-- Inner Banner end -->
			
		<section class="section-area section-sp2 error-404">
			<div class="container">
				<div class="inner-content">
					<h2 class="error-title">4<span></span>4</h2>
					<h3 class="error-text">The Page you were looking for, couldn't be found.</h3>
					<p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
					<div class="clearfix">
						<a href="index-2.html" class="btn btn-primary m-r5">Back</a>
						<a href="index-2.html" class="btn btn-primary">Back To Home</a>
					</div>
				</div>
			</div>
		</section>
		
	</div>
@endsection