@extends('layouts.master')
@section('content')

	<div class="row">
        <div style="margin:0 auto;" class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <h1>Checkout</h1>
            <h4>Your Total: ${{ $total }}</h4>

            <form action="{{ route('checkout') }}" method="post" id="checkout-form">
            {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group checkout-input">
                            <label class="checkout-label" for="name">Name</label>
                            <input type="text" id="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group checkout-input">
                            <label class="checkout-label" for="address">Address</label>
                            <input type="text" id="address" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group checkout-input">
                            <label class="checkout-label" for="card-name">Card Holder Name</label>
                            <input type="text" id="card-name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group checkout-input">
                            <label class="checkout-label" for="card-number">Credit Card Number</label>
                            <input type="text" id="card-number" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group checkout-input">
                                    <label class="checkout-label" for="card-expiry-month">Expiration Month</label>
                                    <input type="text" id="card-expiry-month" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group checkout-input">
                                    <label class="checkout-label" for="card-expiry-year">Expiration Year</label>
                                    <input type="text" id="card-expiry-year" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group checkout-input">
                            <label class="checkout-label" for="card-cvc">CVC</label>
                            <input type="text" id="card-cvc" class="form-control" required>
                        </div>
                    </div>
                </div>
                <a href="{{ route('placeOrder') }}"  class="btn btn-success">Place Order</a>
            </form>
        </div>
    </div>

@endsection