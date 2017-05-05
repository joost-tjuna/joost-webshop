<?php

namespace App\Http\Controllers;

use App\Product;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Input;
use Validator;
use Redirect;
use Session;
class cmsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        foreach($products as $product){
            $product->picture_url = Storage::url($product->picture);
        }
        return view ('cms.cms_content', compact('products'));
    }

    public function newProduct()
    {
        return view('cms.cms_addProduct');

    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'picture' => 'required|image|mimes:jpeg,bmp,png',
            'description' => 'required|max:501'

        ]);

        $newProduct =  request(['name', 'stock', 'picture', 'price', 'description']);

//       $file = $request->file('picture')->store('products', 'uploads');
        $file = Storage::disk(env('STORAGE_DRIVER'))->put('public/products', $request->picture);
        $newProduct['picture'] = $file ;
        $newProduct =  Product::create($newProduct);

        session()->flash('message', 'Product toevoegen is geslaagd ');

       return redirect('/admin');


    }

    public function delete($id)
    {
        $product = Product::where('id', $id);

        $product->delete();

        flash('Product is verwijderd', 'success');

        return back();
    }

    public function adjust($id)
    {
        $product = Product::find($id);
        $picture = Storage::url($product->picture);

        return view('cms.cms_adjust', compact('product', 'picture'));
    }

    public function update(Request $request, $id)
    {
        $update = Product::find($id);

        $product = request(['name', 'stock', 'price', 'picture', 'description']);
        $update->name = $product['name'];
        $update->stock = $product['stock'];
        $update->price = $product['price'];
        if($product['picture']) {
            Storage::delete($update->picture);
            $file = Storage::disk(env('STORAGE_DRIVER'))->put('public/products', $request->picture);
            $update->picture = $file;
        }
        $update->description = $product['description'];

        flash('Product is geüpdatet', 'success');
        $update->save();
        return redirect('/admin');
    }

}
