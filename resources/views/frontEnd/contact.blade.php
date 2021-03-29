@extends('frontEnd.temps.app')


@section('content')

	<!--Start Beginning-->
		<section class="CONTACT-HEADER text-center">
			<div class="dark">
				<div class="container">
					<h1>CONTACT US</h1>
					<h5>Always stay in touch with us and tell us everything on your mind</h5>
				</div>
			</div>
		</section>
<!--End Beginning-->

<!--start contact info-->	
	<section class="ContactUs">
		<div class="dark">
			<h2 class="text-center">Contact Us</h2>
			<div class="Contact-form wow bounceIn" data-wow-duration = '3s' data-wow-offset = '120'>
			<div class="backgrounde">
				<div class="contact-fields">
					<input type="text" class="input" placeholder="Name">
					<input type="text" class="input" placeholder="Email">
					<input type="text" class="input" placeholder="Phone">
					<input type="text" class="input" placeholder="Subject">
				</div>
				<div class="msg">
					<textarea placeholder="Message"></textarea>
					<button class="button">SEND</button>
					
				</div>
			</div>
			</div>
		</div>
	</section>

<!--End contact info-->
@stop