<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use App\Http\Resources\ProductResource;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function getProducts($id) {
        return ProductResource::collection(Product::where('product_category_id',$id)->get());
    }
    public function getProduct($id) {
        return new ProductResource(Product::where('id',$id)->first());
    }
    public function createOrder(Request $request) {
        return new OrderResource(Order::create($request->toArray()));
    }
    public function updateUser(Request $request) {
        return User::where('id', Auth::id())->update($request->toArray());
    }
    public function getUserOrders() {
        return new OrderResource(Order::where('user_id',Auth::id())->get());
    }
}
