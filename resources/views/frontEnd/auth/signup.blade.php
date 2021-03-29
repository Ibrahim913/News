@extends('frontEnd.temps.app')

@section('content')

<section class="form-signup">
	<div class="dark">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					{{ Form::Open(['class'=>'form']) }}
						<h1>Sign up</h1>
						
						<div class="form-group">
							<input class="Username" type="text" name="name" placeholder="name" required="">
						</div>
						<div class="form-group">
							<input class="Email" type="email" name="email" placeholder="Email" required="">
						</div>
						<div class="form-group">
							<input class="PhoneNumber" type="text" name="phone" placeholder="Phone Number" required="">
						</div>
						<div class="form-group">
							<input class="NationalID" type="text" name="nationalID" placeholder="National ID" required="">
						</div>
						<div class="form-group">
							<input class="NationalID" type="password" name="password" placeholder="Password" required="">
						</div>
						

						<div class="form-group">
							<select required="" name="gender">
								<option  value="" selected="">Gender</option>
								<option value="male">Male</option>
								<option value="famale">Female</option>
							</select>
						</div>

						<button type="submit" class="btn btn-primary">Sign up</button>
						<button type="reset" class="btn btn-primary">Reset</button>

				{{ Form::close() }}

				<div class="  col-3"> 
					 @if(isset($errors))
				        @foreach($errors->all() as $err)
				        <div class="alert alert-danger alert-dismissible show">
					      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
					        <i class="nc-icon nc-simple-remove"></i>
					      </button>
					      <span>
					        <b> Danger - </b> {{ $err }}</span>
					    </div>
				        @endforeach 
				    @endif


				   @if(Session::has('done'))
				   <div class="alert alert-success alert-dismissible show ">
				      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
				        <i class="nc-icon nc-simple-remove"></i>
				      </button>
				      <span>
				        <b> Success - </b> New user has beed Added</span>
				    </div>
				   @elseif(Session::has('err'))
				    <div class="alert alert-danger alert-dismissible show ">
				      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
				        <i class="nc-icon nc-simple-remove"></i>
				      </button>
				      <span>
				        <b> Danger - </b> {{ Session::get('err') }}</span>
				    </div>
				    @endif
				</div>

				</div>
			</div>
		</div>
	</div>
</section>




<div class="pull-right position-fixed  col-3"> 
	 @if(isset($errors))
        @foreach($errors->all() as $err)
        <div class="alert alert-danger alert-dismissible show">
	      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
	        <i class="nc-icon nc-simple-remove"></i>
	      </button>
	      <span>
	        <b> Danger - </b> {{ $err }}</span>
	    </div>
        @endforeach 
    @endif


   @if(Session::has('done'))
   <div class="alert alert-success alert-dismissible show ">
      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
        <i class="nc-icon nc-simple-remove"></i>
      </button>
      <span>
        <b> Success - </b> New user has beed Added</span>
    </div>
   @elseif(Session::has('err'))
    <div class="alert alert-danger alert-dismissible show ">
      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
        <i class="nc-icon nc-simple-remove"></i>
      </button>
      <span>
        <b> Danger - </b> {{ Session::get('err') }}</span>
    </div>
    @endif
</div>
<!--End form-->
@stop