<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ContactUsController extends Controller
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
        
        return view("contactUs", [
            "allItems" => $cartItems,
            'status' => $status,
            'cartItems' => $cartItemCount,
            "totalPrice" => $totalPrice,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullName' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]*$/'],
            'email' => 'required|string|email|max:255|unique:contact_us',
            'message' => 'required|string',
        ]);

        ContactUs::create($request->all());

        return redirect()->route('contactUs.index')->with('success', 'Your message has been sent successfully!');
    }
}
