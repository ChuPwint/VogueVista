<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class FavoritesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $status = "logOut";
        $cartItems = 0;
        if (Auth::check()) {
            $status = "logIn";
            $cart = new Cart();
            $cartItems = $cart->getItemCount(Auth::id());
        }

        return view("/favorites", [
            'status' => $status,
            'cartItems' => $cartItems
        ]);
    }
}
