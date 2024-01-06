@extends('layouts.frontend.app')

@section('content')
<div class="page-content bg-white">
	
		<!-- Inner Banner -->
		<div class="banner-wraper">
			<div class="page-banner" style="background-image:url(frontend/images/banner/img1.jpg);">
				<div class="container">
					<div class="page-banner-entry text-center">
						<h1>Blog Grid 3</h1>
						<!-- Breadcrumb row -->
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.html"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Blog Grid 3</li>
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
					<div class="col-xl-4 col-md-6">
						<div class="blog-card mb-30">
							<div class="post-media">
								<a href="blog-details.html"><img src="{{asset('frontend/images/blog/grid/pic1.jpg')}}" alt=""></a>
							</div>
							<div class="post-info">
								<ul class="post-meta">
									<li class="author"><a href="blog-details.html"><img src="{{asset('frontend/images/testimonials/pic1.jpg')}}" alt=""> John deo</a></li>
									<li class="date"><i class="far fa-calendar-alt"></i> 21 July 2021</li>
								</ul>
								<h4 class="post-title"><a href="blog-details.html">Dental Care for Women is very important</a></h4>		
								<a href="blog-details.html" class="btn btn-outline-primary btn-sm">Read More <i class="btn-icon-bx fas fa-chevron-right"></i></a>		
							</div>
						</div>							
					</div>
					<div class="col-xl-4 col-md-6">
						<div class="blog-card mb-30">
							<div class="post-media">
								<a href="blog-details.html"><img src="{{asset('frontend/images/blog/grid/pic2.jpg')}}" alt=""></a>
							</div>
							<div class="post-info">
								<ul class="post-meta">
									<li class="author"><a href="blog-details.html"><img src="{{asset('frontend/images/testimonials/pic2.jpg')}}" alt=""> Peter Packer</a></li>
									<li class="date"><i class="far fa-calendar-alt"></i> 20 July 2021</li>
								</ul>
								<h4 class="post-title"><a href="blog-details.html">In this hospital there are special surgeon</a></h4>		
								<a href="blog-details.html" class="btn btn-outline-primary btn-sm">Read More <i class="btn-icon-bx fas fa-chevron-right"></i></a>			
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6">
						<div class="blog-card mb-30">
							<div class="post-media">
								<a href="blog-details.html"><img src="{{asset('frontend/images/blog/grid/pic3.jpg')}}" alt=""></a>
							</div>
							<div class="post-info">
								<ul class="post-meta">
									<li class="author"><a href="blog-details.html"><img src="{{asset('frontend/images/testimonials/pic3.jpg')}}" alt=""> Sonar Moyna</a></li>
									<li class="date"><i class="far fa-calendar-alt"></i> 19 July 2021</li>
								</ul>
								<h4 class="post-title"><a href="blog-details.html">Why Is Skin Surgeon Considered Underrated</a></h4>		
								<a href="blog-details.html" class="btn btn-outline-primary btn-sm">Read More <i class="btn-icon-bx fas fa-chevron-right"></i></a>		
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6">
						<div class="blog-card mb-30">
							<div class="post-media">
								<a href="blog-details.html"><img src="{{asset('frontend/images/blog/grid/pic4.jpg')}}" alt=""></a>
							</div>
							<div class="post-info">
								<ul class="post-meta">
									<li class="author"><a href="blog-details.html"><img src="{{asset('frontend/images/testimonials/pic4.jpg')}}" alt=""> Kalina </a></li>
									<li class="date"><i class="far fa-calendar-alt"></i> 18 July 2021</li>
								</ul>
								<h4 class="post-title"><a href="blog-details.html">Understand Health Before You Regret</a></h4>		
								<a href="blog-details.html" class="btn btn-outline-primary btn-sm">Read More <i class="btn-icon-bx fas fa-chevron-right"></i></a>		
							</div>
						</div>							
					</div>
					<div class="col-xl-4 col-md-6">
						<div class="blog-card mb-30">
							<div class="post-media">
								<a href="blog-details.html"><img src="{{asset('frontend/images/blog/grid/pic5.jpg')}}" alt=""></a>
							</div>
							<div class="post-info">
								<ul class="post-meta">
									<li class="author"><a href="blog-details.html"><img src="{{asset('frontend/images/testimonials/pic5.jpg')}}" alt=""> Michel </a></li>
									<li class="date"><i class="far fa-calendar-alt"></i> 17 July 2021</li>
								</ul>
								<h4 class="post-title"><a href="blog-details.html">Health Will Be A Thing Of The Past And Here's Why.</a></h4>		
								<a href="blog-details.html" class="btn btn-outline-primary btn-sm">Read More <i class="btn-icon-bx fas fa-chevron-right"></i></a>		
							</div>
						</div>							
					</div>
					<div class="col-xl-4 col-md-6">
						<div class="blog-card mb-30">
							<div class="post-media">
								<a href="blog-details.html"><img src="{{asset('frontend/images/blog/grid/pic6.jpg')}}" alt=""></a>
							</div>
							<div class="post-info">
								<ul class="post-meta">
									<li class="author"><a href="blog-details.html"><img src="{{asset('frontend/images/testimonials/pic6.jpg')}}" alt=""> Peter Packer</a></li>
									<li class="date"><i class="far fa-calendar-alt"></i> 16 July 2021</li>
								</ul>
								<h4 class="post-title"><a href="blog-details.html">Can you get a diflucan prescription online?</a></h4>		
								<a href="blog-details.html" class="btn btn-outline-primary btn-sm">Read More <i class="btn-icon-bx fas fa-chevron-right"></i></a>			
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6">
						<div class="blog-card mb-30">
							<div class="post-media">
								<a href="blog-details.html"><img src="{{asset('frontend/images/blog/grid/pic7.jpg')}}" alt=""></a>
							</div>
							<div class="post-info">
								<ul class="post-meta">
									<li class="author"><a href="blog-details.html"><img src="{{asset('frontend/images/testimonials/pic1.jpg')}}" alt=""> Sonar Moyna</a></li>
									<li class="date"><i class="far fa-calendar-alt"></i> 15 July 2021</li>
								</ul>
								<h4 class="post-title"><a href="blog-details.html">Ten Gigantic Influences Of Health</a></h4>		
								<a href="blog-details.html" class="btn btn-outline-primary btn-sm">Read More <i class="btn-icon-bx fas fa-chevron-right"></i></a>		
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6">
						<div class="blog-card mb-30">
							<div class="post-media">
								<a href="blog-details.html"><img src="{{asset('frontend/images/blog/grid/pic8.jpg')}}" alt=""></a>
							</div>
							<div class="post-info">
								<ul class="post-meta">
									<li class="author"><a href="blog-details.html"><img src="{{asset('frontend/images/testimonials/pic2.jpg')}}" alt=""> Kalina</a></li>
									<li class="date"><i class="far fa-calendar-alt"></i> 14 July 2021</li>
								</ul>
								<h4 class="post-title"><a href="blog-details.html">Why Is Skin Surgeon Considered Underrated</a></h4>		
								<a href="blog-details.html" class="btn btn-outline-primary btn-sm">Read More <i class="btn-icon-bx fas fa-chevron-right"></i></a>		
							</div>
						</div>							
					</div>
					<div class="col-xl-4 col-md-6">
						<div class="blog-card mb-30">
							<div class="post-media">
								<a href="blog-details.html"><img src="{{asset('frontend/images/blog/grid/pic9.jpg')}}" alt=""></a>
							</div>
							<div class="post-info">
								<ul class="post-meta">
									<li class="author"><a href="blog-details.html"><img src="{{asset('frontend/images/testimonials/pic3.jpg')}}" alt=""> Michel</a></li>
									<li class="date"><i class="far fa-calendar-alt"></i> 13 July 2021</li>
								</ul>
								<h4 class="post-title"><a href="blog-details.html">Everyone need to go Dentist regularly</a></h4>		
								<a href="blog-details.html" class="btn btn-outline-primary btn-sm">Read More <i class="btn-icon-bx fas fa-chevron-right"></i></a>		
							</div>
						</div>							
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="pagination-bx text-center mb-30 clearfix">
							<ul class="pagination">
								<li class="previous"><a href="javascript:void(0);">Prev</a></li>
								<li class="active"><a href="javascript:void(0);">1</a></li>
								<li><a href="javascript:void(0);">2</a></li>
								<li><a href="javascript:void(0);">3</a></li>
								<li class="next"><a href="javascript:void(0);">Next</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
</div>
@endsection