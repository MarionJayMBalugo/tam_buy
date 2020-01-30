@extends('layouts.adminLayout')

@section('title', 'Home')

@section('content')
@if(session()->has('success')) {
    {{ session('success') }}
}
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
            <ul><p class="card-text text-info" name="category">{{ $product['category'] }}</p></ul>
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
            <a href="#" class="btn btn-primary btn-lg mb-2">EDIT</a>
            <a href="#" class="btn btn-danger btn-lg mb-2">REMOVE</a>
        </form>
    </div>
</div>
@endforeach
@endsection('content')