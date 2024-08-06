<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'cat_name',
        'del_flg',
    ];

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class, 'main_category_id');
    }
}
