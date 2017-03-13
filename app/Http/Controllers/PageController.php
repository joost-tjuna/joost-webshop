<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aboutUs(){
    	return view('pages.about-us');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function index()
    {
        return view('pages.content');
    }

    public function show()
    {
        return view('pages.products');
    }

    public function showProduct()
    {
        return view('pages.product');
    }
}
