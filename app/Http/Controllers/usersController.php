<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Users;
use App\Models\Profile;
class usersController extends Controller
{

    public function home() {
        $products = Products::all();
        return view('user.home', compact('products'));
    }

    public function paidItems() {
        return view('user.paid_items');
    }

    public function cart() {
        return view('user.cart');
    }

    public function search() {
        return view('user.search');
    }

    public function pendings() {
        return view('user.pendings');
    }
    public function logout() {
        return redirect('login')->with('logout', "successful logout");
    }
    public function test() {
        
        $users=Users::find(1)->profile;
        echo $users;
               
    }
    public function profile() {
        
         return view('user.profile')->with('userData',[session('user'),session('userProfilePic')]);
    }

}