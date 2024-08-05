<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThankYouController extends Controller
{
    public function index(){
        $cart = new Cart();
        $totalPrice = 0;
        $cartItemCount = 0;
        if (Auth::check()) {
            $status = "logIn";
            $userId = Auth::id();
            $cartItems = session("orderItems");
            $billingInfo = session("shipping_details");
            $paymentMethod = session("paymentMethod");

            $inCart = json_decode($cartItems); // Decode JSON string to an array

            $cart = new Cart();
            $cartItemCount = $cart->getItemCount($userId);
            $cartObject = (object) $inCart;

            // Calculate the total price
            foreach ($cartObject as $item) {
                $totalPrice += $item->products->price * $item->quantity;
            }
        } else {
            $status = "logOut";
            $cartItems = [];
        }

        return view("thankyou", [
            "allItems" => $inCart,
            'status' => $status,
            'cartItems' => $cartItemCount,
            "totalPrice" => $totalPrice,
            "paymentMethod" => $paymentMethod,
            "billingInfo" => $billingInfo,
        ]);
    }
}
