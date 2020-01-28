<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'product_title',
        'description',
        'category',
        'brand_name',
        'seller',
        'stock',
        'price'
    ];
}
