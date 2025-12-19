<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout(){
        $cart =Cart::all();
        $total = Cart::sum('price');

        return view('ui.checkout',compact('cart','total'));
    }

    public function placeOrder(Request $req){
        $order = new Order();

        $order->name = $req->name;
        $order->phone = $req->phone;
        $order->address = $req->address;
        $order->total_amount = $req->total;

        $order->save();

        Cart::truncate();

        return redirect('/products');
    }

}
