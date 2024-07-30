<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    //
    public function index()
    {
        $status = "logOut";

        if (Auth::check()) {
            $status = "logIn";
            $cart = new Cart();
            $cartItems = $cart->getItemCount(Auth::id());
        } else {
            $status = "logOut";
            $cartItems = 0;
        }

        return view("home", [
            'status' => $status,
            'cartItems' => $cartItems,
        ]);
    }
}
