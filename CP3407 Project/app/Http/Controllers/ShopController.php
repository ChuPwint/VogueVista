<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Products;
use App\Models\SubCategory;
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
        return $this->showProducts();
    }

    /**
     * Display women products
    */
    public function showWomenProducts(){
        return $this->showProducts(1);
    }

    /**
     * Display men products
    */
    public function showMenProducts(){
        return $this->showProducts(2);
    }

    /**
     * Display accessory products
    */
    public function showAccessoryProducts(){
        return $this->showProducts(3);
    }

    public function showWomenTopProducts(){
        return $this->showProducts(null, 1);
    }

    public function showWomenShortsProducts(){
        return $this->showProducts(null, 2);
    }

    public function showMenTopProducts(){
        return $this->showProducts(null, 3);
    }

    public function showMenShortsProducts(){
        return $this->showProducts(null, 4);
    }

    public function showJewelryProducts(){
        return $this->showProducts(null, 5);
    }

    public function showBagProducts(){
        return $this->showProducts(null, 6);
    }

    /**
     * Display products related to a specific main category or all products if no category is provided.
     */
    public function showProducts($mainCategoryId = null, $subCatId = null)
    {
        $status = "logOut";
        $cartItems = 0;
        if (Auth::check()) {
            // dd("in if");
            $status = "logIn";
            $cart = new Cart();
            $cartItems = $cart->getItemCount(Auth::id());
            // dd($cartItems);
        }


        $product = new Products();
        $subCatClass = new SubCategory();

        // Check if a main category ID is provided
        if ($mainCategoryId != null) {
            // Fetch subcategories for the given main category
            $subCatClass = new SubCategory();
            $subCategories = $subCatClass->getSubCategories($mainCategoryId);
            $subCategoryArray = $subCategories->pluck('id');
            // dd($subCategoryArray);

            // Fetch products related to these subcategories
            $products = $product->showCatPaginate($subCategoryArray);
        } else if($subCatId != null){
            // dd("here");
            //Fetch products
            $products = $product->showCatPaginateBySubId($subCatId);
        } else {
            // Fetch all products
            $products = $product->showPaginate();
        }

        // Product count
        $count = $products->total();

        $wishlist = new Wishlist();
        $allWishlists = $wishlist->getAllWishlistedItems(Auth::id());

        // Extract only product IDs
        if ($allWishlists->isNotEmpty()) {
            $wishlistProductIds = $allWishlists->pluck('product_id')->toArray();
        } else {
            $wishlistProductIds = [];
        }

        return view("shop", [
            'status' => $status,
            'cartItems' => $cartItems,
            'products' => $products,
            'count' => $count,
            'wishlists' => $wishlistProductIds,
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
