<?php

use App\Http\Resources\OrderResource;
use App\Http\Resources\ProductResource;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/category/{id}', function($id) {
    return new ProductResource(Product::where('product_category_id',$id)->get());
});

Route::get('/product/{id}', function($id) {
    $product = Product::where('id',$id)->get();
    $product[0]->attributes = json_decode($product[0]->attributes, true);
    return new ProductResource($product);
});

Route::get('/orders', function($user_id) {
    return new OrderResource(Order::where('user_id',$user_id)->get());
});

Route::post('/orders', function($data) {
    return new OrderResource(Order::create($data));
});

