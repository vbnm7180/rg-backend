<?php

use Illuminate\Support\Facades\Route;
use App\Http\Resources\OrderResource;
use App\Http\Resources\ProductResource;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/category/{id}', function($id) {
//     return new ProductResource(Product::where('product_category_id',$id)->get());
// });

// Route::get('/products/{id}', function($product_id) {
//     return new ProductResource(Product::where('id',$product_id)->get());
// });

// Route::get('/orders', function($user_id) {
//     return new OrderResource(Order::where('user_id',$user_id)->get());
// });

// Route::post('/orders', function($data) {
//     return new OrderResource(Order::create($data));
// });

