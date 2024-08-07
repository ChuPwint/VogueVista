<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cart;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
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

        return view('userProfile', [
            'status' => $status,
            'cartItems' => $cartItems,
            'products' => $allProduct,
            'count' => $count,
        ]);
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->postcode = $request->postcode;
        $user->save();

        return redirect()->route('userProfile');
    }

    public function updateImage(Request $request)
    {
        $request->validate([
            'profile_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = Auth::user();

        if ($request->hasFile('profile_image')) {
            if ($user->profile && Storage::exists($user->profile)) {
                Storage::delete($user->profile);
            }

            $path = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile = $path;
            $user->save();

            return response()->json(['success' => true, 'image_url' => Storage::url($path)]);
        }

        return response()->json(['success' => false, 'message' => 'No image uploaded']);
    }

    public function removeImage()
    {
        $user = Auth::user();

        if ($user->profile && Storage::exists($user->profile)) {
            Storage::delete($user->profile);
        }

        $user->profile = null;
        $user->save();

        return response()->json(['success' => true]);
    }
}
