<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'del_flg'
    ];

    public function product()
    {
        return $this->belongsTo(Products::class);
    }


    public function getAllWishlistedItems($userId){
        return Wishlist::where("user_id", $userId)
                        ->where("del_flg", 0)
                        ->with('product:id,pname,price,p_photo,size,stock')
                        ->get();
    }

    public function checkItem($userId, $productId){
        return Wishlist::where("user_id", $userId)
                        ->where("product_id", $productId)->get();
    }

    public function addWishlistItem($userId, $productId){
        return Wishlist::create([
            "user_id" => $userId,
            "product_id" => $productId,
        ]);
    }

    public function removeWishlistItem($userId, $productId){
        return Wishlist::where("user_id", $userId)
                ->where("product_id", $productId)
                ->update(["del_flg" => 1]);
    }

    public function reAddWishlistItem($userId, $productId){
        return Wishlist::where("user_id", $userId)
                ->where("product_id", $productId)
                ->update(["del_flg" => 0]);
    }
}
