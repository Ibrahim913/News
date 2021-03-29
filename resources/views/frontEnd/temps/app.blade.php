<!DOCTYPE html>
<html>
<head>
	<title>N.S.E.W teavelling</title>
	<meta charset="utf-8" name="description" content="this is a website for travelling and tourism">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ url('frontEnd/CSS/bootstrap.min.css') }}"><!-- 1 -->
	<link rel="stylesheet" type="text/css" href="{{ url('frontEnd/CSS/all.min.css') }}"><!-- 2 -->
	<link rel="stylesheet" type="text/css" href="{{ url('frontEnd/CSS/Travelling.css') }}"><!-- 3 -->
	<link rel="stylesheet" type="text/css" href="{{ url('frontEnd/CSS/animate.css') }}"><!-- 4 -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@600&display=swap"><!--FONT-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@700&display=swap" ><!--FONT-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@700&display=swap" >
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@700&display=swap" >
	<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,900&display=swap" rel="stylesheet">
	

	@yield('style')
</head>
<body>

		@include('frontEnd.temps.nav')
	


		@yield('content')

	<!-- start footer-->
	<section class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-duration = '2s' data-wow-offset = '95'>
					<h3>Site Map</h3>
					<ul class="list-unstyled three-columns">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Features</a></li>
						<li><a href="#">Tours</a></li>
						<li><a href="#">Team</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Gallery</a></li>
						<li><a href="#">Contact</a></li>
					</ul>	
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-duration = '6s' data-wow-offset = '95'>
					<h3>Connect With Us</h3>
					<div class="connect" id="content3">
							<i class="fab fa-facebook-f fa-2x"></i>
					</div>
						<h6 style="display: none;" id="text03">WWW.facebook.com</h6>
						

						<div class="connect" id="content2">
							<i class="fab fa-twitter fa-2x"></i>
						</div>
						<h6 style="display: none;" id="text02">WWW.twitter.com</h6>

						<div class="connect" id="content4">
							<i class="fab fa-behance fa-2x"></i>
						</div>
						<h6 style="display: none;" id="text04">WWW.behance.com</h6>
				</div>

				<div class="col-lg-4 col-md-12 col-sm-12 wow fadeIn" data-wow-duration = '10s' data-wow-offset = '95'>
					<h3>Latest Tours</h3>
					<img class="img-thumbnail" src="{{ url('frontEnd/IMAGES/LatestTours/FOOTER01.jpg') }}" alt="IMAGE 1">
					<img class="img-thumbnail" src="{{ url('frontEnd/IMAGES/LatestTours/FOOTER02.jpg') }}" alt="IMAGE 2">
					<img class="img-thumbnail" src="{{ url('frontEnd/IMAGES/LatestTours/FOOTER03.jpg') }}" alt="IMAGE 3">
					<img class="img-thumbnail" src="{{ url('frontEnd/IMAGES/LatestTours/FOOTER04.jpg') }}" alt="IMAGE 4">	
				</div>
			</div>	
		</div>		
		<div class="ended wow fadeInUp" data-wow-duration = '2s' data-wow-offset = '10'>
				&copy; Copyright 2020 Challenger. All Right Reserved. 
		</div>
	</section>
	<!-- end footer-->







	<script type="text/javascript" src="{{ url('frontEnd/JS/jquery-3.5.1.min.js') }}"></script><!-- 1 -->
	<script type="text/javascript" src="{{ url('frontEnd/JS/bootstrap.min.js') }}"></script><!-- 2 -->
	<script type="text/javascript" src="{{ url('frontEnd/JS/Travelling.js') }}"></script><!-- 3 -->
	<script type="text/javascript" src="{{ url('frontEnd/JS/wow.min.js') }}"></script><!-- 4 -->
	 <script>new WOW().init();</script>
	 	@yield('script')
</body>
</html>