<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

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
}
