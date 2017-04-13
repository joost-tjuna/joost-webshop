<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Order;
use Session;
use Auth;

class OrdersController extends Controller
{

    public function newSale()
    {
        if(!Session::has('cart'))
        {
            return redirect()->route('pages.shoppingCart');
        }
        $orderProducts = Session::get('cart');

        $order = new Order();
        $order->totaalbedrag = $orderProducts->totalPrice;
        $order->klant_id = Auth::user()->id;
        $order->save();
        foreach($orderProducts->items as $key => $value) {
            $order->products()->attach($key, ['qty'=> $value['qty']]);
        }

        flash('Bestelling is geplaatst', 'success');
        Session::forget('cart');
        return redirect('/');
    }
}
