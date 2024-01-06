@extends('layouts.frontend.app')
@section('content')
<div class="page-content bg-white">
	
		<!-- Inner Banner -->
		<div class="banner-wraper">
			<div class="page-banner" style="background-image:url(frontend/images/banner/img1.jpg);">
				<div class="container">
					<div class="page-banner-entry text-center">
						<h1>Service Details</h1>
						<!-- Breadcrumb row -->
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.html"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Service Details</li>
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
		<section class="section-area section-sp1">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mb-30">
						<div class="ttr-media mb-30">
							<img src="{{asset('frontend/images/services/pic1.jpg')}}" class="rounded" alt="">
						</div>
						<div class="clearfix">
							<div class="head-text mb-30">
								<h2 class="title mb-15">Why Medical Had Been So Popular Till</h2>
								<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
							</div>
							<div class="row align-items-center">
								<div class="col-md-6 mb-30">
									<ul class="list-check-squer mb-0">
										<li>Then along come two they</li>
										<li>That’s just a little bit more than</li>
										<li>Standard dummy text ever since</li>
										<li>Simply dummy text of the printing</li>
										<li>Make a type specimen book</li>
									</ul>
								</div>
								<div class="col-md-6 mb-30">
									<div class="skillbar-box mb-30">
										<h6 class="title">Advanced Technology</h6>
										<div class="skillbar appear" data-percent="96%">
											<p class="skillbar-bar"></p>
											<span class="skill-bar-percent">96%</span>
										</div>
									</div>
									<div class="skillbar-box mb-30">
										<h6 class="title">Certified Engineers</h6>
										<div class="skillbar appear" data-percent="79%">
											<p class="skillbar-bar"></p>
											<span class="skill-bar-percent">79%</span>
										</div>
									</div>
									<div class="skillbar-box mb-0">
										<h6 class="title">6 years Experience</h6>
										<div class="skillbar appear" data-percent="75%">
											<p class="skillbar-bar"></p>
											<span class="skill-bar-percent">75%</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix">
							<div class="head-text mb-30">
								<h4 class="title mb-10">Popular Questions</h4>
								<p class="mb-0">Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
							</div>
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
					</div>
					<div class="col-lg-4">
						<aside class="sticky-top pb-1">
							<div class="widget">
								<ul class="service-menu">
									<li class="active"><a href="service-detail.html"><span>Engine Diagnostics</span><i class="fa fa-angle-right"></i> </a></li>
									<li><a href="service-detail.html"><span>Lube Oil and Filters</span><i class="fa fa-angle-right"></i></a></li>
									<li><a href="service-detail.html"><span>Belts and Hoses</span><i class="fa fa-angle-right"></i></a></li>
									<li><a href="service-detail.html"><span>Air Conditioning</span><i class="fa fa-angle-right"></i></a></li>
									<li><a href="service-detail.html"><span>Brake Repair</span><i class="fa fa-angle-right"></i></a></li>
									<li><a href="service-detail.html"><span>Tire and Wheel Services</span><i class="fa fa-angle-right"></i></a></li>
								</ul>
							</div>
							<div class="widget">
								<div class="brochure-bx">
									<h5 class="title-head">Download</h5>
									<a href="javascript:void(0);" class="download-link">
										<img src="{{asset('frontend/images/icon/pdf.png')}}" alt="">
										<h5 class="title">Download our Brochures</h5>
										<span>Download</span>
									</a>
									<a href="javascript:void(0);" class="download-link">
										<img src="{{asset('frontend/images/icon/doc.png')}}" alt="">
										<h5 class="title">Our Company Details</h5>
										<span>Download</span>
									</a>
								</div>
							</div>
							
						</aside>
					</div>
				</div>
			</div>
		</section>
		
	</div>
@endsection