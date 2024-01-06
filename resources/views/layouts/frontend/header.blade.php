<header class="header header-transparent rs-nav">
		<!-- main header -->
		<div class="sticky-header navbar-expand-lg">
			<div class="menu-bar clearfix">
				<div class="container-fluid clearfix">
					<!-- website logo -->
					<div class="menu-logo logo-dark">
						<a href="{{url('/')}}"><img src="{{asset('frontend/images/mediplus.png')}}" alt="" height = "30" width = "30"></a>
					</div>
					<!-- nav toggle button -->
					<button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<!-- extra nav -->
					<div class="secondary-menu">
						<ul>
							<li class="search-btn"><button id="quikSearchBtn" type="button" class="btn-link"><i class="las la-search"></i></button></li>
							<li class="num-bx"><a href="tel:(+01)999888777"><i class="fas fa-phone-alt"></i> (+01) 999 888 777</a></li>
							<li class="btn-area"><a href="{{url('contactus')}}" class="btn btn-primary shadow">CONTACT US <i class="btn-icon-bx fas fa-chevron-right"></i></a></li>
						</ul>
					</div>
					<!-- Search Box ==== -->
                    <div class="nav-search-bar">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span><i class="ti-search"></i></span>
                        </form>
						<span id="searchRemove"><i class="ti-close"></i></span>
                    </div>
					<div class="menu-links navbar-collapse collapse justify-content-end" id="menuDropdown">
						<div class="menu-logo">
						    <a href="{{url('/')}}"><img src="{{asset('frontend/images/mediplus.png')}}" alt="" ></a>
						</div>
						<ul class="nav navbar-nav">	
							<li class="active"><a href="{{url('/')}}">Home</a></li>
							<li>
								<a href="javascript:;">Pages <i class="fas fa-plus"></i></a>
								<ul class="sub-menu">
									<li class="add-menu-left">
										<ul>
											<li><a href="{{url('aboutus')}}"><span>About Us</span></a></li>
											<li><a href="{{url('team')}}"><span>Our Team</span></a></li>
											<li><a href="{{url('faq')}}"><span>FAQ's</span></a></li>
											<li><a href="{{url('booking')}}"><span>Booking</span></a></li>
											<li><a href="{{url('error404')}}"><span>Error 404</span></a></li>
											<li><a href="{{url('login')}}"><span>Login</span></a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:;">Services <i class="fas fa-plus"></i></a>
								<ul class="sub-menu">
									<li class="add-menu-left">
										<ul>
											<li><a href="{{url('services')}}"><span>Service</span> </a></li>
											<li><a href="{{url('servicedetail')}}"><span>Service Detail</span></a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="javascript:;">Blog <i class="fas fa-plus"></i></a>
								<ul class="sub-menu left">
									<li><a href="{{url('bloggrid')}}"><span>Blogs</span></a></li>
									<li><a href="{{url('blogdetails')}}"><span>Blog Details</span></a></li>
								</ul>
							</li>
							<li><a href="{{url('contactus')}}">Contact Us</a></li>
						</ul>
						<ul class="social-media">
							<li><a target="_blank" href="https://www.facebook.com/" class="btn btn-primary"><i class="fab fa-facebook-f"></i></a></li>
							<li><a target="_blank" href="https://www.google.com/" class="btn btn-primary"><i class="fab fa-google"></i></a></li>
							<li><a target="_blank" href="https://www.linkedin.com/" class="btn btn-primary"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a target="_blank" href="https://twitter.com/" class="btn btn-primary"><i class="fab fa-twitter"></i></a></li>
						</ul>
						<div class="menu-close">
							<i class="ti-close"></i>
						</div>
					</div>
					<!-- Navigation Menu END ==== -->
				</div>
			</div>
		</div>
		<!-- main header END -->
	</header>