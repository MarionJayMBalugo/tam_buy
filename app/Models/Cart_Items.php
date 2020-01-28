<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart_Items extends Model
{
    protected $fillable = [
        'product_id',
        'user_id',
        'quantity',
        'total_cost'
    ];

    public function user() {
        return $this->belongsTo('App\Models\Products');
    }
}
