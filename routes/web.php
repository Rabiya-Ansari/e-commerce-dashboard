<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/index', function() {
    return view('UI.index');
});

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/addCategories', function () {
    return view('addCategories');
});
Route::post('/addCategories', [ProductController::class,'addCategories']);

Route::get('/viewCategories', function () {
    return view('viewCategories');
});

Route::get('viewCategories', [ProductController::class,'getCategory']);

Route::get('/updateCategory/{id}', [ProductController::class, "updateCategories"]);

Route::post('/updatingCategory/{id}', [ProductController::class, "updatingCategories"]);

Route::get('/deleteCategories/{id}', [ProductController::class, "deleteCategories"]);



 /* ---------------------------------------
    |   PRODUCTS ROUTE
    ----------------------------------------*/

Route::get('/addProducts', function () {
    return view('addProducts');
});

Route::post('/addProducts',[ProductController::class,'addProducts']);

Route::get('/viewProducts', function () {
    return view('viewProducts');
});

Route::get('viewProducts',[ProductController::class,'getProduct']);

Route::get('/updateProducts/{id}', [ProductController::class, "updateProducts"]);

Route::post('/updatingProducts/{id}', [ProductController::class, "updatingProduct"]);

Route::get('/deleteProducts/{id}',[ProductController::class,'deleteProduct']);

/* ---------------------------------------
    |   All order / Pending orders
    ----------------------------------------*/

Route::get('/allOrders', function(){
    return view('allorders');
});

Route::get('/pendingOrders', function(){
    return view('pendingOrders');
});