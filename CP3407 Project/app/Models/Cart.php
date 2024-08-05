<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
    ];

    public function products()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }

    public function getAllItems($userId)
    {
        return Cart::where('user_id', $userId)
            ->where('del_flg', 0)
            ->with('products:id,pname,price,p_photo,size,stock')
            ->get();
    }

    public function checkItem($userId, $productId)
    {
        return Cart::where('user_id', $userId)
            ->where('product_id', $productId)
            ->where('del_flg', 0)
            ->first();
    }

    public function addToCart($userId, $productId, $quantity)
    {
        return Cart::create([
            'user_id' => $userId,
            'product_id' => $productId,
            'quantity' => $quantity,
        ]);
    }

    public function updateItemQty($userId, $productId, $quantity)
    {
        return Cart::where('user_id', $userId)
            ->where('product_id', $productId)
            ->where('del_flg', 0)
            ->update(['quantity' => $quantity + 1]);
    }

    public function getItemCount($userId)
    {
        return Cart::where("user_id", $userId)
                    ->where("del_flg", 0)
                    ->count();
    }

    public function reduceItemQty($userId, $productId, $quantity){
        return Cart::where('user_id', $userId)
            ->where('product_id', $productId)
            ->where('del_flg', 0)
            ->update(['quantity' => $quantity - 1]);
    }

    public function deleteItem($userId, $productId){
        return Cart::where('user_id', $userId)
            ->where('product_id', $productId)
            ->update(['del_flg' => 1]);
    }

    public function clearCart($userId){
        return Cart::where('user_id', $userId)
            ->update(['del_flg' => 1]);
    }
}
