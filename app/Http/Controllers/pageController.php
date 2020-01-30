<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use DB;

class pageController extends Controller
{
    public function registerForm(){
        return view('register');
    }
    
    public function loginForm(){
        return view('login');
    }
    

    public function usersHome(){
        return view('user.home');
    }

    public function adminHome(){
        return view('admin.home');
    }

}
   