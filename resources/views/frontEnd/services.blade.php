@extends('frontEnd.temps.app')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ url('frontEnd/CSS/map.css') }}">

@stop

@section('content')

		<!--start Beginning-->
		<section class="SERVICES-HEADER text-center">
			<div class="dark">
				<div class="container">
					<h1>SERVICES</h1>
					<h5>Our Company starts in 2000 it means we have worked in this field for 20 years so we have a very good experience that can help you as you like.</h5>
				</div>
			</div>
		</section>
		<!--End Beginning-->

			

		<!--start MAP-->
	<section class="OURSERVICES-INFO">
		<div class="dark">
		<div id="overlay" >
 	 <div class="city-info">
		<button class="close" onclick="close_all();off();">&times;</button>
			<div id="carouselCairo" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselCairo" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselCairo" data-slide-to="1"></li>
				    <li data-target="#carouselCairo" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">

				    <div class="carousel-item active" style="background-image: url('IMAGES/alex/cairo/cairo02.jpg')">
				    	<button class="close" onclick="close_all();off();">&times;</button>
				      <h1 class="info-header">Cairo</h1>
				      <p class= "lead" style="color: #eee;">Pyramids</p><br><br>
				      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
				    </div>

				    <div class="carousel-item" style="background-image: url('IMAGES/alex/cairo/cairo02.jpg')">
				    	<button class="close" onclick="close_all();off();">&times;</button>
				    	<h1 class="info-header">Museums</h1>
				      	<ul class="list-unstyled text-center">
				      		<li style="color: #eee">Egyptian Museum Club</li>
				      		<li style="color: #eee">Islamic museum</li>
				      		<li style="color: #eee">The Coptic Museum</li>
				      		
				      	</ul>
				      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
				    </div>

				    <div class="carousel-item " style="background-image: url('IMAGES/alex/cairo/cairo03.jpg')">
				    	<button class="close" onclick="close_all();off();">&times;</button>
				    	<h1 class="info-header">Sphynxs</h1>
				      <p class= "lead">In Giza</p><br><br>
				      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
				    </div>
				  </div>
			</div>
		</div>

		<div class="city-info">
				<button class="close" onclick="close_all();off();">&times;</button>
						
			<div id="carouselAlexandria" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselAlexandria" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselAlexandria" data-slide-to="1"></li>
			    <li data-target="#carouselAlexandria" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">

			    <div class="carousel-item active" style="background-image: url('IMAGES/alex/alexandria/alexandria03.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			      <h1 class="info-header">Alexandria</h1>
			      <p class= "lead">Hilton Alexandria Green Plaza</p>
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>

			    <div class="carousel-item" style="background-image: url('IMAGES/alex/alexandria/alexandria02.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			    	<h1 class="info-header">Beaches</h1>
			      	<ul class="list-unstyled text-center">
			      		<li>Mandara</li>
			      		<li>Borivage</li>
			      		<li>Stanley</li>
			      		<li>As-Safa</li>
			      	</ul>
			     
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>

			    <div class="carousel-item " style="background-image: url('IMAGES/alex/alexandria/alexandria01.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			    	<h1 class="info-header">Castle</h1>
			      <p class= "lead">Qaitbay Citadel in Alexandria</p><br><br>
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>
			  </div>
		</div>
	</div>

			<div class="city-info">
				<button class="close" onclick="close_all();off();">&times;</button>
						
			<div id="carouselAswan" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselAswan" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselAswan" data-slide-to="1"></li>
			    <li data-target="#carouselAswan" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">

			    <div class="carousel-item active" style="background-image: url('IMAGES/alex/luxor/luxor01.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			      <h1 class="info-header">Aswan</h1>
			      <p class= "lead">Hilton Alexandria Green Plaza</p>
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>

			    <div class="carousel-item" style="background-image: url('IMAGES/alex/luxor/luxor02.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			    	<h1 class="info-header">Beaches</h1>
			      	<ul class="list-unstyled text-center">
			      		<li>Mandara</li>
			      		<li>Borivage</li>
			      		<li>Stanley</li>
			      		<li>As-Safa</li>
			      	</ul>
			     
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>

			    <div class="carousel-item " style="background-image: url('IMAGES/alex/luxor/luxor02.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			    	<h1 class="info-header">Castle</h1>
			      <p class= "lead">Qaitbay Citadel in Alexandria</p><br><br>
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>
			  </div>
		</div>
			</div>

			<div class="city-info">
				<button class="close" onclick="close_all();off();">&times;</button>
						
			<div id="carouselLuxor" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselLuxor" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselLuxor" data-slide-to="1"></li>
			    <li data-target="#carouselLuxor" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">

			    <div class="carousel-item active" style="background-image: url('IMAGES/alex/luxor/luxor01.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			      <h1 class="info-header">Luxor</h1>
			      <p class= "lead" style="color: #eee;">Karnak Temple</p>
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>

			    <div class="carousel-item" style="background-image: url('IMAGES/alex/luxor/luxor02.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			    	<h1 class="info-header">Temples</h1>
			      <p class= "lead">Mortuary Temple of Hatshepsut</p>

			      
			     
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>

			    <div class="carousel-item " style="background-image: url('IMAGES/alex/luxor/luxor02.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			    	<h1 class="info-header">Other</h1>
			      <p class= "lead">Valley of the Kings</p><br><br>
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>
			  </div>
		</div>
			</div>

			<div class="city-info">
				<button class="close" onclick="close_all();off();">&times;</button>
						
			<div id="carouselQena" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselQena" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselQena" data-slide-to="1"></li>
			    <li data-target="#carouselQena" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">

			    <div class="carousel-item active" style="background-image: url('IMAGES/alex/qena/qena01.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			      <h1 class="info-header">Qena</h1>
			      <p class= "lead" style="color: #efefef">Dendera Temple</p>
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>

			    <div class="carousel-item" style="background-image: url('IMAGES/alex/qena/qena02.jpg')">
			    	Dendera Temple
			    	<button class="close" onclick="close_all();off();">&times;</button>
			    	<h1 class="info-header">Temples</h1>
			      <p class= "lead">Temple of Khnum</p>

			      	
			     
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>

			    <div class="carousel-item " style="background-image: url('IMAGES/alex/qena/qena02.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			    	<h1 class="info-header">Temples</h1>
			      <p class= "lead">Asnalok</p><br><br>
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>
			  </div>
		</div>
			</div>

			<div class="city-info">
				<button class="close" onclick="close_all();off();">&times;</button>
						
			<div id="carouselFayoum" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselFayoum" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselFayoum" data-slide-to="1"></li>
			    <li data-target="#carouselFayoum" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">

			    <div class="carousel-item active" style="background-image: url('IMAGES/alex/fayoum/fayoum01.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			      <h1 class="info-header">Fayoum</h1>
			      <p class= "lead">Hawara pyramid</p><br><br>
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>

			    <div class="carousel-item" style="background-image: url('IMAGES/alex/fayoum/fayoum02.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			    	<h1 class="info-header">Palaces</h1>
			      	 <p class= "lead" style="color: #efefef;background-size: cover;">Qarun Palace</p><br><br>
			     
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>

			    <div class="carousel-item " style="background-image: url('IMAGES/alex/fayoum/fayoum03.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			    	<h1 class="info-header">Sawaqi</h1>
			      <p class= "lead" style="color: #efefef; background-size: cover;">Sawaqi and Faiyum</p><br><br>
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>
			  </div>
		</div>
			</div>

			<div class="city-info">
				<button class="close" onclick="close_all();off();">&times;</button>
						
			<div id="carouselMatrouh" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselMatrouh" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselMatrouh" data-slide-to="1"></li>
			    <li data-target="#carouselMatrouh" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">

			    <div class="carousel-item active" style="background-image: url('IMAGES/alex/matrouh/matrouh01.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			      <h1 class="info-header">Marsa Matrouh</h1>
			      <p class= "lead">Roman burial cemeteries</p><br><br>
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>

			    <div class="carousel-item" style="background-image: url('IMAGES/alex/matrouh/matrouh02.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			    	<h1 class="info-header">Beaches</h1>
			      	<ul class="list-unstyled text-center">
			      		<li>The village of Umm Al-Rakham</li>
			      		<li>Wonderful beach</li>
			      		<li>Beach of Love</li>
			      		<li>Cleopatra Beach</li>
					</ul>
			     
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>

			    <div class="carousel-item " style="background-image: url('IMAGES/alex/matrouh/matrouh03.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			    	<h1 class="info-header">Diving</h1>
			      <p class= "lead" style="color: #eee">Diving Club</p><br><br>
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>
			  </div>
		</div>
			</div>

			<div class="city-info">
				<button class="close" onclick="close_all();off();">&times;</button>
						
			<div id="carouselSinai" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselSinai" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselSinai" data-slide-to="1"></li>
			    <li data-target="#carouselSinai" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">

			    <div class="carousel-item active" style="background-image: url('IMAGES/alex/sinai/sinai01.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			      <h1 class="info-header">South Sinai</h1>
			      <p class= "lead"  style="color: #eee">Ain Khadra</p>
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>

			    <div class="carousel-item" style="background-image: url('IMAGES/alex/sinai/sinai02.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			    	<h1 class="info-header">Mosques</h1>
			      <p class= "lead"  style="color: #eee">El Sahabaa Mosque</p>

			      
			     
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>

			    <div class="carousel-item " style="background-image: url('IMAGES/alex/sinai/sinai03.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			    	<h1 class="info-header">Cathedral</h1>
			      <p class= "lead">Heavenly Cathedral</p><br><br>
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>
			  </div>
		</div>
			</div>

			<div class="city-info">
				<button class="close" onclick="close_all();off();">&times;</button>
						
			<div id="carouselSharm" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselSharm" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselSharm" data-slide-to="1"></li>
			    <li data-target="#carouselSharm" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">

			    <div class="carousel-item active" style="background-image: url('IMAGES/alex/luxor/luxor02.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			      <h1 class="info-header">Red Sea</h1>
			      <p class= "lead">Hilton Alexandria Green Plaza</p>
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>

			    <div class="carousel-item" style="background-image: url('IMAGES/alex/luxor/luxor02.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			    	<h1 class="info-header">Beaches</h1>
			      	<ul class="list-unstyled text-center">
			      		<li>Mandara</li>
			      		<li>Borivage</li>
			      		<li>Stanley</li>
			      		<li>As-Safa</li>
			      	</ul>
			     
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>

			    <div class="carousel-item " style="background-image: url('IMAGES/alex/luxor/luxor02.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			    	<h1 class="info-header">Castle</h1>
			      <p class= "lead">Qaitbay Citadel in Alexandria</p><br><br>
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>
			  </div>
		</div>
			</div>

			<div class="city-info">
				<button class="close" onclick="close_all();off();">&times;</button>
						
			<div id="carouselMinya" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselMinya" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselMinya" data-slide-to="1"></li>
			    <li data-target="#carouselMinya" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">

			    <div class="carousel-item active" style="background-image: url('IMAGES/alex/luxor/luxor02.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			      <h1 class="info-header">AL Minya</h1>
			      <p class= "lead">Hilton Alexandria Green Plaza</p>
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>

			    <div class="carousel-item" style="background-image: url('IMAGES/alex/luxor/luxor02.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			    	<h1 class="info-header">Beaches</h1>
			      	<ul class="list-unstyled text-center">
			      		<li>Mandara</li>
			      		<li>Borivage</li>
			      		<li>Stanley</li>
			      		<li>As-Safa</li>
			      	</ul>
			     
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>

			    <div class="carousel-item " style="background-image: url('IMAGES/alex/luxor/luxor02.jpg')">
			    	<button class="close" onclick="close_all();off();">&times;</button>
			    	<h1 class="info-header">Castle</h1>
			      <p class= "lead">Qaitbay Citadel in Alexandria</p><br><br>
			      <form action="alexReservation.html"><button class="Dierct" >BOOK NOW!</button></form>
			    </div>
			  </div>
		</div>
		
		   </div>	

	</div>

				
			<h1 class="text-center">RESERVE BY MAP</h1>

			@php
				$temp = url('frontEnd/IMAGES/SERVICES/egypt.PNG')
			@endphp
			
			<div class="map" style="background-image: url('{{ $temp }}');">

			<div class="Location" id="Cairo">
				<i class="fas fa-map-marker-alt material-icons" 
				onmouseover="show(0,this)" onmouseout="hide(0,this)" onclick="show_info(0);on();" ></i>
				<div class="description">
					<img src="{{ url('frontend/IMAGES/SERVICES/cairo.jpg')}} " class="description-image">
					<h3 class="description-header">Cairo</h3>
					<p class="text">The capital of Egypt</p>

				</div>
			</div>

			<div class="Location" id="Alex">
				<i class="fas fa-map-marker-alt material-icons" 
				onmouseover="show(1,this)" onmouseout="hide(1,this)" onclick="show_info(1);on();" ></i>
				<div class="description">
					<img src="{{ url('frontend/IMAGES/SERVICES/alex.jpg') }} " lass="description-image">
					<h3 class="description-header">Alexandria</h3>
					<p class="text">Pearl of the Mediterranean</p>

				</div>
			</div>

			<div class="Location" id="Aswan">
				<i class="fas fa-map-marker-alt material-icons" 
				onmouseover="show(2,this)" onmouseout="hide(2,this)" onclick="show_info(2);on();" ></i>
				<div class="description">
					<img src="{{ url('frontend/IMAGES/SERVICES/aswan.jfif') }}" class="description-image">
					<h3 class="description-header">Aswan</h3>
					<p class="text"> The ancient city of Swenett</p>

				</div>
			</div>

			<div class="Location" id="Luxor">
				<i class="fas fa-map-marker-alt material-icons" 
				onmouseover="show(3,this)" onmouseout="hide(3,this)" onclick="show_info(3);on();" ></i>
				<div class="description">
					<img src="{{ url('frontend/IMAGES/SERVICES/luxor.jfif') }}" class="description-image">
					<h3 class="description-header">Luxor</h3>
					<p class="text">City of Palaces</p>

				</div>
			</div>

			<div class="Location" id="Qena">
				<i class="fas fa-map-marker-alt material-icons" 
				onmouseover="show(4,this)" onmouseout="hide(4,this)" onclick="show_info(4);on();" ></i>
				<div class="description">
					<img src="{{ url('frontend/IMAGES/SERVICES/qena.jfif') }}" class="description-image">
					<h3 class="description-header">Qena</h3>
					<p class="text">The city of Caenepolis</p>

				</div>
			</div>

			<div class="Location" id="Fayoum">
				<i class="fas fa-map-marker-alt material-icons" 
				onmouseover="show(5,this)" onmouseout="hide(5,this)" onclick="show_info(5);on();" ></i>
				<div class="description">
					<img src="{{ url('frontend/IMAGES/SERVICES/fayoum.jfif') }}" class="description-image">
					<h3 class="description-header">Fayoum</h3>
					<p class="text">Crocodilopolis</p>

				</div>
			</div>

			<div class="Location" id="Matruh">
				<i class="fas fa-map-marker-alt material-icons" 
				onmouseover="show(6,this)" onmouseout="hide(6,this)" onclick="show_info(6);on();" ></i>
				<div class="description">
					<img src="{{ url('frontend/IMAGES/SERVICES/matruh.jfif') }}" class="description-image">
					<h3 class="description-header">Mersa Matruh</h3>
					<p class="text">Al Baretoun</p>

				</div>
			</div>

			<div class="Location" id="Sinai">
				<i class="fas fa-map-marker-alt material-icons" 
				onmouseover="show(7,this)" onmouseout="hide(7,this)" onclick="show_info(7);on();" ></i>
				<div class="description">
					<img src="{{ url('frontend/IMAGES/SERVICES/sinai.jfif') }}" class="description-image">
					<h3 class="description-header">South Sinai</h3>
					<p class="text">Land of Turquoise</p>

				</div>
			</div>

			<div class="Location" id="Redsea">
				<i class="fas fa-map-marker-alt material-icons" 
				onmouseover="show(8,this)" onmouseout="hide(8,this)" onclick="show_info(8);on();" ></i>
				<div class="description">
					<img src="{{ url('frontend/IMAGES/SERVICES/redsea.jfif') }}" class="description-image">
					<h3 class="description-header">Red Sea</h3>
					<p class="text">The Sea of Reeds</p>

				</div>
			</div>

			<div class="Location" id="Minya">
				<i class="fas fa-map-marker-alt material-icons" 
				onmouseover="show(9,this)" onmouseout="hide(9,this)" onclick="show_info(9);on();" ></i>
				<div class="description">
					<img src="{{ url('frontend/IMAGES/SERVICES/minya.jfif') }}" class="description-image">
					<h3 class="description-header">Al Minya</h3>
					<p class="text">The Bride of Upper Egypt</p>

				</div>
			</div>
		</div>
		
			</div>
			
			

	</section>
		<!--End INFO-->
@stop


@section('script')
	<script type="text/javascript" src="{{ url('frontEnd/JS/map.js') }}"></script><!-- 4 -->
	<script type="text/javascript">
		
	</script>

@stop