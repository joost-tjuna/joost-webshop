<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\Product;

use Session;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view ('pages.products', compact('products'));
    }

    public function show($id)
    {
    	$product = Product::find($id);

        return view('pages.product', compact('product'));
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }
}
