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
    public function index()
    {
        $products = Product::all();

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

        $newProduct =  request(['name', 'stock', 'price', 'picture', 'description']);
        $file = $request->file('picture')->store('products', 'uploads');
        $newProduct['picture'] = $file ;
        $newProduct =  Product::create($newProduct);

        session()->flash('message', 'Product successfully added');

       return redirect('/admin');


    }

    public function delete($id)
    {
        $product = Product::where('id', $id);

        $product->delete();

        flash('Product has been deleted', 'success');

        return back();
    }

    public function adjust($id)
    {
        $product = Product::find($id);

        return view('cms.cms_adjust', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $update = Product::find($id);

        $product = request(['name', 'stock', 'price', 'picture', 'description']);
        $update->name = $product['name'];
        $update->stock = $product['stock'];
        $update->price = $product['price'];
        if($product['picture']) {
            unlink(public_path() .'/images/'. $update->picture);
            $file = $request->file('picture')->store('products', 'uploads');
            $update->picture = $file;
        }
        $update->description = $product['description'];


        $update->save();
        return redirect('/admin');
    }

}
