@extends('layouts.master')
@section('content')
		<div class="row">
			<div class="col-md-5">
				<ul class="product">
					<li>
						<img class="product-image" src="/images/nasa.jpg">
					</li>
				</ul>
			</div>
			<div class="col-md-7">
				<ul class="product">
					<li>
						<h3>Product title</h3>
					</li>
					<li>
						<p>Product descriptionLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.</p>
					</li>
					<li>
						<p>Price: 50€</p>
					</li>
					<li>
						<button type="button" class="btn btn-primary">Add to cart</button>
					</li>
					<li>
						<button class="btn btn-secondary btn-back" onclick="window.location.href='/products'">Back</button>
					</li>
				</ul>
			</div>
		</div>
@endsection