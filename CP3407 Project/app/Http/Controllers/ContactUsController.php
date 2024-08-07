<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cart;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ContactUsController extends Controller
{
    //
    public function index()
    {
        $status = "logOut";
        $cartItems = 0;
        if (Auth::check()) {
            $status = "logIn";
            $cart = new Cart();
            $cartItems = $cart->getItemCount(Auth::id());
        }

        $product = new Products();
        $allProduct = $product->showPaginate();
        $count = count($product->showAll());

        return view('contactUs', [
            'status' => $status,
            'cartItems' => $cartItems,
            'products' => $allProduct,
            'count' => $count,
        ]);
    }

    public function store(Request $request)
    {
        $status = "logOut";
        $others = "string";
        Log::alert("not logged in", ["info" => $status]);

        if (Auth::check()) {
            $status = "logIn";
            Log::info('User is logged in', ['user' => Auth::user()]);
        } else {
            Log::info('User is not logged in', ["info" => $status]);
            $status = "logOut";
            Log::info('User is not logged in', ["info" => $status]);

        }

        Log::info('Logged In Status:', ['info' => $status]);
        Log::alert("after", ["info" => $status]);

        $request->validate([
            'fullName' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]*$/'],
            'email' => 'required|string|email|max:255|unique:contact_us',
            'message' => 'required|string',
        ]);

        ContactUs::create($request->all());

        return redirect()->route('contactUs.index')->with('success', 'Your message has been sent successfully!');
    }
}
