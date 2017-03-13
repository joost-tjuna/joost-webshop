@extends('layouts.master')

@section('content')

	<div class="row">
	<div class="product">
		<ul class="product-list">
			<li onclick="location.href='/products/product';">
				<img src="images/kitty.jpg">
				<h2>First product</h2>
				<p>this is a fun description to fill the page with some text</p>
				<p>Price: 14,95€</p>
				<h5>In stock</h5>
			</li>
			
			<li onclick="location.href='/products/product';">
				<img src="images/kitty.jpg">
				<h2>second product</h2>
				<p>this is a fun description to fill the page with some text</p>
				<p>Price: 14,95€</p>
				<h5>In stock</h5>
			</li>
			
			<li onclick="location.href='/products/product';">
				<img src="images/kitty.jpg">
				<h2>third product</h2>
				<p>this is a fun description to fill the page with some text</p>
				<p>Price: 14,95€</p>
				<h5>In stock</h5>
			</li>
			
			<li onclick="location.href='/products/product';">
				<img src="images/kitty.jpg">
				<h2>fourth product</h2>
				<p>this is a fun description to fill the page with some text</p>
				<p>Price: 14,95€</p>
				<h5>In stock</h5>
			</li>
			<li onclick="location.href='/products/product';">
				<img src="images/kitty.jpg">
				<h2>fourth product</h2>
				<p>this is a fun description to fill the page with some text</p>
				<p>Price: 14,95€</p>
				<h5>In stock</h5>
			</li>
			
		</ul>
		
	</div>
	</div>

@endsection