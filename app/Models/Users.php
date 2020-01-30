<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table="users";
    protected $fillable = [
        'name',
        'username',
        'email',
        'gender',
        'password'
    ];
    //
    public function profile()
    {
        return $this->hasOne('App\Models\Profile');
    }
    
}
