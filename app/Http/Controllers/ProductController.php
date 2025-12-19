<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;


class ProductController extends Controller
{
   


    /* ---------------------------------------
   |   PRODUCTS CRUD
   ----------------------------------------*/

    public function addProducts(Request $req)
    {
        $users = new Products();
        $users->product_name = $req->name;
        $users->price = $req->price;
        $users->quantity = $req->quantity;
        $users->detail = $req->details;

        $users->save();

        return redirect('/viewProducts');
    }

    public function getProduct()
    {
        $users = new Products();
        $data = $users::all();
        return view('viewProducts', compact('data'));
    }

    public function updateProducts($id)
    {
        $users = new Products();
        $data = $users::find($id);

        return view("updateProducts", compact("data"));
    }

    public function updatingProduct(Request $req, $id)
    {
        $users = Products::find($id);

        $users->product_name = $req->name;
        $users->quantity = $req->quantity;
        $users->price = $req->price;
        $users->detail = $req->detail;

        $users->save();

        return redirect("/viewProducts");
    }

    public function deleteProduct($id)
    {
        $users = Products::find($id);
        $users->delete();

        return redirect("viewProducts");
    }

    public function fetchProducts(){
        $users = new Products();
        $data1 = $users::all();
        return view('UI.index', compact('data1'));
    }

    

}