@extends('backEnd.temps.app')
@section('content')

<div class="col-12">
	<h2 class="text-center shadow myheader">Manage users</h2>
	<div class="shadow-sm pull-left p-2 bg-white rounded text-muted">Total Users [ {{ count($users) }} ]</div>
	<a href="{{ url('/dashboard/users/add') }}" class="btn btn-primary  pull-right">
		<i class="fa fa-plus-circle" aria-hidden="true"></i> 
		Add new user
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
	      <th scope="col">phone</th>
	      <th scope="col">email</th>
	      <th scope="col">action</th>

	    </tr>
	  </thead>
	  <tbody>

	  	@if(count($users) == 0)
	  		<tr>
	  			<td class="text-center " colspan="5">No data</td>
	  		</tr>
	  	@else
			@foreach($users as $key => $user)    	

		    <tr>
		      <th scope="row">{{ ++$key }}</th>
		      <td>{{ $user['name'] }}</td>
		      <td>{{ $user['phone'] }}</td>
		      <td>{{ $user['email'] }}</td>
	  	      <td>
	  	      	{{ Form::Open( ['url'=>'/dashboard/users/del'] )}}
	  		      	<a href="{{ url('/dashboard/users/edit/'.$user['id']) }}" class="btn btn-success">Edit</a>
	  		      	<input type="hidden" name="id" value="{{ $user['id'] }}">
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