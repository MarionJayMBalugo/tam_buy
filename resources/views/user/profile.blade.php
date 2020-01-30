@extends('layout.layout')

@section('title', 'Profile')

@section('content')
<div class="w-10 ml-5 mt-4">
    <div class="card text-center">
        <div class="text-center mt-4">
            <img src="./profiles/profile1.jpg" alt="profile" width='500'>
        </div>
        <div class="card-body">
            <h1 class="card-title text-danger">Liza Soberano</h1>
            <h4>Billy<span class="text-info"> ( username )</span></h4>
            <h4>liza.soberano@gmail.com<span class="text-info"> ( email )</span></h4>
            <h4>Female<span class="text-info"> ( gender )</span></h4>
            <h4>User<span class="text-info"> ( user type )</span></h4>
        </div>
    </div>
</div>
@endsection('content')