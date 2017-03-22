@extends('layouts.master')

@section('content')

	<div class="row">
	<div class="product">
		<table class="product-list">
		@foreach($products as $product)
			<tr class="table-product product-list" onclick="location.href='/products/{{$product->id}}';">
				<th>
					<img src="{{asset('images/'.$product->picture)}}">
					<h2>{{$product->name }}</h2>
					<p class="description">{{$product->description }}</p>
					<p>€{{$product->price }}</p>
					@if($product->stock > 0)
						<h5>Op voorraad</h5>
					@else
						<h5>Niet op voorraad</h5>
					@endif
				</th>
			</tr>
		@endforeach
		</table>
		
	</div>
	</div>

@endsection