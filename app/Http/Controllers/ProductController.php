<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Categories;


class ProductController extends Controller
{
    public function addCategories(Request $req)
    {
        $variable = new Categories();
        $variable->categories_name = $req->name;
        $variable->category_description = $req->description;

        $variable->save();

        return redirect('/viewCategories');
    }


    public function getCategory()
    {
        $variable = new Categories();
        $data = $variable::all();
        return view('viewCategories', compact('data'));
    }

    public function updateCategories($id)
    {
        $variable = new Categories();
        $data = $variable::find($id);

        return view("updateCategory", compact("data"));
    }

    public function updatingCategories(Request $req, $id)
    {
        $variable = Categories::find($id);

        $variable->categories_name = $req->name;
        $variable->category_description = $req->description;

        $variable->save();

        return redirect("/viewCategories");
    }

    public function deleteCategories($id){
        $variable= Categories::find($id);
        $variable->delete();

        return redirect("/viewCategories");
    }

    public function addProducts(Request $req)
    {
        $variable = new Products();
        $variable->product_name = $req->name;
        $variable->price = $req->price;
        $variable->quantity = $req->quantity;
        $variable->detail = $req->details;

        $variable->save();

        return redirect('/viewProducts');
    }

    public function getProduct()
    {
        $variable = new Products();
        $data = $variable::all();
        return view('viewProducts', compact('data'));
    }
}
