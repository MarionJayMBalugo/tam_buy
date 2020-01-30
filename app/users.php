<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $fillable = 
    [
        'name',
        'username',
        'email',
        'gender',
        'user_type',
        'password'
    ];

    protected $table = 'users';

    protected $hidden = [
        'password', 'remember_token',
    ];
}
