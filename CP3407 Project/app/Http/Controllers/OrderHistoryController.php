<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Products;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class OrderHistoryController extends Controller
{
    public function index()
    {
        $status = "logOut";
        $cartItems = 0;
        $orders = [];

        if (Auth::check()) {
            $status = "logIn";
            $cart = new Cart();
            $cartItems = $cart->getItemCount(Auth::id());

            $order = new Order();
            $allOrder = $order->getAllOrder(Auth::id());
            // dd(Auth::id());
            // dd($allOrder);
            // dd($allOrder[0]->id);
            $orderDetail = new OrderDetail();
            $orderHistory = $orderDetail->getAllOrderDetails($allOrder[0]->id);
            // dd($orderHistory[0]);
            // dd($orderHistory[0]->product->pname);
        }

        return view('orderHistory', [
            'status' => $status,
            'cartItems' => $cartItems,
            'orders' => $allOrder,
            'orderDetails' => $orderHistory,
        ]);
    }
}
