<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    /**
     * Relasi ke model Category
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
