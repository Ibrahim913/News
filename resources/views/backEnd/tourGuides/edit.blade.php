@extends('backEnd.temps.app')
@section('content')

<div class="col-12">
	<h2 class="text-center shadow myheader">Edit Tour Guide</h2>
</div>
<div class="col-lg-6 col-sm-12 m-auto">
	{{ Form::Open(['class'=>'shadow bg-white p-5','method'=>'POST']) }}
	 	<div class="form-group col-md-12">
	      <label for="name">Name</label>
	      <input type="text" class="form-control" id="name" required="" name="name" value="{{ $tourGuide['name'] }}">
	    </div>
	    <div class="form-group col-md-12">
	      <label for="Address">Address</label>
	      <input type="text" class="form-control" id="Address" required="" name="address" value="{{ $tourGuide['address'] }}">
	    </div>
	    

	   
	    <!-- <div class="form-group col-md-12 disabled">
	      <label for="phone">phone</label>
	      <input type="text" class="form-control " id="phone" required="" name="phone">
	    </div> -->



	  
	  
	    <div class="form-group col-md-12">
	      <label for="NID">National ID</label>
	      <input type="text" class="form-control" id="NID" required="" name="NID" value="{{ $tourGuide['nationalID'] }}">
	    </div>
	    <div class="form-group col-md-12">
	      <label for="Gender">Gender</label>
	      <select id="Gender" class="form-control" name="gender" required >
	        <option value="male" @if($tourGuide['gender']=='male') selected @endif>Male</option>
	        <option value="famale" @if($tourGuide['gender']=='famale') selected @endif>famale</option>
	      </select>
	    </div>

	    <div class="form-group col-md-12">
	      <label for="locations">location</label>
	      <select id="locations" class="form-control" name="location" required>
	        @if( count( App\location::get() ) > 0 )
	        	@foreach( App\location::get() as $location)
	        		<option value="{{ $location['id'] }}"
	        		@if($tourGuide['locID'] == $location['id']) selected @endif>
	        			{{ $location['name'] }}
	        		</option>
	        	@endforeach
        	@else
	        	<option value="">NO Locations</option>
        	@endif
	      </select>
	    </div>
	    
	  
	  <button type="submit" class="btn btn-primary btn-block">update</button>
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
            <b> Success - </b> {{ Session::get('done') }}</span>
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