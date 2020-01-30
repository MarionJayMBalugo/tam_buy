<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'product_name',
        'description',
        'category',
        'seller',
        'stock',
        'price'
    ];
}
