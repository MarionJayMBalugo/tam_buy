@extends('layouts.adminLayout')

@section('title', 'Home')

@section('content')
@if(session()->has('success')) {
    {{ session('success') }}
}
@endif
<div id="createForm">
    <form action="" method="post" class="form">
        <div class="form-group col-sm btn-lg">
                <label for="stock">Product Title</label>
            <input type="text" class="form-control btn-lg" name="product_title" placeholder="Product Title"
                value="{{ old('product_title') }}">
            @if($errors->has('product_title'))
            <span style="color:red">{{ $errors->first('product_title') }}</span>
            @endif
        </div>
        <div class="form-group col-sm btn-lg">
                <label for="stock">Description</label>
            <input type="text" class="form-control btn-lg" name="description" placeholder="Description"
                value="{{ old('description') }}">
            @if($errors->has('description'))
            <span style="color:red">{{ $errors->first('description') }}</span>
            @endif
        </div>
        <div class="form-group col-sm btn-lg">
                <label for="stock">Brand Name</label>
            <input type="text" class="form-control btn-lg" name="brand_name" placeholder="Brand name"
                value="{{ old('brand_name') }}">
            @if($errors->has('brand_name'))
            <span style="color:red">{{ $errors->first('brand_name') }}</span>
            @endif
        </div>
        <div class="row">
            <div class="form-group col-sm btn-lg">
                <label for="stock">Category</label>
                <select class="form-control btn-lg">
                    <option value="volvo">Dress</option>
                    <option value="saab">Shoes</option>
                    <option value="mercedes">Foods</option>
                    <option value="audi">Accessories</option>
                </select>
            </div>
            <div class=" form-group col-sm btn-lg">
                <label for="stock">Stock</label>
                <input type="number" class="form-control btn-lg" name="stock">
            </div>
            <div class=" form-group col-sm btn-lg">
                <label for="price">Price</label>
                <input type="double" class="form-control btn-lg" name="price">
            </div>
        </div>
        <br>
        <div class="text-center ">
            <button type="submit" class="btn btn-default btn-lg submit">Add Product</button>
            <div>
    </form>
</div>
@endsection('content')