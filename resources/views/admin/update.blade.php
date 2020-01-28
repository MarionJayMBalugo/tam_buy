@extends('layout.admin')

@section('title', 'Update Product')

@section('content')

@if($errors->has('failed'))
<div class="alert alert-danger">
    {{ $errors->first('failed') }}
</div>
@endif

<div id="createForm">
    <form action="{{ url('admin/update', $product[0]->id) }}" method="post" class="form">
        @csrf
        <div class="form-group col-sm btn-lg">
            <label for="stock">Product Title</label>
            <input type="text" class="form-control btn-lg" name="product_title" placeholder="Product Title"
                value="{{ old('product_title', $product[0]->product_title) }}">
            @if($errors->has('product_title'))
            <span style="color:red">{{ $errors->first('product_title') }}</span>
            @endif
        </div>
        <div class="form-group col-sm btn-lg">
            <label for="stock">Description</label>
            <input type="text" class="form-control btn-lg" name="description" placeholder="Description"
                value="{{ old('description', $product[0]->description) }}">
            @if($errors->has('description'))
            <span style="color:red">{{ $errors->first('description') }}</span>
            @endif
        </div>
        <div class="form-group col-sm btn-lg">
            <label for="stock">Brand Name</label>
            <input type="text" class="form-control btn-lg" name="brand_name" placeholder="Brand name"
                value="{{ old('brand_name', $product[0]->brand_name) }}">
            @if($errors->has('brand_name'))
            <span style="color:red">{{ $errors->first('brand_name') }}</span>
            @endif
        </div>
        <div class="row">
            <div class="form-group col-sm btn-lg">
                <label for="stock">Category</label>
                <select class="form-control btn-lg" name="category">
                    <option value="Dress" {{ old('category', $product[0]->category) == 'Dress' ? 'selected' : '' }}>
                        Dress</option>
                    <option value="Shoes" {{ old('category', $product[0]->category) == 'Shoes' ? 'selected' : '' }}>
                        Shoes</option>
                    <option value="Phone" {{ old('category', $product[0]->category) == 'Phone' ? 'selected' : '' }}>
                        Phone</option>
                    <option value="Accessories"
                        {{ old('category', $product[0]->category) == 'Accessories' ? 'selected' : '' }}>Accessories
                    </option>
                </select>
                @if($errors->has('category'))
                <span style="color:red">{{ $errors->first('category') }}</span>
                @endif
            </div>
            <div class=" form-group col-sm btn-lg">
                <label for="stock">Stock</label>
                <input type="number" class="form-control btn-lg" name="stock"
                    value="{{ old('stock', $product[0]->stock) }}">
                @if($errors->has('stock'))
                <span style="color:red">{{ $errors->first('stock') }}</span>
                @endif
            </div>
            <div class=" form-group col-sm btn-lg">
                <label for="price">Price</label>
                <input type="double" class="form-control btn-lg" name="price"
                    value="{{ old('price', $product[0]->price) }}">
                @if($errors->has('price'))
                <span style=" color:red">{{ $errors->first('price') }}</span>
                @endif
            </div>
        </div>
        <br>
        <div class="text-center">
            <a href="{{ route('admin_home') }}" type="button" class="btn btn-danger btn-lg mb-2">CANCEL</a>&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary btn-lg mb-2">UPDATE</button>
        <div>
    </form>
</div>
@endsection('content')