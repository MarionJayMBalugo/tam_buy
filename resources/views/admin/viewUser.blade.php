@extends('layout.admin')

@section('title', 'View User')

@section('content')
@foreach($users as $user)
<div class="w-10 ml-5 mt-4">
    <div class="card text-center">
        <div class="text-center mt-4">
            <img src="{{ URL::to('/') }}/profiles/profile1.jpg" alt="profile" width='500'>
        </div>
        <div class="card-body">
            <h1 class="card-title text-danger">{{ $user['name'] }}</h1>
            <h4>{{ $user['username'] }}<span class="text-info"> ( username )</span></h4>
            <h4>{{ $user['email'] }}<span class="text-info"> ( email )</span></h4>
            <h4>{{ $user['gender'] }}<span class="text-info"> ( gender )</span></h4>
        </div>
    </div>
</div>
@endforeach
@endsection('content')