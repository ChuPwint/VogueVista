<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Order;

class OrderHistoryController extends Controller
{
    public function index()
    {
        $status = Auth::check() ? "logIn" : "logOut";

        if (Auth::check()) {
            Log::info('User is logged in', ['user' => Auth::user()]);
        } else {
            Log::info('User is not logged in', ['info' => $status]);
        }

        Log::info('Logged In Status:', ['info' => $status]);

        $orders = Auth::check() ? Auth::user()->orders()->orderBy('order_date', 'desc')->get() : [];

        return view('orderHistory', [
            'status' => $status,
            'orders' => $orders
        ]);
    }
}
