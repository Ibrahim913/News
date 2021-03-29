@extends('frontEnd.temps.app')

@section('style')
<link rel="stylesheet" type="text/css" href="{{url('frontEnd/CSS/alexreservation.css')}}">
@stop
@section('content')

		<!--Start Beginning-->
		<section class="reservation-HEADER text-center">
			<div class="dark">
				<div class="container">
					<div class="row">

						<div class="col-lg-12  col-md-12  col-sm-12">
							<form class="form">
								<h2>Reservation</h2>
							<div class="row">
								<div class="col-lg-6 form-group">
									<select>
										<option selected="" disabled="">Travel From</option>
										<option>Alexandria</option>
										<option>Cairo</option>
										<option>Fayoum</option>
										<option>Mesa Matruh</option>
										<option>Al Minya</option>
										<option>South Sinai</option>
										<option>Red Sea</option>
										<option>Qena</option>
										<option>Luxor</option>
										<option>Aswan</option>
									</select>
								</div>
								<div class="col-lg-6 form-group">
									<select>
										<option selected="" disabled="">Travel To</option>
										<option selected="">Alexandria</option>
										<option>Cairo</option>
										<option>Fayoum</option>
										<option>Mesa Matruh</option>
										<option>Al Minya</option>
										<option>South Sinai</option>
										<option>Red Sea</option>
										<option>Qena</option>
										<option>Luxor</option>
										<option>Aswan</option>
									</select>
								</div>
							</div>

							<div class="row">								
								<div class="col-lg-6 form-group" data-date-formate="yyyy-mm-dd">
									<label>Departure</label>
									<input type="date" name="departure" date-time-picker="date" 
										placeholder="Date">
								</div>
								<div class="col-lg-6 form-group" data-date-formate="yyyy-mm-dd">
									<label>Return</label>
										<input type="date" name="departure" date-time-picker="date" 
										placeholder="Date">
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 form-group">
									<label>Number of Adults</label>
									<select>
										<option selected="" disabled="">Adults</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
									</select>
								</div>
								<div class="col-lg-6 form-group">
									<label>Number of Choldreen</label>
									<select>
										<option selected="" disabled="">Childreen</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
								</div>
							</div><br>
							<div class="row">
								<div class="col-lg-4 col-md-6 col-sm-6 form-group">
									<img src="{{ url('frontEnd/IMAGES/alex/t1.jpg') }}" width="220">
									<input type="radio" name="tourguide">
									<label>Dexter Morgan</label>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-6 form-group">
									<img src="{{ url('frontEnd/IMAGES/alex/t2.jpg') }}">
									<input type="radio" name="tourguide">
									<label>Amir Monir</label>
									
								</div>
								<div class="col-lg-4 d-none d-lg-block form-group">
									
									<img src="{{ url('frontEnd/IMAGES/alex/t3.jpg') }}">
									<input type="radio" name="tourguide">
									<label>Zahi Hawass</label>
									
								</div>
							</div>

								<center class="col-lg-12 col-md-12 col-sm-12 form-group center">
									<button class="btn btn-warning">Reserve</button>
								</center>
							</form>		
						</div>
					</div>


					
				</div>
			</div>
		</section>
		<!--End Beginning-->
		<!--start carsoul-->

		<section class="Landmarks">
			<div class="dark">
				<div class="container">
					<h1 class="text-center"> ALEXANDRIA</h1>
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
								<!--   <ol class="carousel-indicators">
								    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
								    
								  </ol> -->
								  <div class="carousel-inner">
								    <div class="carousel-item active">
								    	<div class="row">
								    		<div class="col-lg-6  col-md-6 col-sm-12">
								    			<img src="{{ url('frontEnd/IMAGES/alex/slider01.jpg') }}" class="d-block w-100" alt="slider01">
								    		</div>
								    		<div class="col-lg-6  col-md-6 col-sm-12">
								    			<div class="card">
													<p class="description lead">
													 is the second-largest city in Egypt and a major economic centre. With a population of 5,200,000
													 ,Alexandria is the largest city on the Mediterranean.
													 also called the Bride of the Mediterranean.
													</p>
											    </div>	
								    		</div>
								    	</div>
								    </div>
								    	

								    	<div class="carousel-item ">
								    	<div class="row">
								    		<div class="col-lg-6  col-md-6 col-sm-12">
								    			<img src="{{ url('frontEnd/IMAGES/alex/slider02.jpg') }}" class="d-block w-100" alt="slider01">
								    		</div>
								    		<div class="col-lg-6  col-md-6 col-sm-12">
								    			<div class="card">
													<p class="description lead">
													 If You need Hospital for emergency case in case of unexpected thing  , we will direct you for most populer hospital such as  Alshrouk hospital, sahla hospital,al shatby hospital,gamal abelnasser 
													 hospital.
													</p>
											    </div>	
								    		</div>
								    	</div>
								    </div>

								    	<div class="carousel-item ">
								    	<div class="row">
								    		<div class="col-lg-6  col-md-6 col-sm-12">
								    			<img src="{{ url('frontEnd/IMAGES/alex/slider03.jpg') }}" class="d-block w-100" alt="slider01">
								    		</div>
								    		<div class="col-lg-6  col-md-6 col-sm-12">
								    			<div class="card">
													<p class="description lead">
													 There is many five stars hotel in Alexandria we provid this hotel for you instade of you go and dont know any thing such as Tolip , Azure, Golden Gewel ,AlMahrosa , this hotel is directly viwe to the sea.
													</p>
											    </div>	
								    		</div>
										</div>
									</div>
								</div>
								 <ol class="carousel-indicators">
								    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
								    
								  </ol>
							</div>
						</div>
					</div>
			</section>
<!--end carsoul-->
	@stop