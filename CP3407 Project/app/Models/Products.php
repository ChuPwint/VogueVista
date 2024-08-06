<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'pname',
        'p_photo',
        'stock',
        'p_detail',
        'price',
        'size',
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class, 'product_id');
    }

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class, 'product_id');
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    //show 12 products in a page
    public function showPaginate()
    {
        return Products::where('stock', '>', 0)->paginate(12);
    }

    //show all products
    public function showAll()
    {
        return Products::where('stock', '>', 0)->get();
    }

    //sort product by lowest price
    public function sortByLowestPrice()
    {
        return $this->orderBy('price', 'asc')->paginate(12);
    }

    //sort product by highest price
    public function sortByHighestPrice()
    {
        return $this->orderBy('price', 'desc')->paginate(12);
    }

    //sort product by newest
    public function sortByNewest()
    {
        return $this->orderBy('created_at', 'desc')->paginate(12);
    }
}
