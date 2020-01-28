@extends('layout.admin')

@section('title', 'Home')

@section('content')

@if($errors->has('failed'))
<div class="alert alert-danger">
    {{ $errors->first('failed') }}
</div>
@endif


<div id="createForm">
    <form action="{{ route('admin_create') }}" method="post" class="form">
        @csrf
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
            <textarea type="text" class="form-control btn-lg" rows="5" name="description" placeholder="Description"
                value="{{ old('description') }}"></textarea>
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
                <select class="form-control btn-lg" name="category">
                    <option value="Dress" {{ old('category') == 'Dress' ? 'selected' : '' }}>Dress</option>
                    <option value="Shoes" {{ old('category') == 'Shoes' ? 'selected' : '' }}>Shoes</option>
                    <option value="Phone" {{ old('category') == 'Phone' ? 'selected' : '' }}>Phone</option>
                    <option value="Accessories" {{ old('category') == 'Accessories' ? 'selected' : '' }}>Accessories
                    </option>
                </select>
                @if($errors->has('category'))
                <span style="color:red">{{ $errors->first('category') }}</span>
                @endif
            </div>
            <div class=" form-group col-sm btn-lg">
                <label for="stock">Stock</label>
                <input type="number" class="form-control btn-lg" name="stock" value="{{ old('stock') }}">
                @if($errors->has('stock'))
                <span style="color:red">{{ $errors->first('stock') }}</span>
                @endif
            </div>
            <div class=" form-group col-sm btn-lg">
                <label for="price">Price</label>
                <input type="double" class="form-control btn-lg" name="price" value="{{ old('price') }}">
                @if($errors->has('price'))
                <span style="color:red">{{ $errors->first('price') }}</span>
                @endif
            </div>
        </div>
        <br>
        <div class="text-center ">
            <button type="submit" class="btn btn-default btn-lg submit">Add Product</button>
            <div>
    </form>
</div>
@endsection('content')