<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        
        return view("cart", [
            "allItems" => $cartItems,
            'status' => $status,
            'cartItems' => $cartItemCount,
            "totalPrice" => $totalPrice,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productId = $request->productId;
        $quantity = $request->quantity;
        // dd($quantity);

        $cart = new Cart();
        $userId = Auth::id();
        // dd($userId);
        $checkItemExists = $cart->checkItem($userId, $productId);
        // dd($checkItemExists->quantity);
        if ($checkItemExists) {
            $quantity = $checkItemExists->quantity;
            $cart->updateItemQty($userId, $productId, $quantity);
        } else {
            $cart->addToCart($userId, $productId, $quantity);
        }
        return redirect()->back();
        // return response()->json(['message' => 'Product added to cart']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request, $id);
        $cart = new Cart();
        if($request->action == "increase"){
            $cart->updateItemQty(Auth::id(), $id, $request->qty);
        }else if($request->action == "decrease"){
            $cart->reduceItemQty(Auth::id(), $id, $request->qty);
        }
        return redirect()->route("cart.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id, "in destroy");
        $cart = new Cart();
        $cartItem = $cart->checkItem(Auth::id(), $id);
        if($cartItem){
            $cart->deleteItem(Auth::id(), $id);
        }
        // dd($cartItem);
        return redirect()->route("cart.index");
    }
}
