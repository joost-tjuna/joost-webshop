@extends('layouts.master')
@section('content')

	@if(Session::has('cart'))
		@if($products !== [])
			<div class="row">
				<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 center">		
					<h2>Winkelmandje</h2>
						<ul class="list-group">
							@foreach($products as $product)
								<li class="list-group-item hallo-test">
									<strong>{{ $product['item']['name'] }} </strong>
									<span  style="margin: 0 auto;" class="lable lable-success">€{{ $product['price'] }}</span>
									<span class="label-as-badge">aantal: {{ $product['qty'] }}</span>
									<div class="btn-group btn-dropdown">
										<button type="button" class="btn btn-primary btn-xs drowpdown-toggle" data-toggle="dropdown">Action  <i class="fa fa-arrow-down" aria-hidden="true"></i></button>
										<ul class="dropdown-menu">
											<li><a href="{{ route('pages.reduceByOne', ['id' => $product['item']['id']]) }}">Reduce by 1</a></li>
											<li><a href="{{ route('pages.remove', ['id' => $product['item']['id']]) }}">Remove all</a></li>
										</ul>
									</div>
								</li>
							@endforeach
						</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 center">
				<strong>totaal: {{ $totalPrice }}</strong>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 center">
					<a href="{{ route('placeOrder') }}"  class="btn btn-success">Checkout</a>
				</div>
			</div>
		@else
			<div class="row">
				<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 center">
					<h2>No items in cart!</h2>
				</div>
			</div>
		@endif
	@else
	<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 center">
				<h2>No items in cart!</h2>
			</div>
		</div>
	@endif

@endsection