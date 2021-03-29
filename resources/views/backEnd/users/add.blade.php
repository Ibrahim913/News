@extends('backEnd.temps.app')
@section('content')

<div class="col-12">
	<h2 class="text-center shadow myheader">Add new users</h2>
</div>
<div class="col-lg-6 col-sm-12 m-auto">
	{{ Form::Open(['class'=>'shadow bg-white p-5','method'=>'POST']) }}
	    <div class="form-group col-md-12">
	      <label for="email">Email</label>
	      <input type="email" class="form-control" id="email" required="" name="email">
	    </div>
	    <div class="form-group col-md-12">
	      <label for="pass">Password</label>
	      <input type="password" class="form-control" id="pass" required="" name="pass">
	    </div>

	    <div class="form-group col-md-12">
	      <label for="name">Name</label>
	      <input type="text" class="form-control" id="name" required="" name="name">
	    </div>
	    <div class="form-group col-md-12">
	      <label for="phone">phone</label>
	      <input type="text" class="form-control" id="phone" required="" name="phone">
	    </div>



	  
	  
	    <div class="form-group col-md-12">
	      <label for="NID">National ID</label>
	      <input type="text" class="form-control" id="NID" required="" name="NID">
	    </div>
	    <div class="form-group col-md-12">
	      <label for="Gender">Gender</label>
	      <select id="Gender" class="form-control" name="gender" required name="gender">
	        <option selected value="">Choose...</option>
	        <option value="male">Male</option>
	        <option value="famale">famale</option>
	      </select>
	    </div>
	    
	  
	  <button type="submit" class="btn btn-primary btn-block">ADD</button>
	{{ Form::Close() }}

	

</div>	


	<div class="pull-right position-fixed noti col-3"> 
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




@stop