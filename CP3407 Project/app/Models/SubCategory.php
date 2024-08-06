<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'main_category_id',
        'del_flg',
    ];

    public function mainCategory()
    {
        return $this->belongsTo(MainCategory::class, 'main_category_id');
    }

    public function products()
    {
        return $this->hasMany(Products::class, 'category_id');
    }

    public function getSubCategories($mainCatId){
        return SubCategory::where('main_category_id', $mainCatId)->get();
    }

}
