<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServicesController extends Controller
{
    //
    public function index()
    {
        $cart = new Cart();
        $totalPrice = 0;
        $cartItemCount = 0;
        if (Auth::check()) {
            $status = "logIn";
            $userId = Auth::id();
            $cartItems = $cart->getAllItems($userId);
            $cartItemCount = $cart->getItemCount($userId);

            // Calculate the total price
            foreach ($cartItems as $item) {
                $totalPrice += $item->products->price * $item->quantity;
            }
        } else {
            $status = "logOut";
            $cartItems = [];
        }
        
        return view("services", [
            "allItems" => $cartItems,
            'status' => $status,
            'cartItems' => $cartItemCount,
            "totalPrice" => $totalPrice,
        ]);
    }
}
