<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use DB;

class adminController extends Controller
{
    public function home() {
        $products = Products::all();
        return view('admin.home', compact('products'));
    }

    public function paidItems() {
        return view('admin.paid_items');
    }

    public function search(Request $request) {
        $products = Products::where('product_title', '=', $request->product_title)->get();
        if ($products != []) {
            return view('admin.search', compact('products'));
        } else {
            return view('admin.search');
        }
    }

    public function pendings() {
        return view('admin.pendings');
    }
    public function logout() {
        return redirect('login')->with('logout', "successful logout");
    }

    public function addProduct() {
        return view('admin.create');
    }

    public function create(Request $request) {
        $request->validate([
            'product_title' => 'required',
            'description' => 'required',
            'brand_name' => 'required',
            'category' => 'required',
            'stock' => 'required',
            'price' => 'required'
        ]);

        $products = new Products([
            'product_title' => $request['product_title'],
            'description' => $request['description'],
            'brand_name' => $request['brand_name'],
            'category' => $request['category'],
            'stock' => $request['stock'],
            'price' => $request['price']
        ]);
        
        \DB::beginTransaction();
        
        try {
            $products->save();
            DB::commit();
            return redirect('admin')->with('success', 'Product Successfully added!');
        }
        catch (Exception $e) {
            \DB::rollback();
            return redirect()->back()->withInout()->withErrors('failed', 'Failed to add product.');
        }

    }

    public function updateForm(Request $request, $id) {
        $product = Products::where('id', '=', $id)->get();
        return view('admin.update', compact('product'));
    }

    public function deleteForm(Request $request, $id) {
        $products = Products::where('id', '=', $id)->get();
        return view('admin.delete', compact('products'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'product_title' => 'required',
            'description' => 'required',
            'brand_name' => 'required',
            'category' => 'required',
            'stock' => 'required',
            'price' => 'required'
        ]);

        $product = Products::find($id);
        $product->product_title = $request['product_title'];
        $product->description = $request['description'];
        $product->brand_name = $request['brand_name'];
        $product->category = $request['category'];
        $product->stock = $request['stock'];
        $product->price = $request['price'];
        
        \DB::beginTransaction();
        try {
            $product->save();
            DB::commit();
            return redirect('admin')->with('success', 'Product successfully updated.');
        }
        catch (Exception $e) {
            \DB::rollback();
            return redirect()->back()->withInputs()->withErrors('failed', 'Product failed to update.');
        }
    }

    public function delete(Request $request, $id) {
        \DB::begintransaction();
        try {
            Products::findOrFail($id)->delete();
            DB::commit();
            return redirect('admin')->with('success', 'Product successfully removed.');
        }
        catch (Exception $e) {
            \DB::rollback();
            return redirect()->back()->withErrors('failed', 'Product failed to be removed.');
        }
    }
    //
}
