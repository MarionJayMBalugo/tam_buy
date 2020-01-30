<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Products;

// class adminController extends Controller
// {
//     public function home() {
//         $products = Products::all();
//         return view('admin.home', compact('products'));
//     }

//     public function paidItems() {
//         return view('admin.paid_items');
//     }

//     public function search(Request $request) {
//         $products = Products::where('product_title', '=', $request->product_title)->get();
//         if ($products != []) {
//             return view('admin.search', compact('products'));
//         } else {
//             return view('admin.search');
//         }
//     }

//     public function pendings() {
//         return view('admin.pendings');
//     }
    
//     public function logout() {
//         return redirect('login')->with('logout', "successful logout");
//     }

//     public function addProduct() {
//         return view('admin.create');
//     }

// }
