<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index(){
        $orderHistory = Order::where('user_id',1)->get();
        return view('front.history.index',compact('orderHistory'));
    }
}
