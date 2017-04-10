@extends('layouts.master')
@section('content')
		<div class="row">
			<div class="col-md-5">
				<ul class="product">
					<li>
					
						<img class="product-image" src="{{asset('images/products/'.$product->picture)}}">
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
					@if($product->stock > 0)
						<h5>Op voorraad</h5>
						@if(Auth::check())
							<li>
								<a href="{{ route('pages.addToCart', ['id' => $product->id]) }}" class="btn btn-primary" role="button">Add to cart</a>
							</li>

								@endif
					@else
						<h5>Niet op voorraad</h5>
					@endif

					<li>
						<a href="/products" class="btn btn-secondary btn-back">Back</a>
					</li>
				</ul>
			</div>
		</div>
@endsection