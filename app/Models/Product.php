<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Product extends Model
{
    // Relasi ke dirinya sendiri (untuk product variant misalnya)
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}