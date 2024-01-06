@extends('layouts.frontend.app')
@section('content')
<div class="page-content bg-white">
	
		<!-- Inner Banner -->
		<div class="banner-wraper">
			<div class="page-banner" style="background-image:url(frontend/images/banner/img1.jpg);">
				<div class="container">
					<div class="page-banner-entry text-center">
						<h1>Faq's</h1>
						<!-- Breadcrumb row -->
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.html"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Faq's</li>
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
			
		<!-- About us -->
		<section class="section-sp3">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="accordion ttr-accordion1" id="accordionRow1">
							<div class="accordion-item">
								<h2 class="accordion-header" id="heading1">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">How Doctor Can Ease Your Pain?</button>
								</h2>
								<div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionRow1">
									<div class="accordion-body">
										<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="heading2">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">How do I withdraw from a subject?</button>
								</h2>
								<div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionRow1">
									<div class="accordion-body">
										<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="heading3">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Understand Doctor Before You Regret?</button>
								</h2>
								<div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionRow1">
									<div class="accordion-body">
										<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="heading4">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">What types of systems do you support?</button>
								</h2>
								<div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionRow1">
									<div class="accordion-body">
										<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="heading5">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">We Teach You How To Feel Better?</button>
								</h2>
								<div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionRow1">
									<div class="accordion-body">
										<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="heading6">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">How Can I Contact You?</button>
								</h2>
								<div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionRow1">
									<div class="accordion-body">
										<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="accordion ttr-accordion1" id="accordionRow2">
							<div class="accordion-item">
								<h2 class="accordion-header" id="heading7">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">How do I withdraw from a subject?</button>
								</h2>
								<div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionRow2">
									<div class="accordion-body">
										<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="heading8">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8"> What’s a payment statement?</button>
								</h2>
								<div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionRow2">
									<div class="accordion-body">
										<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="heading9">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="true" aria-controls="collapse9">How Can I Contact You?</button>
								</h2>
								<div id="collapse9" class="accordion-collapse collapse show" aria-labelledby="heading9" data-bs-parent="#accordionRow2">
									<div class="accordion-body">
										<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="heading10">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">How do I withdraw from a subject?</button>
								</h2>
								<div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionRow2">
									<div class="accordion-body">
										<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="heading11">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">Understand Doctor Before You Regret?</button>
								</h2>
								<div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionRow2">
									<div class="accordion-body">
										<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="heading12">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">How Doctor Can Ease Your Pain?</button>
								</h2>
								<div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordionRow2">
									<div class="accordion-body">
										<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Blog -->
		<section class="section-area section-sp1 blog-area" style="background-image: url(frontend/images/background/line-bg2.png); background-position: center; background-size: cover;">
			<div class="container">
				<div class="heading-bx text-center">
					<h6 class="title-ext text-secondary">Latest News</h6>
					<h2 class="title">Our Latest News</h2>
				</div>
				<div class="swiper-container blog-slide">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="blog-card">
								<div class="post-media">
									<a href="blog-details.html"><img src="{{asset('frontend/images/blog/grid/pic1.jpg')}}" alt=""></a>
								</div>
								<div class="post-info">
									<ul class="post-meta">
										<li class="author"><a href="blog-details.html"><img src="{{asset('frontend/images/testimonials/pic1.jpg')}}" alt=""> John deo</a></li>
										<li class="date"><i class="far fa-calendar-alt"></i> 21 July 2021</li>
									</ul>
									<h5 class="post-title"><a href="blog-details.html">In this hospital there are special surgeon</a></h5>		
									<a href="blog-details.html" class="btn btn-outline-primary btn-sm">Read More <i class="btn-icon-bx fas fa-chevron-right"></i></a>		
								</div>
							</div>							
						</div>
						<div class="swiper-slide">
							<div class="blog-card">
								<div class="post-media">
									<a href="blog-details.html"><img src="{{asset('frontend/images/blog/grid/pic2.jpg')}}" alt=""></a>
								</div>
								<div class="post-info">
									<ul class="post-meta">
										<li class="author"><a href="blog-details.html"><img src="{{asset('frontend/images/testimonials/pic2.jpg')}}" alt=""> Peter Packer</a></li>
										<li class="date"><i class="far fa-calendar-alt"></i> 20 July 2021</li>
									</ul>
									<h5 class="post-title"><a href="blog-details.html">Can you get a diflucan prescription online?</a></h5>		
									<a href="blog-details.html" class="btn btn-outline-primary btn-sm">Read More <i class="btn-icon-bx fas fa-chevron-right"></i></a>			
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="blog-card">
								<div class="post-media">
									<a href="blog-details.html"><img src="{{asset('frontend/images/blog/grid/pic3.jpg')}}" alt=""></a>
								</div>
								<div class="post-info">
									<ul class="post-meta">
										<li class="author"><a href="blog-details.html"><img src="{{asset('frontend/images/testimonials/pic3.jpg')}}" alt=""> Sonar Moyna</a></li>
										<li class="date"><i class="far fa-calendar-alt"></i> 19 July 2021</li>
									</ul>
									<h5 class="post-title"><a href="blog-details.html">Why Is Skin Surgeon Considered Underrated</a></h5>		
									<a href="blog-details.html" class="btn btn-outline-primary btn-sm">Read More <i class="btn-icon-bx fas fa-chevron-right"></i></a>		
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="blog-card">
								<div class="post-media">
									<a href="blog-details.html"><img src="{{asset('frontend/images/blog/grid/pic4.jpg')}}" alt=""></a>
								</div>
								<div class="post-info">
									<ul class="post-meta">
										<li class="author"><a href="blog-details.html"><img src="{{asset('frontend/images/testimonials/pic4.jpg')}}" alt=""> Kalina Mollika</a></li>
										<li class="date"><i class="far fa-calendar-alt"></i> 18 July 2021</li>
									</ul>
									<h5 class="post-title"><a href="blog-details.html">Dental Care for Women is very important</a></h5>		
									<a href="blog-details.html" class="btn btn-outline-primary btn-sm">Read More <i class="btn-icon-bx fas fa-chevron-right"></i></a>		
								</div>
							</div>						
						</div>
						<div class="swiper-slide">
							<div class="blog-card">
								<div class="post-media">
									<a href="blog-details.html"><img src="{{asset('frontend/images/blog/grid/pic5.jpg')}}" alt=""></a>
								</div>
								<div class="post-info">
									<ul class="post-meta">
										<li class="author"><a href="blog-details.html"><img src="{{asset('frontend/images/testimonials/pic5.jpg')}}" alt=""> Michel </a></li>
										<li class="date"><i class="far fa-calendar-alt"></i> 17 July 2021</li>
									</ul>
									<h5 class="post-title"><a href="blog-details.html">Health Will Be A Thing Of The Past And Here's Why</a></h5>		
									<a href="blog-details.html" class="btn btn-outline-primary btn-sm">Read More <i class="btn-icon-bx fas fa-chevron-right"></i></a>		
								</div>
							</div>					
						</div>
					</div>
				</div>
			</div>
			<img class="pt-img1 animate1" src="{{asset('frontend/images/shap/trangle-orange.png')}}" alt="">
			<img class="pt-img2 animate2" src="{{asset('frontend/images/shap/square-dots-orange.png')}}" alt="">
			<img class="pt-img3 animate-rotate" src="{{asset('frontend/images/shap/line-circle-blue.png')}}" alt="">
			<img class="pt-img4 animate-wave" src="{{asset('frontend/images/shap/wave-blue.png')}}" alt="">
		</section>
		
	</div>
@endsection