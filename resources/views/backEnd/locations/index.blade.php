@extends('backEnd.temps.app')

@section('map')
	
@stop
@section('content')
<div id="mapadd">
		<div id="form" style="width: 50%;float: left;">
			<form method="post" action="">
			<label for="cname">City:</label><br>
		    <input type="text" id="cname" name="cname" placeholder="City">

		    <label for="nname">Nickname:</label><br>
		    <input type="text" id="nname" name="nickname" placeholder="Nickname">

		    <label for="description">Description:</label><br>
		    <input type="text" id="description" name="description" placeholder="Description">

		    <label for="Xcoordinate">X:</label><br>
			<input type="text" id="Xcoordinate" name="Xcoordinate" value="" placeholder="X Coordinate" disabled>

			<label for="Ycoordinate">Y:</label><br>

			<input type="text" id="Ycoordinate" name="Ycoordinate" value="" placeholder="Y Coordinate" disabled><br>
			<input type="submit" name="" value="Add" class="sub">
			</form>
		</div>


		<div style="width: 50%;float: right;">
			@php
				$temp = url('backEnd/assets/img/egypt.PNG');
			@endphp

			<div class="map"  onclick="showaxis()" style=" background-image: url('{{  $temp }}');">
					<div class="Location" id="temp">
					<i class="material-icons" style="font-size: 40px" >place</i>
					</div>
				</div>

		</div>
	</div>
@stop