<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from meditro.themetrades.com/html/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Aug 2023 19:02:58 GMT -->
<head>
	
	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- OG -->
	
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
<div class="page-wraper">
	<div id="loading-icon-bx">
		<div class="loading-inner">
			<div class="load-one"></div>
			<div class="load-two"></div>
			<div class="load-three"></div>
		</div>
	</div>

	<!-- header -->
@include('layouts.frontend.header')
	<!-- header END -->
 
@yield('content')
	
	<!-- Footer ==== -->
@include('layouts.frontend.footer')
    <!-- Footer END ==== -->
	<button class="back-to-top fa fa-chevron-up"></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('frontend/vendor/swiper/swiper.min.js')}}"></script>
<script src="{{asset('frontend/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('frontend/vendor/counter/counterup.min.js')}}"></script>
<script src="{{asset('frontend/vendor/counter/waypoints-min.js')}}"></script>
<script src="{{asset('frontend/js/functions.js')}}"></script>
<script src="{{asset('frontend/js/contact.js')}}"></script>
</body>

<!-- Mirrored from meditro.themetrades.com/html/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Aug 2023 19:04:12 GMT -->
</html>