<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = new Products();
        $allProduct = $product->showPaginate();
        $count = count($product->showAll());
        // dd($count);
        // dd($allProduct[0]->category_id);
        return view("/shop", [
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
