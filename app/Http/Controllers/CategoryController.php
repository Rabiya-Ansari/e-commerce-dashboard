<?php

namespace App\Http\Controllers;
use App\Models\Categories;

use Illuminate\Http\Request;

class CategoryController extends Controller
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

     public function fetchCategory(){
        $users = new Categories();
        $data = $users::all();
        return view('UI.index', compact('data'));
    }

}
