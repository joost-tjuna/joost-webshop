@extends('layouts.master')
@section('content')
		<div class="row">
			<div class="col-md-5">
				<ul class="product">
					<li>
					
						<img class="product-image" src="{{asset('images/'.$product->picture)}}">
					</li>
				</ul>
			</div>
			<div class="col-md-7">
				<ul class="product">
					<li>
						<h3>{{$product->name}}</h3>
					</li>
					<li>
						<p>{{$product->description}}</p>
					</li>
					<li>
						<p>€{{$product->price}}</p>
					</li>
					@if(Auth::check())
					<li>
						<button type="button" class="btn btn-primary">Add to cart</button>
					</li>
					@endif
					<li>
						<a href="{{ URL::previous() }}" class="btn btn-secondary btn-back">Back</a>
					</li>
				</ul>
			</div>
		</div>
@endsection