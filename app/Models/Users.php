<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{

    protected $guard = 'user';

    protected $fillable = [
        'name',
        'username',
        'email',
        'gender',
        'user_type',
        'password',
        'api_token',
        'remember_token',
    ];

    protected $hidden = [
        'password', 'api_token', 'remember_token',
    ];
    protected $table = 'users';
}
