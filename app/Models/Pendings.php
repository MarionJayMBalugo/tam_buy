<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendings extends Model
{
    protected $fillable = [
        'product_id',
        'user_id',
        'quantity',
        'total_cost'
    ];

    public function product() {
        return $this->belongsTo('App\Models\Products', 'product_id');
    }

    public function user() {
        return $this->belongsTo('App\Models\Users', 'user_id');
    }
}
