<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

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

    // public function logout() {
    //     return redirect('login')->with('logout', "successful logout");
    // }

}