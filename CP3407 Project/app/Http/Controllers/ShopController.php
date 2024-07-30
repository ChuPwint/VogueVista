<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Products;
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

        // dd($cartItems);
        $product = new Products();
        $allProduct = $product->showPaginate();
        //product count
        $count = count($product->showAll());

        // dd($count);
        // dd($allProduct[0]->category_id);

        return view("/shop", [
            'status' => $status,
            'cartItems' => $cartItems,
            'products' => $allProduct,
            'count' => $count,
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
