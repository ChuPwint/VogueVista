<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Products;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ShopController extends Controller
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

        $product = new Products();
        $allProduct = $product->showPaginate();
        //product count
        $count = count($product->showAll());

        $wishlist = new Wishlist();
        $allWishlists = $wishlist->getAllWishlistedItems(Auth::id());

        // Extract only product IDs
        if($allWishlists->isNotEmpty())
            $wishlistProductIds = $allWishlists->pluck('product_id')->toArray();
        else
            $wishlistProductIds = [];

        // dd($allWishlists);
        return view("/shop", [
            'status' => $status,
            'cartItems' => $cartItems,
            'products' => $allProduct,
            'count' => $count,
            "wishlists" => $wishlistProductIds,
        ]);
    }

    /**
     * Sort the products
     */
    public function sortProducts(Request $request)
    {
        $sortValue = $request->sortBy;
        $productModel = new Products();
        if ($sortValue == "Lowest Price") {
            $products = $productModel->sortByLowestPrice();
        } else if ($sortValue == "Highest Price") {
            $products = $productModel->sortByHighestPrice();
        } else if ($sortValue == "Newest") {
            $products = $productModel->sortByNewest();
        } else {
            $products = $productModel->sortByLowestPrice();
        }

        return response()->json([
            'products' => $products,
            'links' => (string) $products->links(),
        ]);
    }
}
