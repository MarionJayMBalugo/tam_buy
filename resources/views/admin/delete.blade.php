@extends('layout.admin')

@section('title', 'Home')

@section('content')

@if($errors->has('failed'))
<div class="alert alert-danger">
    {{ $errors->first('failed') }}
</div>
@endif

@foreach($products as $product)
<div class="card flex-row flex-wrap">
    <div class="card-header border-0">
        <img src="../assets/dress1.jpg" width="200" alt="">
    </div>
    <div class="card-block px-2">
        <form action="" class="form">
            <h2 class="card-title text-danger" name="product_title">{{ $product['product_title'] }}</h2>
            <label>
                <h4>Description</h4>
            </label>
            <ul>
                <p class="card-text text-info" name="description">{{ $product['description'] }}</p>
            </ul>
            <label>
                <h4>Brand Name</h4>
            </label>
            <ul>
                <p class="card-text text-info" name="brand_name">{{ $product['brand_name'] }}</p>
            </ul>
            <label>
                <h4>Category</h4>
            </label>
            <ul>
                <p class="card-text text-info" name="category">{{ $product['category'] }}</p>
            </ul>
            <label>
                <h4>Stock</h4>
            </label>
            <ul>
                <p class="card-text text-info" name="stock">{{ $product['stock'] }}</p>
            </ul>
            <label>
                <h4>Price</h4>
            </label>
            <ul>
                <p class="card-text text-info" name="price">Php {{ $product['price'] }}</p>
            </ul>
            <div class="alert alert-warning text-center mt-2">
                <h2> Are you sure you want to remove this product?<h2>
                        <br>
                        <a type="button" class="btn btn-primary btn-lg mb-2"
                            href="{{ route('admin_home') }}">CANCEL</a>&nbsp;&nbsp;
                        <a type="button" class="btn btn-danger btn-lg mb-2"
                            href="{{ url('admin/delete', $product['id']) }}">YES, REMOVE</a>
            </div>
        </form>
    </div>
</div>
@endforeach
@endsection('content')