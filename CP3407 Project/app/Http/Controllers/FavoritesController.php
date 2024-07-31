<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class FavoritesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $product = new Products();
    //     $allProduct = $product->showAll();
    //     return view("/favorites", [
    //         "product" => $allProduct
    //     ]);
    // }

    public function index()
    {
        $status = Auth::check() ? "logIn" : "logOut";

        if (Auth::check()) {
            Log::info('User is logged in', ['user' => Auth::user()]);
        } else {
            Log::info('User is not logged in', ['info' => $status]);
        }

        Log::info('Logged In Status:', ['info' => $status]);

        return view('favorites', [
            'status' => $status,
        ]);
    }
}
