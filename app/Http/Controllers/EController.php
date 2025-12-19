<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;

class EController extends Controller
{
    public function indexCat()
{
    $data  = Categories::all();

    return view('UI.categories', compact('data'));
}


 public function indexPro()
{
    $data  = Products::all();

    return view('UI.products', compact('data'));
}
}