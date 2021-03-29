@extends('frontEnd.temps.app')

@section('content')

<!--start form-->

<section class="form-login">
	<div class="dark">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12 col-md-6 col-sm-3 col-xs-3">
					{{ Form::Open(['class'=>'form-container']) }}
					
							<h1 class="text-center">Login</h1>
							<div class="form-group">
						    	  <input type="email" class="text"  placeholder="Email" name="email">
						    </div>
							 <div class="form-group">
						     	<input type="password" class="password" placeholder="Password" name="password">
						    </div>
						   <button type="submit" class="btn btn-primary">Log in</button>
					{{ Form::close() }}

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
				</div>
			</div>
		</div>
	</div>
</section>
<!--End form-->





<!--End form-->
@stop