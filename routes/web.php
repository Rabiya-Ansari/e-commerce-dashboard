<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\EController;
use App\Http\Controllers\OrderController;



Route::get('/', function () {
    return view('UI.index');
});

Route::get('/categories', [EController::class, 'indexCat']);
Route::get('/products', [EController::class, 'indexPro']);


/*
|--------------------------------------------------------------------------
| Categories Routes
|--------------------------------------------------------------------------
*/
Route::get('/addCategories', function () {
    return view('addCategories');
});

Route::post('/addCategories', [CategoryController::class, 'addCategories']);

Route::get('/viewCategories', [CategoryController::class, 'getCategory']);

Route::get('/updateCategory/{id}', [CategoryController::class, 'updateCategories']);

Route::post('/updatingCategory/{id}', [CategoryController::class, 'updatingCategories']);

Route::get('/deleteCategories/{id}', [CategoryController::class, 'deleteCategories']);


/*
|--------------------------------------------------------------------------
| Products Routes
|--------------------------------------------------------------------------
*/
Route::get('/addProducts', function () {
    return view('addProducts');
});

Route::post('/addProducts', [ProductController::class, 'addProducts']);

Route::get('/viewProducts', [ProductController::class, 'getProduct']);

Route::get('/updateProducts/{id}', [ProductController::class, 'updateProducts']);

Route::post('/updatingProducts/{id}', [ProductController::class, 'updatingProduct']);

Route::get('/deleteProducts/{id}', [ProductController::class, 'deleteProduct']);


/*
|--------------------------------------------------------------------------
| Cart Routes
|--------------------------------------------------------------------------
*/
Route::post('/addtocart', [CartController::class, "addToCart"]);
Route::get('/cart', [CartController::class, "getCartData"]);
Route::get('/removeitem/{id}', [CartController::class, "deleteCartItem"]);

/* Checkout */
Route::get('/checkout',[OrderController::class,'checkout']);
Route::post('/place-order',[OrderController::class,'placeOrder']);


// Route::get('checkout',function(){
//     return view('UI.checkout');
// });




/*
|--------------------------------------------------------------------------
| Orders
|--------------------------------------------------------------------------
*/
Route::get('/allOrders', function () {
    return view('allorders');
});

Route::get('/pendingOrders', function () {
    return view('pendingOrders');
});


/*
|--------------------------------------------------------------------------
| Dashboard / Auth
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
