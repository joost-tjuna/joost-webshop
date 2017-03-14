@extends('layouts.master')

@section('content')

	<div class="row">
	<div class="product">
		<ul class="product-list">
		@foreach($products as $product)
			<li class="col-md-6" onclick="location.href='/products/{{$product->id}}';">
				<img src="{{asset('images/'.$product->picture)}}">
				<h2>{{$product->name }}</h2>
				<p>{{$product->description }}</p>
				<p>€{{$product->price }}</p>
				@if($product->stock > 0)
					<h5>Op voorraad</h5>
				@else
					<h5>Niet op voorraad</h5>
				@endif
			</li>
		@endforeach
		</ul>
		
	</div>
	</div>

@endsection