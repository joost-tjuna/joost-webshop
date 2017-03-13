@extends('layouts.master')
@section('content')
	<!DOCTYPE html>
	<html>
	<head>
		<title>About us</title>
	</head>
	<body>
		<div class="row">
			<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
			<div style='overflow:hidden;height:400px;width:700px;'><div id='gmap_canvas' style='height:400px;width:500px; float:left;'></div>
				<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
			</div>
				<script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(52.3963975157086,4.65636956616208),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(52.3963975157086,4.65636956616208)});infowindow = new google.maps.InfoWindow({content:'<strong>Tjuna</strong><br>tappersweg 12w<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
				<div class="contact-form">
					<form method="POST" action="/register">

						{{csrf_field()}}

						<label for="name">Name:</label>

						<input style="width:500px;" type="text" class="form-control" id="name" name="name" required>

						<label for="email">Email:</label>

						<input type="email" class="form-control" id="email" name="email" required>

						<label for="text">Question:</label>

						<textarea style="height:100px;" type="text" class="form-control" id="quest" name="quest" required></textarea> 

						<br>

						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>

		</div>

	</body>
	</html>
@endsection