<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Products;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    //
    public function index()
    {
        $status = "logOut";
        $wishlistProductIds = [];

        if (Auth::check()) {
            $status = "logIn";
            $cart = new Cart();
            $cartItems = $cart->getItemCount(Auth::id());
            $wishlist = new Wishlist();
            $allWishlists = $wishlist->getAllWishlistedItems(Auth::id());

            // Extract only product IDs
            if ($allWishlists->isNotEmpty()) {
                $wishlistProductIds = $allWishlists->pluck('product_id')->toArray();
            }
        } else {
            $status = "logOut";
            $cartItems = 0;
        }
        $product = new Products();
        $newArrivals = $product->showThreeNewArrivals();
        // dd($newArrivals);

        return view("home", [
            'status' => $status,
            'cartItems' => $cartItems,
            'newArrivals' => $newArrivals,
            'wishlists' => $wishlistProductIds,
        ]);
    }
}
