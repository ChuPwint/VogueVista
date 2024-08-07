<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Wishlist;
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
        $cart = new Cart();
        $cartItemCount = 0;
        if (Auth::check()) {
            $status = "logIn";
            $userId = Auth::id();
            $cartItemCount = $cart->getItemCount($userId);

            $wishlist = new Wishlist();
            $wishlists = $wishlist->getAllWishlistedItems($userId);
            
        } else {
            $status = "logOut";
        }

        return view("favorites", [
            'status' => $status,
            'cartItems' => $cartItemCount,
            'wishlists' => $wishlists
        ]);
    }

    public function store(Request $request){
        // dd($request);
        $wishlist = new Wishlist();
        $itemExists = $wishlist->checkItem(Auth::id(), $request->productId);

        if($itemExists->isNotEmpty()){
            if($itemExists[0]->del_flg == 0)
                $wishlist->removeWishlistItem(Auth::id(), $request->productId);
            else
                $wishlist->reAddWishlistItem(Auth::id(), $request->productId);
        }else{
            $wishlist->addWishlistItem(Auth::id(), $request->productId);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id, "in destroy");
        $wishlist = new Wishlist();
        $wishlist->removeWishlistItem(Auth::id(), $id);
        return redirect()->route("favorites.index");
    }
}
