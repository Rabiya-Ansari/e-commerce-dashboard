<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Categories;


class ProductController extends Controller
{
    public function addCategories(Request $req)
    {
        $category = new Categories();
        $category->categories_name = $req->name;
        $category->category_description = $req->description;

        $category->save();

        return redirect('/viewCategories');
    }


    public function getCategory()
    {
        $category = new Categories();
        $data = $category::all();
        return view('viewCategories', compact('data'));
    }

    public function updateCategories($id)
    {
        $category = new Categories();
        $data = $category::find($id);

        return view("updateCategory", compact("data"));
    }

    public function updatingCategories(Request $req, $id)
    {
        $category = Categories::find($id);

        $category->categories_name = $req->name;
        $category->category_description = $req->description;

        $category->save();

        return redirect("/viewCategories");
    }


    public function addProducts(Request $req)
    {
        $category = new Products();
        $category->product_name = $req->name;
        $category->price = $req->price;
        $category->quantity = $req->quantity;
        $category->detail = $req->details;

        $category->save();

        return redirect('/viewProducts');
    }

    public function getProduct()
    {
        $category = new Products();
        $data = $category::all();
        return view('viewProducts', compact('data'));
    }
}
