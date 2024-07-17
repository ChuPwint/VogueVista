<?php

namespace App\Http\Controllers;

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
        $product = new Products();
        $allProduct = $product->showPaginate();
        $count = count($product->showAll());
        // dd($count);
        // dd($allProduct[0]->category_id);
        return view("/shop", [
            'status' => $status,
            'products' => $allProduct,
            'count' => $count,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function sortProducts(Request $request)
    {
        return response()->json(['message' => 'route found.']);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
