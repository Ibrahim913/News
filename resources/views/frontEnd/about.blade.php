@extends('frontEnd.temps.app')

@section('style')
  <link rel="stylesheet" type="text/css" href="{{ url('frontEnd/CSS/lightbox.min.css') }}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css"><!-- swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"><!-- swiper -->

@stop


@section('content')




<!--Start Beginning-->
    <section class="ABOUT-HEADER text-center">
      <div class="dark">
        <div class="container">
          <h1>ABOUT US</h1>
          <h5>Our Company starts in 2000 it means we have worked in this field for 20 years so we have a very good experience that can help you as you like.</h5>
        </div>
      </div>
    </section>
    <!--End Beginning-->
<!-- strat slider  -->
  <div class="container swiper-container" style="padding-right: 30px; padding-left: 30px;">
  	<h1 class="text-center">OUR TOUR GUIDES</h1>
    <div class="swiper-wrapper">
	<!--start first slider-->
      <div class="swiper-slide">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 colxs-12 img1">
          </div>
          <div class="col-lg-6 col-md-6 content">
            <h2>Amir Monir</h2>
            <h6 class="lead">Gratuated From Tourism University  7 Years ago and start working for this company from 4 year ago.</h6><br>
               <div class="progress">
                  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" 
                  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                  90% TOURS
                </div>
              </div><br>
              <div class="progress">
                <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" 
                  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                 80% EXCUSION
                </div>
              </div><br>
              <div class="progress">
                <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" 
                aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width: 
                70%">
                70% Experience
              </div>
              </div><br>
              <button class="btn btn-warning">Check In</button>
            
          </div>
        </div>
      </div>
	<!--end first slider-->

	<!--start second slider-->
      <div class="swiper-slide">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 colxs-12 img2">
          </div>
          <div class="col-lg-6 col-md-6 content">
            <h2>Muhammad Medhat</h2>
            <h6 class="lead">Gratuated From Tourism University  6 Years ago and start working for this company from 5 year ago.</h6><br>
            <div class="progress">
                  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" 
                  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                  90% TOURS
                </div>
              </div><br>
              <div class="progress">
                <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" 
                  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 76%">
                  76% EXCUSION
                </div>
              </div><br>
              <div class="progress">
                <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" 
                aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width:
                60%">
                60% Experience
              </div>
              </div><br>
              <button class="btn btn-warning">Check In</button>
            
          </div>
        </div>
      </div>
	<!--end second slider-->

	<!--start third slider-->
    <div class="swiper-slide">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 colxs-12 img3">
          </div>
          <div class="col-lg-6 col-md-6 content">
            <h2>Marwa Kamal</h2>
            <h6 class="lead">Gratuated From Tourism University 5 Years ago and starts working for this company from 4.5 year ago.</h6><br>
            <div class="progress">
                  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" 
                  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                  85% TOURS
                </div>
              </div><br>
              <div class="progress">
                <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" 
                  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                  60% EXCUSION
                </div>
              </div><br>
              <div class="progress">
                <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" 
                aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width:
                73%">
                73% Experience
              </div>
              </div><br>
              <button class="btn btn-warning">Check In</button>
          </div>
        </div>
    </div>
	<!--end third slider-->

	<!--start fourth slider-->
   <div class="swiper-slide">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 colxs-12 img4">
          </div>
          <div class="col-lg-6 col-md-6 content">
            <h2>Barry Morgan</h2>
            <h6 class="lead">Gratuated From Tourism University 7 Years ago and starts working for this company from 3 year ago.</h6><br>
            <div class="progress">
                  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" 
                  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                  80% TOURS
                </div>
              </div><br>
              <div class="progress">
                <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" 
                  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 68%">
                  68% EXCUSION
                </div>
              </div><br>
              <div class="progress">
                <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" 
                aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width: 59%">
                59% Experience
              </div>
              </div><br>
              <button class="btn btn-warning">Check In</button>
          </div>
        </div>
      </div>
	<!--end fourth slider-->
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
</div>
<!-- end slider  -->

<!-- start Top destination  -->

<section class="TopDestination">
	
	<div class="container wow fadeInUp" data-wow-duration = '2s' data-wow-offset = '100'>
		<h1 class="text-center">TOP DESTINATION</h1>
		<div class="row">
		<div class="col-lg-3 col-md-6 col-sm-6 box wow pulse" data-wow-duration = '1s' data-wow-delay="0.02s" data-wow-offset = '40'> 
			<a href="frontEnd/IMAGES/ABOUT/gallery/Gallery01.jpg" data-lightbox="mygallery">
				<img src="{{ url('frontEnd/IMAGES/ABOUT/top-destination01.jpg') }}">
				<div class="details">
					<h3>Sinai</h3>
				</div>
			</a>
		</div>
			
			<div class="col-lg-3 col-md-6 col-sm-6 box wow bounceIn" data-wow-duration = '1s' data-wow-delay="0.5s" data-wow-offset = '40'>
				<a href="{{ url('frontEnd/IMAGES/ABOUT/gallery/Gallery02.jpg') }}" data-lightbox="mygallery">
				<img src="{{ url('frontEnd/IMAGES/ABOUT/top-destination03.jpg') }}" width="250px" height="250px">
				<div class="details" >
					<h3 id="Alexandria">Alexandria</h3>
				</div>
			</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 box wow bounceIn" data-wow-duration = '1s' data-wow-delay="1s" data-wow-offset = '40'>
				<a href="{{ url('frontEnd/IMAGES/ABOUT/gallery/Gallery03.jpg') }}" data-lightbox="mygallery">
				<img src="{{ url('frontEnd/IMAGES/ABOUT/top-destination02.jpg') }}">
				<div class="details">
					<h3>Cairo</h3>
				</div>
			</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 box wow bounceIn" data-wow-duration = '1s' data-wow-delay="1.5s" data-wow-offset = '40'>
				<a href="{{ url('frontEnd/IMAGES/ABOUT/gallery/Gallery04.jpg') }}" data-lightbox="mygallery">
				<img src="{{ url('frontEnd/IMAGES/ABOUT/top-destination04.jpg') }}">
				<div class="details">
					<h3>Hurghada</h3>
				</div>
			</a>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 box wow bounceIn" data-wow-duration = '1s' data-wow-delay="2s" data-wow-offset = '38'>
				<a href="{{ url('frontEnd/IMAGES/ABOUT/gallery/Gallery05.jpg') }}" data-lightbox="mygallery">
				<img src="{{ url('frontEnd/IMAGES/ABOUT/top-destination05.jpg') }}">
				<div class="details" >
					<h3>El-Ghona</h3>
				</div>
			</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 box wow bounceIn" data-wow-duration = '1s' data-wow-delay="2.5s" data-wow-offset = '38'>
				<a href="{{ url('frontEnd/IMAGES/ABOUT/gallery/Gallery06.jpg') }}" data-lightbox="mygallery">
				<img src="{{ url('frontEnd/IMAGES/ABOUT/top-destination06.jpg') }}">
				<div class="details">
					<h3>Mansoura</h3>
				</div>
			</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 box wow bounceIn" data-wow-duration = '1s' data-wow-delay="3s" data-wow-offset = '38'>
				<a href="{{ url('frontEnd/IMAGES/ABOUT/gallery/Gallery07.jpg') }}" data-lightbox="mygallery">
				<img src="{{ url('frontEnd/IMAGES/ABOUT/top-destination07.jpg') }}">
				<div class="details">
					<h3>Safari</h3>
				</div>
			</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 box wow bounceIn" data-wow-duration = '1s' data-wow-delay="3.5s" data-wow-offset = '38'>
				<a href="{{ url('frontEnd/IMAGES/ABOUT/gallery/Gallery08.jpg') }}" data-lightbox="mygallery">
				<img src="{{ url('frontEnd/IMAGES/ABOUT/top-destination08.jpg') }}">
				<div class="details">
					<h3>Fayoum</h3>
				</div>
			</a>
			</div>
		</div>
	</div>
</section>
<!-- end Top destination  -->

<!-- start Statistics  -->
<section class="statistic text-center">
	<div class="dark">
		
		<div class="container wow fadeInUp" data-wow-duration = '2s' data-wow-offset = '90'>
			<h1 >OUR STATISTICS</h1>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-duration = '1s' data-wow-offset = '60'>
					<div class="content">
						<h3>Number of Clients</h3>
						<div class="ui-widget1">
							<div class="ui-value">10945</div>
							<span class="ui-label" id="val">clients</span>
							
						</div>

						
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 wow fadeInDown" data-wow-duration = '1s' data-wow-delay="0.001s" data-wow-offset = '60'>
					<div class="content">
						<h3>Number of Team</h3>
						<div class="ui-widget2">
							<div class="ui-value">190</div>
							<span class="ui-label">Members</span>
							
						</div>

						
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-duration = '1s' data-wow-delay="0.002s" data-wow-offset = '60'>
					<div class="content">
						<h3>Number of Tours</h3>
						<div class="ui-widget3">
							<div class="ui-value">500</div>
							<span class="ui-label">Tours</span>
							
						</div>

						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- end Statistics  -->

@stop

@section('script')
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script><!--Swiper-->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script><!--Swiper-->
    <script type="text/javascript" src="{{ url('frontEnd/JS/lightbox-plus-jquery.min.js') }}"></script><!-- 4 -->

  <script>
      var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: '.swiper-pagination',
        },
      });
  </script>
    <script type="text/javascript" src="{{ url('frontEnd/JS/counter.js') }}"></script><!-- 3 -->
@stop