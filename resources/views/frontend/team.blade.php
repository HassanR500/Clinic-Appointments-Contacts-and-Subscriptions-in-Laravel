@extends('layouts.frontend.app')
@section('content')
<div class="page-content bg-white">
	
		<!-- Inner Banner -->
		<div class="banner-wraper">
			<div class="page-banner" style="background-image:url(frontend/images/banner/img1.jpg);">
				<div class="container">
					<div class="page-banner-entry text-center">
						<h1>Our Team</h1>
						<!-- Breadcrumb row -->
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.html"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Our Team</li>
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
			
		<!-- Team -->
		<section class="section-area section-sp1 team-wraper">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="team-member mb-30">
							<div class="team-media">
								<img src="{{asset('frontend/images/team/member1.jpg')}}" alt="">
							</div>
							<div class="team-info">
								<div class="team-info-comntent">
									<h4 class="title">Dr. Addition Smith</h4>
									<span class="text-secondary">Dentist</span>
								</div>
								<ul class="social-media">
									<li><a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
									<li><a target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
									<li><a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="team-member mb-30">
							<div class="team-media">
								<img src="{{asset('frontend/images/team/member2.jpg')}}" alt="">
							</div>
							<div class="team-info">
								<div class="team-info-comntent">
									<h4 class="title">Dr. Mahfuz Riad</h4>
									<span class="text-secondary">Chiropractor</span>
								</div>
								<ul class="social-media">
									<li><a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
									<li><a target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
									<li><a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="team-member mb-30">
							<div class="team-media">
								<img src="{{asset('frontend/images/team/member3.jpg')}}" alt="">
							</div>
							<div class="team-info">
								<div class="team-info-comntent">
									<h4 class="title">Dr. David Benjamin</h4>
									<span class="text-secondary">Cardiologist</span>
								</div>
								<ul class="social-media">
									<li><a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
									<li><a target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
									<li><a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="team-member mb-30">
							<div class="team-media">
								<img src="{{asset('frontend/images/team/member4.jpg')}}" alt="">
							</div>
							<div class="team-info">
								<div class="team-info-comntent">
									<h4 class="title">Dr. Addition Smith</h4>
									<span class="text-secondary">Dentist</span>
								</div>
								<ul class="social-media">
									<li><a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
									<li><a target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
									<li><a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="team-member mb-30">
							<div class="team-media">
								<img src="{{asset('frontend/images/team/member5.jpg')}}" alt="">
							</div>
							<div class="team-info">
								<div class="team-info-comntent">
									<h4 class="title">Dr. Mahfuz Riad</h4>
									<span class="text-secondary">Chiropractor</span>
								</div>
								<ul class="social-media">
									<li><a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
									<li><a target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
									<li><a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="team-member mb-30">
							<div class="team-media">
								<img src="{{asset('frontend/images/team/member6.jpg')}}" alt="">
							</div>
							<div class="team-info">
								<div class="team-info-comntent">
									<h4 class="title">Dr. David Benjamin</h4>
									<span class="text-secondary">Cardiologist</span>
								</div>
								<ul class="social-media">
									<li><a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
									<li><a target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
									<li><a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<img class="pt-img1 animate1" src="{{asset('frontend/images/shap/trangle-orange.png')}}" alt="">
			<img class="pt-img2 animate2" src="{{asset('frontend/images/shap/square-dots-orange.png')}}" alt="">
			<img class="pt-img3 animate-rotate" src="{{asset('frontend/images/shap/line-circle-blue.png')}}" alt="">
			<img class="pt-img4 animate-wave" src="{{asset('frontend/images/shap/wave-blue.png')}}" alt="">
			<img class="pt-img5 animate-wave" src="{{asset('frontend/images/shap/circle-dots.png')}}" alt="">
		</section>
		
	</div>
@endsection