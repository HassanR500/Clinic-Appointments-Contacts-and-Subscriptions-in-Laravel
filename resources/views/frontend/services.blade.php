@extends('layouts.frontend.app')
@section('content')
<div class="page-content bg-white">
	
		<!-- Inner Banner -->
		<div class="banner-wraper">
			<div class="page-banner" style="background-image:url(frontend/images/banner/img1.jpg);">
				<div class="container">
					<div class="page-banner-entry text-center">
						<h1>Services</h1>
						<!-- Breadcrumb row -->
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.html"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Services</li>
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
			
		<!-- service -->
		<section class="section-area section-sp1">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 mb-30">
						<div class="feature-container feature-bx2 feature1">
							<div class="feature-box-xl mb-20">
								<span class="icon-cell">
									<svg enable-background="new 0 0 512 512" height="80" viewBox="0 0 512 512" width="80" xmlns="http://www.w3.org/2000/svg">	
										<path d="m218.578 512c-29.085 0-52.748-23.656-52.748-52.734v-102.154c0-5.522 4.477-10 10-10s10 4.478 10 10v102.153c0 18.05 14.69 32.734 32.748 32.734s32.748-14.685 32.748-32.734v-116.18c0-20.084 16.343-36.423 36.432-36.423s36.432 16.339 36.432 36.423v59.66c0 24.042 19.567 43.602 43.619 43.602s43.619-19.56 43.619-43.602v-170.256c0-5.522 4.477-10 10-10s10 4.478 10 10v170.256c0 35.07-28.54 63.602-63.619 63.602s-63.619-28.531-63.619-63.602v-59.66c0-9.056-7.371-16.423-16.432-16.423s-16.432 7.367-16.432 16.423v116.181c0 29.078-23.663 52.734-52.748 52.734z" fill="#020288"/>
										<ellipse cx="175.83" cy="336.898" fill="#b2f0fb" rx="30.275" ry="30.265"/>
										<path d="m317.745 103.718h-10.12v-78.989c0-5.522-4.477-10-10-10h-55.743v-4.729c0-5.522-4.477-10-10-10s-10 4.478-10 10v29.456c0 5.522 4.477 10 10 10s10-4.478 10-10v-4.728h45.743v68.989h-10.119c-5.523 0-10 4.478-10 10v47.531c0 50.532-41.126 91.644-91.677 91.644-50.55 0-91.676-41.111-91.676-91.644v-47.531c0-5.522-4.477-10-10-10h-10.119v-68.988h45.743v4.728c0 5.522 4.477 10 10 10s10-4.478 10-10v-29.457c0-5.522-4.477-10-10-10s-10 4.478-10 10v4.729h-55.743c-5.523 0-10 4.478-10 10v78.989h-10.119c-5.523 0-10 4.478-10 10v47.531c0 83.741 68.149 151.869 151.915 151.869s151.915-68.128 151.915-151.869v-47.531c0-5.523-4.477-10-10-10zm-10 57.531c0 72.713-59.177 131.869-131.915 131.869s-131.915-59.156-131.915-131.869v-37.531h20.238v37.531c0 61.561 50.098 111.644 111.676 111.644s111.677-50.083 111.677-111.644v-37.531h20.239z" fill="#020288"/>
										<ellipse cx="421.426" cy="170.539" fill="#b2f0fb" rx="66.659" ry="66.637"/>
										<path d="m421.427 202.534c-17.646 0-32.001-14.353-32.001-31.995s14.356-31.994 32.001-31.994 32.001 14.353 32.001 31.994c0 17.643-14.356 31.995-32.001 31.995zm0-43.989c-6.618 0-12.001 5.381-12.001 11.994 0 6.614 5.384 11.995 12.001 11.995s12.001-5.381 12.001-11.995c0-6.613-5.384-11.994-12.001-11.994z" fill="#020288"/>
									</svg>
								</span> 
							</div>
							<div class="icon-content">
								<h3 class="ttr-title">Diagnostics</h3>
								<p>Phasellus venenatis porta rhoncus. Integer et viverra felis.</p>
								<a href="{{url('servicedetail')}}" class="btn btn-primary light">View More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mb-30">
						<div class="feature-container feature-bx2 feature2">
							<div class="feature-box-xl mb-20">
								<span class="icon-cell">
									<svg enable-background="new 0 0 512 512" height="80" viewBox="0 0 512 512" width="80" xmlns="http://www.w3.org/2000/svg">
										<g fill="#020288">
											<path d="m311.734 208.706h-25.074v-25.083c0-5.522-4.478-10-10-10h-41.32c-5.523 0-10 4.478-10 10v25.083h-25.074c-5.523 0-10 4.478-10 10v41.33c0 5.522 4.477 10 10 10h25.074v25.082c0 5.522 4.477 10 10 10h41.32c5.522 0 10-4.478 10-10v-25.082h25.074c5.522 0 10-4.478 10-10v-41.33c0-5.522-4.477-10-10-10zm-10 41.33h-25.074c-5.522 0-10 4.478-10 10v25.082h-21.32v-25.082c0-5.522-4.477-10-10-10h-25.074v-21.33h25.074c5.523 0 10-4.478 10-10v-25.083h21.32v25.083c0 5.522 4.478 10 10 10h25.074z"/>
											<path d="m330.566 120.217v-51.05c0-5.522-4.478-10-10-10h-14.759v-49.167c0-5.522-4.478-10-10-10h-79.616c-5.523 0-10 4.478-10 10v49.167h-14.758c-5.523 0-10 4.478-10 10v51.049c-37.43 23.089-62.429 64.475-62.429 111.589v270.195c0 5.522 4.477 10 10 10h253.992c5.522 0 10-4.478 10-10v-270.194c0-47.115-24.999-88.501-62.43-111.589zm-104.374-100.217h19.808v2.559c0 5.522 4.477 10 10 10 5.522 0 10-4.478 10-10v-2.559h19.808v39.167h-59.616zm-24.759 59.167h109.133v30.965c-15.03-6.023-31.427-9.338-48.583-9.338h-11.967c-17.156 0-33.552 3.315-48.583 9.338zm171.563 412.833h-233.992v-260.194c0-61.212 49.8-111.012 111.012-111.012h11.967c61.213 0 111.013 49.8 111.013 111.012z"/>
											<path d="m181.465 350.096h149.069v102.32h-149.069z" fill="#a4fcc4"/>
										</g>
									</svg>
								</span> 
							</div>
							<div class="icon-content">
								<h3 class="ttr-title">Treatment</h3>
								<p>Phasellus venenatis porta rhoncus. Integer et viverra felis.</p>
								<a href="{{url('servicedetail')}}" class="btn btn-primary light">View More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mb-30">
						<div class="feature-container feature-bx2 feature3">
							<div class="feature-box-xl mb-20">
								<span class="icon-cell">
									<svg enable-background="new 0 0 512 512" height="80" viewBox="0 0 512 512" width="80" xmlns="http://www.w3.org/2000/svg">
										<path d="m318.39 278.299h-39.263v-39.262h-46.254v39.262h-39.263v46.255h39.263v39.263h46.254v-39.263h39.263z" fill="#ffbdbc"/>
										<g fill="#020288">
											<path d="m256 164.444c-75.533 0-136.983 61.45-136.983 136.982s61.45 136.983 136.983 136.983 136.983-61.45 136.983-136.982-61.45-136.983-136.983-136.983zm0 253.965c-64.504 0-116.983-52.479-116.983-116.982s52.479-116.983 116.983-116.983 116.983 52.479 116.983 116.982-52.479 116.983-116.983 116.983z"/>
											<path d="m470.541 112.15h-100.492v-50.962c0-20.205-16.429-36.643-36.623-36.643h-154.853c-20.194 0-36.623 16.438-36.623 36.643v50.963h-100.491c-22.86-.001-41.459 18.598-41.459 41.458v292.387c0 22.86 18.599 41.459 41.459 41.459h429.082c22.86 0 41.459-18.599 41.459-41.459v-292.387c0-22.86-18.599-41.459-41.459-41.459zm-34.541 20v36.68h-50.511v-36.68zm-274.049-70.962c0-9.177 7.457-16.643 16.623-16.643h154.854c9.166 0 16.623 7.466 16.623 16.643v50.963h-24.765v-32.806c0-5.522-4.477-10-10-10h-118.57c-5.523 0-10 4.478-10 10v32.806h-24.765zm44.765 50.962v-22.805h98.568v22.806h-98.568zm-80.205 20v36.68h-50.511v-36.68zm365.489 313.846c0 11.833-9.626 21.459-21.459 21.459h-429.082c-11.833 0-21.459-9.626-21.459-21.459v-292.387c0-11.833 9.626-21.459 21.459-21.459h14.541v46.68c0 5.522 4.477 10 10 10h70.511c5.523 0 10-4.478 10-10v-46.68h218.979v46.68c0 5.522 4.477 10 10 10h70.51c5.523 0 10-4.478 10-10v-46.68h14.541c11.833 0 21.459 9.626 21.459 21.459z"/>
										</g>
									</svg>
								</span> 
							</div>
							<div class="icon-content">
								<h3 class="ttr-title">Surgery</h3>
								<p>Phasellus venenatis porta rhoncus. Integer et viverra felis.</p>
								<a href="{{url('servicedetail')}}" class="btn btn-primary light">View More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mb-30">
						<div class="feature-container feature-bx2 feature2">
							<div class="feature-box-xl mb-20">
								<span class="icon-cell">
									<svg enable-background="new 0 0 512 512" height="85" viewBox="0 0 512 512" width="85" xmlns="http://www.w3.org/2000/svg">
										<path d="m509.82 327.343-21.991-27.599c-1.896-2.381-4.775-3.768-7.82-3.768h-7.712l-74.353-93.385c-1.897-2.383-4.777-3.771-7.823-3.771h-22.862v-22.765c0-19.014-15.43-34.483-34.396-34.483h-97.678v-4.552c0-28.428-23.127-51.555-51.555-51.555s-51.555 23.127-51.555 51.555v4.552h-97.678c-18.966 0-34.397 15.47-34.397 34.484v251.241c0 5.523 4.478 10 10 10h22.279c4.628 22.794 24.758 39.999 48.815 39.999s44.186-17.205 48.814-39.999h250.37c4.628 22.794 24.757 39.999 48.814 39.999s44.187-17.205 48.815-39.999h24.093c5.522 0 10-4.477 10-10v-93.722c0-2.264-.769-4.461-2.18-6.232zm-124.52-108.523 61.432 77.156h-79.474v-77.156zm-233.226-81.799c0-17.399 14.155-31.555 31.555-31.555s31.555 14.156 31.555 31.555v4.552h-63.109v-4.552zm-132.074 39.035c0-7.986 6.459-14.483 14.397-14.483h298.464c7.938 0 14.396 6.497 14.396 14.483v241.241h-217.35c-4.628-22.794-24.757-39.999-48.814-39.999s-44.187 17.205-48.815 39.999h-12.278zm61.094 281.24c-16.44 0-29.816-13.458-29.816-29.999s13.376-29.999 29.816-29.999 29.815 13.458 29.815 29.999-13.375 29.999-29.815 29.999zm347.998 0c-16.44 0-29.815-13.458-29.815-29.999s13.375-29.999 29.815-29.999 29.816 13.458 29.816 29.999-13.376 29.999-29.816 29.999zm62.908-39.999h-14.093c-4.628-22.794-24.758-39.999-48.815-39.999s-44.186 17.205-48.814 39.999h-13.02v-101.321h107.932l16.81 21.096z"/>
										<path d="m183.629 66.808c5.522 0 10-4.477 10-10v-12.104c0-5.523-4.478-10-10-10s-10 4.477-10 10v12.104c0 5.523 4.477 10 10 10z"/>
										<path d="m236.764 94.969c1.934 1.829 4.404 2.736 6.871 2.736 2.652 0 5.299-1.048 7.266-3.127l10.626-11.229c3.796-4.011 3.621-10.341-.391-14.137s-10.341-3.621-14.137.391l-10.626 11.229c-3.796 4.012-3.621 10.341.391 14.137z"/>
										<path d="m116.358 94.579c1.967 2.078 4.613 3.126 7.266 3.126 2.467 0 4.938-.907 6.871-2.737 4.012-3.796 4.187-10.125.391-14.137l-10.627-11.229c-3.796-4.011-10.126-4.187-14.137-.39-4.012 3.796-4.187 10.125-.391 14.137z"/>
										<path d="m90.896 216.592h184.372v113.287h-184.372z" fill="#b2f0fb"/>
									</svg>
								</span> 
							</div>
							<div class="icon-content">
								<h3 class="ttr-title">Emergency</h3>
								<p>Phasellus venenatis porta rhoncus. Integer et viverra felis.</p>
								<a href="{{url('servicedetail')}}" class="btn btn-primary light">View More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mb-30">
						<div class="feature-container feature-bx2 feature3">
							<div class="feature-box-xl mb-20">
								<span class="icon-cell">
									<svg enable-background="new 0 0 512 512" height="85" viewBox="0 0 512 512" width="85" xmlns="http://www.w3.org/2000/svg">	
										<path d="m181.049 229.112-76.87 76.971c-14.045 14.07-14.045 36.883 0 50.953l50.881 50.974c14.045 14.07 36.815 14.07 50.86 0l178.611-178.899h-203.482z" fill="#e2c4ff"/>
										<path d="m495.277 81.339c-10.57-10.578-24.625-16.403-39.574-16.403-3.325 0-6.605.288-9.813.853 3.065-17.397-2.103-35.975-15.505-49.387-10.57-10.577-24.624-16.402-39.574-16.402s-29.003 5.825-39.573 16.402c-21.816 21.83-21.816 57.352 0 79.182 2.71 2.712 5.648 5.111 8.772 7.18l-18.689 18.716-52.105-52.184c-3.902-3.907-10.233-3.912-14.142-.012-3.908 3.902-3.914 10.234-.011 14.143l18.64 18.67-196.602 196.922c-17.56 17.593-17.902 46.002-1.029 64.017l-16.422 16.452c-3.896 3.903-3.896 10.226 0 14.129l12.383 12.406-88.75 88.913c-3.901 3.909-3.896 10.24.013 14.142 1.953 1.948 4.509 2.922 7.065 2.922 2.562 0 5.125-.979 7.078-2.936l88.724-88.887 12.357 12.38c1.876 1.88 4.422 2.936 7.078 2.936s5.202-1.056 7.078-2.936l16.396-16.426c8.547 8.028 19.644 12.432 31.418 12.432 12.28 0 23.825-4.79 32.506-13.487l196.588-196.91 18.617 18.648c1.953 1.956 4.515 2.935 7.077 2.935 2.557 0 5.113-.975 7.065-2.923 3.908-3.902 3.914-10.234.011-14.143l-52.155-52.24 18.732-18.758c2.054 3.126 4.453 6.09 7.198 8.836 10.57 10.577 24.624 16.402 39.573 16.402s29.003-5.825 39.574-16.402c21.817-21.831 21.817-57.352.001-79.182zm-129.892-50.8c6.792-6.796 15.822-10.539 25.426-10.539s18.635 3.743 25.427 10.539c13.407 13.416 13.997 34.875 1.773 49.001-.638.583-1.266 1.183-1.881 1.799-.616.617-1.214 1.245-1.795 1.882-6.533 5.671-14.791 8.766-23.524 8.766-9.604 0-18.634-3.743-25.427-10.54-14.025-14.035-14.025-36.873.001-50.908zm-239.787 380.799-24.74-24.786 9.327-9.344 14.287 14.313 10.454 10.473zm73.244-10.392c-4.903 4.912-11.42 7.617-18.352 7.617s-13.449-2.705-18.353-7.617l-50.881-50.975c-10.134-10.152-10.134-26.672-.001-36.823l196.578-196.898 87.616 87.767zm177.227-244.657-20.619-20.654 24.634-24.669c3.498.676 7.086 1.021 10.727 1.021 3.325 0 6.606-.288 9.813-.853-1.189 6.75-1.139 13.678.151 20.413zm105.062-9.905c-6.792 6.796-15.823 10.539-25.427 10.539s-18.635-3.743-25.427-10.539c-13.407-13.416-13.998-34.875-1.773-49.001.638-.583 1.266-1.183 1.881-1.799.617-.617 1.215-1.246 1.797-1.884 6.532-5.67 14.789-8.764 23.521-8.764 9.604 0 18.635 3.743 25.427 10.54 14.026 14.035 14.026 36.873.001 50.908z" fill="#020288"/>
									</svg>
								</span> 
							</div>
							<div class="icon-content">
								<h3 class="ttr-title">Vaccine</h3>
								<p>Phasellus venenatis porta rhoncus. Integer et viverra felis.</p>
								<a href="{{url('servicedetail')}}" class="btn btn-primary light">View More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mb-30">
						<div class="feature-container feature-bx2 feature1">
							<div class="feature-box-xl mb-20">
								<span class="icon-cell">
									<svg enable-background="new 0 0 512 512" height="85" viewBox="0 0 512 512" width="85" xmlns="http://www.w3.org/2000/svg">
										<path d="m351.524 124.49h-37.907v-37.907h-44.657v37.907h-37.906v44.657h37.906v37.907h44.657v-37.907h37.907z" fill="#a4fcc4"/>
										<path d="m291.289 279.415c73.114 0 132.597-59.482 132.597-132.597s-59.483-132.596-132.597-132.596-132.598 59.482-132.598 132.596 59.484 132.597 132.598 132.597zm0-245.193c62.086 0 112.597 50.511 112.597 112.597s-50.511 112.597-112.597 112.597c-62.087 0-112.598-50.511-112.598-112.597s50.511-112.597 112.598-112.597z"/>
										<path d="m502 267.736c-32.668 0-59.245 26.577-59.245 59.245v13.605h-240.266v-19.048c0-23.625-19.221-42.846-42.846-42.846h-90.398v-17.584c0-32.668-26.577-59.245-59.245-59.245-5.522 0-10 4.478-10 10v275.914c0 5.522 4.478 10 10 10h49.245c5.522 0 10-4.478 10-10v-39.327h373.51v39.327c0 5.522 4.478 10 10 10h49.245c5.522 0 10-4.478 10-10v-210.041c0-5.522-4.478-10-10-10zm-342.356 30.957c12.598 0 22.846 10.249 22.846 22.846v19.048h-113.245v-41.894zm-110.399 179.085h-29.245v-254.623c16.812 4.434 29.245 19.77 29.245 37.954zm20-49.327v-67.864h373.51v67.864zm422.755 49.327h-29.245v-150.797c0-18.185 12.434-33.521 29.245-37.954z"/>
									</svg>
								</span> 
							</div>
							<div class="icon-content">
								<h3 class="ttr-title">Qualified Doctors</h3>
								<p>Phasellus venenatis porta rhoncus. Integer et viverra felis.</p>
								<a href="{{url('servicedetail')}}" class="btn btn-primary light">View More</a>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</section>
		
		<!-- Serviceus-->
		<section class="section-sp1 service-wraper2">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-sm-6 mb-30">
						<div class="feature-container feature-bx3">
							<h2 class="counter text-secondary">120</h2>
							<h5 class="ttr-title text-primary">Years With You</h5>
							<p>Etiam ante ante, molestie vitae cursus ac, pharetra euismod libero.</p>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-30">
						<div class="feature-container feature-bx3">
							<h2 class="counter text-secondary">400</h2>
							<h5 class="ttr-title text-primary">Awards</h5>
							<p>Etiam ante ante, molestie vitae cursus ac, pharetra euismod libero.</p>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-30">
						<div class="feature-container feature-bx3">
							<h2 class="counter text-secondary">250</h2>
							<h5 class="ttr-title text-primary">Doctors</h5>
							<p>Etiam ante ante, molestie vitae cursus ac, pharetra euismod libero.</p>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-30">
						<div class="feature-container feature-bx3">
							<h2 class="counter text-secondary">800</h2>
							<h5 class="ttr-title text-primary">Satisfied Client</h5>
							<p>Etiam ante ante, molestie vitae cursus ac, pharetra euismod libero.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Team -->
		<section class="section-area section-sp3 team-wraper">
			<div class="container">
				<div class="heading-bx text-center">
					<h6 class="title-ext text-secondary">Our Doctor</h6>
					<h2 class="title">Meet Best Doctors</h2>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-4 col-sm-6 mb-30">
						<div class="team-member">
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
					<div class="col-lg-4 col-sm-6 mb-30">
						<div class="team-member active">
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
					<div class="col-lg-4 col-sm-6 mb-30">
						<div class="team-member">
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
				</div>
			</div>
			<img class="pt-img1 animate1" src="{{asset('frontend/images/shap/trangle-orange.png')}}" alt="">
			<img class="pt-img2 animate2" src="{{asset('frontend/images/shap/square-dots-orange.png')}}" alt="">
			<img class="pt-img3 animate-rotate" src="{{asset('frontend/images/shap/line-circle-blue.png')}}" alt="">
			<img class="pt-img4 animate-wave" src="{{asset('frontend/images/shap/wave-blue.png')}}" alt="">
			<img class="pt-img5 animate-wave" src="{{asset('frontend/images/shap/circle-dots.png')}}" alt="">
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