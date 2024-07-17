<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    public function showPaginate(){
        return Products::paginate(12);
    }

    public function showAll(){
        return Products::all();
    }
}
