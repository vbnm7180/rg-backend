<?php

use App\Http\Resources\OrderResource;
use App\Http\Resources\ProductResource;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    return ProductResource::collection(Product::where('product_category_id',$id)->get());
});

Route::get('/product/{id}', function($id) {
    //$product = Product::where('id',$id)->get();
    //$product[0]->attributes = json_decode($product[0]->attributes, true);
    //Log::info($product);
    return new ProductResource(Product::where('id',$id)->first());
});

Route::get('/orders', function($user_id) {
    return new OrderResource(Order::where('user_id',$user_id)->get());
});

Route::post('/orders', function($data) {
    return new OrderResource(Order::create($data));
});

Route::get('/is-auth', function() {
    return response()->json(['isAuthentificated'=>Auth::check()]);
});

Route::get('/logout', function() {
    Auth::logout();
    return response()->json();
});

Route::get('/user', function() {
    return Auth::user();
});

Route::put('/update-user', function(Request $request) {
    Log::info($request);
    return User::where('id', Auth::id())->update($request->toArray());
});

