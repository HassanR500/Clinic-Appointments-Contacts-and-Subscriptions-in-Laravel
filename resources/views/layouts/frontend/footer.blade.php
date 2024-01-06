<footer class="footer" style="background-image:url(frontend/images/background/footer.jpg);">
		<!-- Footer Top -->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-3 col-md-6">
						<div class="widget widget_info">
							<div class="footer-logo">
								<a href="{{url('/')}}"><img src="{{asset('frontend/images/mediplus.png')}}" alt="" height = "30" width = "100"></a>
							</div>
							<div class="ft-contact">
								<p>Lorem ipsum is dolor sit amet, csectetur adipiscing elit, dolore smod tempor incididunt ut labore et.</p>
								<div class="contact-bx">
									<div class="icon"><i class="fas fa-phone-alt"></i></div>
									<div class="contact-number">
										<span>Contact Us</span>
										<h4 class="number">+255 710 698 749</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-6">
						<div class="widget footer_widget ml-50">
							<h3 class="footer-title">Quick Links</h3>
							<ul>
								<li><a href="{{url('aboutus')}}"><span>About Us</span></a></li>
								<li><a href="{{url('services')}}"><span>Services</span></a></li>
								<li><a href="{{url('booking')}}"><span>Booking</span></a></li>
								<li><a href="{{url('faq')}}"><span>Faq's</span></a></li>
								<li><a href="{{url('bloggrid')}}"><span>Blogs</span></a></li>
								<li><a href="{{url('team')}}"><span>Out Team</span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-6">
						<div class="widget footer_widget">
							<h3 class="footer-title">Our Service</h3>
							<ul>
								<li><a href="{{url('servicedetail')}}"><span>Dental Care</span></a></li>
								<li><a href="{{url('servicedetail')}}"><span>Cardiac Clinic</span></a></li>
								<li><a href="{{url('servicedetail')}}"><span>Massege Therapy</span></a></li>
								<li><a href="{{url('servicedetail')}}"><span>Cardiology</span></a></li>
								<li><a href="{{url('servicedetail')}}"><span>Precise Diagnosis</span></a></li>
								<li><a href="{{url('servicedetail')}}"><span>Abmbulance Services</span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="widget widget_form">
                            <h3 class="footer-title">Subcribe</h3>
							<form class="subscribe-form subscription-form mb-30" action="{{route('submit.subscription')}}" method="post">
								@csrf
								<div class="ajax-message"></div>
								<div class="input-group">
									<input name="email" required="required" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" type="email">
									@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
								<button name="submit" value="Submit" type="submit" class="btn btn-secondary shadow w-100">Subscribe Now</button>	
							</form>
							<div class="footer-social-link">
								<ul>
									<li><a target="_blank" href="https://www.facebook.com/"><img src="{{asset('frontend/images/social/facebook.png')}}" alt=""/></a></li>
									<li><a target="_blank" href="https://twitter.com/"><img src="{{asset('frontend/images/social/twitter.png')}}" alt=""/></a></li>
									<li><a target="_blank" href="https://www.instagram.com/"><img src="{{asset('frontend/images/social/instagram.png')}}" alt=""/></a></li>
									<li><a target="_blank" href="https://www.linkedin.com/"><img src="{{asset('frontend/images/social/linkedin.png')}}" alt=""/></a></li>
								</ul>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
		<!-- footer bottom -->
		<div class="container">
			<div class="footer-bottom">
                <div class="row">
                    <div class="col-12 text-center">
						<p class="copyright-text">Copyright © 2023 Design & Developed by <a href="https://hassanr500.free.nf" target="_blank" class="text-secondary">Hassan</a></p>
					</div>
                </div>
            </div>
		</div>
		<!-- footer-shape -->
		<img class="pt-img1 animate-wave" src="{{asset('frontend/images/shap/wave-blue.png')}}" alt="">
		<img class="pt-img2 animate1" src="{{asset('frontend/images/shap/circle-dots.png')}}" alt="">
		<img class="pt-img3 animate-rotate" src="{{asset('frontend/images/shap/plus-blue.png')}}" alt="">
		<img class="pt-img4 animate-wave" src="{{asset('frontend/images/shap/wave-blue.png')}}" alt="">
	</footer>