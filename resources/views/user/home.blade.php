@extends('layouts.userLayout')

@section('title', 'Home')

@section('content')
@if(session()->has('success')) {
    {{ session('success') }}
}
@endif
<div class="card flex-row flex-wrap">
    <div class="card-header border-0">
        <img src="./assets/dress1.jpg" width="200" alt="">
    </div>
    <div class="card-block px-2">
        <form action="" class="form">
            <h2 class="card-title text-danger" name="product_name">OMBRE STAR PRINT CREPE PLEATED EMPIRE DRESS</h2>
            <label>
                <h4>Description</h4>
            </label>
            <ul>
                <p class="card-text text-info">Sculptural pleats at the wide banded empire waist enrich the
                    sophistication
                    of our fit-and-flare dress tailored in sheer crepe with ombre star print at the skirt.</p>
            </ul>
            <label>
                <h4>Brand Name</h4>
            </label>
            <ul>
                <p class="card-text text-info">Ombre Star</p>
            </ul>
            <label>
                <h4>Category</h4>
            </label>
            <ul><p class="card-text text-info">Dress</p></ul>
            <label>
                <h4>Seller</h4>
            </label>
            <ul>
                <p class="card-text text-info">Jan Patrick Tancinco</p>
            </ul>
            <label>
                <h4>Stock</h4>
            </label>
            <ul>
                <p class="card-text text-info">100</p>
            </ul>
            <label>
                <h4>Price</h4>
            </label>
            <ul>
                <p class="card-text text-info">Php 999.99</p>
            </ul>
            <a href="" class="btn btn-primary btn-lg mb-2">ADD TO CART</a>
        </form>
    </div>
</div>
<br>
<div class="card flex-row flex-wrap">
    <div class="card-header border-0">
        <img src="./assets/bag1.jpg" width="200" alt="">
    </div>
    <div class="card-block px-2">
        <form action="" class="form">
            <h2 class="card-title text-danger" name="product_name">OMBRE STAR PRINT CREPE PLEATED EMPIRE DRESS</h2>
            <label>
                <h4>Description</h4>
            </label>
            <ul>
                <p class="card-text text-info">Sculptural pleats at the wide banded empire waist enrich the
                    sophistication
                    of our fit-and-flare dress tailored in sheer crepe with ombre star print at the skirt.</p>
            </ul>
            <label>
                <h4>Brand Name</h4>
            </label>
            <ul>
                <p class="card-text text-info">Ombre Star</p>
            </ul>
            <label>
                <h4>Category</h4>
            </label>
            <ul><p class="card-text text-info">Dress</p></ul>
            <label>
                <h4>Seller</h4>
            </label>
            <ul>
                <p class="card-text text-info">Jan Patrick Tancinco</p>
            </ul>
            <label>
                <h4>Stock</h4>
            </label>
            <ul>
                <p class="card-text text-info">100</p>
            </ul>
            <label>
                <h4>Price</h4>
            </label>
            <ul>
                <p class="card-text text-info">Php 999.99</p>
            </ul>
            <a href="#" class="btn btn-primary btn-lg mb-2">ORDER</a>
        </form>
    </div>
</div>
<br>
<div class="card flex-row flex-wrap">
    <div class="card-header border-0">
        <img src="./assets/shoes1.jpg" width="200" alt="">
    </div>
    <div class="card-block px-2">
        <form action="" class="form">
            <h2 class="card-title text-danger" name="product_name">OMBRE STAR PRINT CREPE PLEATED EMPIRE DRESS</h2>
            <label>
                <h4>Description</h4>
            </label>
            <ul>
                <p class="card-text text-info">Sculptural pleats at the wide banded empire waist enrich the
                    sophistication
                    of our fit-and-flare dress tailored in sheer crepe with ombre star print at the skirt.</p>
            </ul>
            <label>
                <h4>Brand Name</h4>
            </label>
            <ul>
                <p class="card-text text-info">Ombre Star</p>
            </ul>
            <label>
                <h4>Category</h4>
            </label>
            <ul><p class="card-text text-info">Dress</p></ul>
            <label>
                <h4>Seller</h4>
            </label>
            <ul>
                <p class="card-text text-info">Jan Patrick Tancinco</p>
            </ul>
            <label>
                <h4>Stock</h4>
            </label>
            <ul>
                <p class="card-text text-info">100</p>
            </ul>
            <label>
                <h4>Price</h4>
            </label>
            <ul>
                <p class="card-text text-info">Php 999.99</p>
            </ul>
            <a href="#" class="btn btn-primary btn-lg mb-2">ORDER</a>
        </form>
    </div>
</div>
@endsection('content')