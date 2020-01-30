<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table="profile";
    protected $fillable=[
        'user_id',
        'image',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\Users');
    }
}
