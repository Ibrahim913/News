@extends('backEnd.temps.app')
@section('content')

<div class="col-12">
	<h2 class="text-center shadow myheader">Manage Tour Guides</h2>
	<div class="shadow-sm pull-left p-2 bg-white rounded text-muted">Total Tour guides [ {{ count($tourGuides) }} ]</div>
	<a href="{{ url('/dashboard/tourGuides/add') }}" class="btn btn-primary  pull-right">
		<i class="fa fa-plus-circle" aria-hidden="true"></i> 
		Add new tour guide
	</a>

</div>
<div class="col-12"> <hr> </div>
	{{ Form::Open(['class'=>'form-group col-4 mb-5' , 'method'=>'GET']) }}
		<input class=" shadow form-control" type="text" name="search" placeholder="search"
		 value="@if( isset($_GET['search']) ){{ $_GET['search'] }}@endif">
	{{ Form::Close() }}
	<table class="table table-hover">
	  <thead>
	    <tr class="table-dark">
	      <th scope="col">#</th>
	      <th scope="col">Name</th>
	      <th scope="col">his location</th>
	      <th scope="col">phones</th>
	      <th scope="col">Address</th>
	      <th scope="col">Gender</th>
	      <th scope="col">Action</th>


	    </tr>
	  </thead>
	  <tbody>

	  	@if(count($tourGuides) == 0)
	  		<tr>
	  			<td class="text-center " colspan="7">No data</td>
	  		</tr>
	  	@else
			@foreach($tourGuides as $key => $tourGuide)    	

		    <tr>
		      <th scope="row">{{ ++$key }}</th>
		      <td>{{ $tourGuide['name'] }}</td>
		      <td>{{ App\location::getName($tourGuide['locID']) }}</td>
		      <td>{{ $tourGuide['phone'] }}</td>
		      <td>{{ $tourGuide['address'] }}</td>

		      <td>{{ $tourGuide['gender'] }}</td>
	  	      <td>
	  	      	{{ Form::Open( ['url'=>'/dashboard/tourGuides/del'] )}}
	  		      	<a href="{{ url('/dashboard/tourGuides/edit/'.$tourGuide['id']) }}" class="btn btn-success">Edit</a>
	  		      	<input type="hidden" name="id" value="{{ $tourGuide['id'] }}">
	  		      	<input type="submit" name='del' class="btn btn-danger confirm" value="Delete">
	  	      	{{ Form::Close() }}
	  	      </td>

		    </tr>

		    @endforeach
	    @endif
	  </tbody>
	</table>


	<!-- Notification Part -->
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
<!-- ----------------------------------------- -->



@stop