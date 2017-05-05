<?php

namespace App\Http\Controllers;

use App\Cart;
use App\new_products;
use App\Order;
use Illuminate\Http\Request;
use App\Product;

use Illuminate\Support\Facades\Storage;
use Session;
use Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        foreach($products as $product){
            $product->picture_url = Storage::url($product->picture);
        }
        return view ('pages.products', compact('products'));
    }

    public function show($id)
    {
    	$product = Product::find($id);
    	$picture = Storage::url($product->picture);

        return view('pages.product', compact('product', 'picture'));
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

    public function getReduceByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart'): null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        Session::put('cart', $cart);
        return redirect()->route('pages.shopping-cart');
    }

    public function getRemoveItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart'): null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
 
        Session::put('cart', $cart);
        return redirect()->route('pages.shopping-cart');
    }

    public function getCart()
    {

        if(!Session::has('cart'))
        {
            return view('pages.shopping-cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('pages.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);


    }

    public function getCheckout()
    {
        if(!Session::has('cart'))
        {
            return view('pages.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('pages.checkout', ['total' => $total]);
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }


}
