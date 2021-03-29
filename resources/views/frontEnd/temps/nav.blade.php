<!--Start Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
		  <a class="navbar-brand" href="#" >
		  	<img src="{{ url('frontEnd/IMAGES/LOGO.png') }}" alt="Logo" style="width:50px">
		  	<h2>N.E.W.S</h2>
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
		   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			   <!--strat navs -->
			    <ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link @if(isset($act) && $act=='home') active @endif" href="{{ url('/') }}">HOME<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link @if(isset($act) && $act=='about') active @endif" href="{{ url('about') }}">ABOUT</a>
					</li>
					<li class="nav-item">
						<a class="nav-link @if(isset($act) && $act=='services') active @endif" href="{{ url('services') }}">SERVICES</a>
					</li>
					<li class="nav-item">
						<a class="nav-link @if(isset($act) && $act=='gallary') active @endif" href="{{ url('gallery') }}">GALLERY</a>
					</li>
					<li class="nav-item">
						<a class="nav-link @if(isset($act) && $act=='contact') active @endif" href="{{ url('contact') }}">CONTACT</a>
					</li>
			    </ul>
			   <!--end navs-->
			   @if(Auth::check())
			   		@if(Auth::User()->stat == '1')
			   		<a class="form-inline my-2 my-lg-0" href="{{ url('/dashboard') }}">
					      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
					      <button class="btn btn-warning my-2 my-sm-0" type="submit" style="margin-right: 10px;">Dashboard</button>
					  </a> 
				  	@endif
			   </div> 
				  <span class ="btn-group logged">
				  	<img src="{{ url('frontEnd/IMAGES/logged.jpg') }}" class = "dropdown-toggle" alt="Muhammad"
				  	 data-toggle="dropdown" aria-haspopup="true"
				  	 aria-expanded="false">
				  	<div class="dropdown-menu"
				  	 style="background-color: #3b4248;border-top: 6px solid #ffa627;">
					    <a class="dropdown-item" href="#">Profile</a>
					    <a class="dropdown-item" href="#">My Travels</a>
					    <a class="dropdown-item" href="#">Gallery</a>
					    <div class="dropdown-divider"></div>
					    <a class="dropdown-item" href="{{ url('logout') }}">Log Out</a>
				  </div>
				  </span>

			  </div>
			  @else
			   <!-- start form -->
			    <a class="form-inline my-2 my-lg-0" href="{{ url('/signup') }}" style="text-decoration: none;">
			      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
			      <button class="btn btn-warning my-2 my-sm-0" type="submit" style="margin-right: 10px;">Sign Up</button>
			  </a> 
			  <a class="form-inline my-2 my-lg-0" href="{{ url('/login') }}" style="text-decoration: none;">
				  <button class="btn btn-warning my-2 my-sm-0" type="submit">Log In</button>
				</a>
			    
			   <!-- end form-->	
			   &nbsp;&nbsp;&nbsp;
		  	@endif
		</nav>
		<!--End Navbar-->