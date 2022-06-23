<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

Route::get('/category/{id}', [ApiController::class,'getProducts']);

Route::get('/product/{id}', [ApiController::class,'getProduct']);

Route::get('/orders', [ApiController::class,'getUserOrders']);

Route::post('/create-order', [ApiController::class,'createOrder']);

Route::put('/update-user', [ApiController::class,'updateUser']);

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
