<?php

namespace App\Http\Controllers;

use App\Product;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Input;
use Validator;
use Redirect;
use Session;
class cmsController extends Controller
{

    public function store(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'picture' => 'required|image|mimes:jpeg,bmp,png',
            'description' => 'required|max:190'

        ]);

        $newProduct =  request(['name', 'stock', 'price', 'picture', 'description']);
        $file = $request->file('picture')->store('products', 'uploads');
        $newProduct['picture'] = $file ;
        $newProduct =  Product::create($newProduct);


       return redirect('/admin');


    }

    public function delete($id)
    {
        $product = App\Product::find($id);

        $product->delete();

        return back();
    }

}
