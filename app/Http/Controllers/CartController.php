<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $req){
        $myCart = new Cart();

        $myCart->item = $req->item;
        $myCart->price = $req->price;
        $myCart->detail = $req->detail;

        $myCart->save();

        return redirect("/products");
    }

    public function getCartData(){
        $cartData = new Cart();
        $cart = $cartData::all();

        return view("UI.cart", compact("cart"));
    }

    public function deleteCartItem($id){
        $cartData = Cart::find($id);

        $cartData->delete();

        return redirect("/cart");
    }
}
