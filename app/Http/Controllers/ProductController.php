<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Categories;


class ProductController extends Controller
{
    public function addCategories(Request $req)
    {
        $users = new Categories();
        $users->categories_name = $req->name;
        $users->category_description = $req->description;

        $users->save();

        return redirect('/viewCategories');
    }


    public function getCategory()
    {
        $users = new Categories();
        $data = $users::all();
        return view('viewCategories', compact('data'));
    }

    public function updateCategories($id)
    {
        $users = new Categories();
        $data = $users::find($id);

        return view("updateCategory", compact("data"));
    }

    public function updatingCategories(Request $req, $id)
    {
        $users = Categories::find($id);

        $users->categories_name = $req->name;
        $users->category_description = $req->description;

        $users->save();

        return redirect("/viewCategories");
    }

    public function deleteCategories($id)
    {
        $users = Categories::find($id);
        $users->delete();

        return redirect("/viewCategories");
    }


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
        $data = $users::all();
        return view('UI.index', compact('data'));
    }

     public function fetchCategory(){
        $users = new Categories();
        $data = $users::all();
        return view('UI.index', compact('data'));
    }

}
