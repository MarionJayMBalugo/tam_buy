@extends('layout.registration')

@section('title', 'Signup')

@section('content')
<style>
</style>
<div class="col-sm-10 mt-3 ml-100 mb-5" id="formDiv">
    <form action="{{route('user.register')}}" method="post" class="form" >
        @csrf
        <div>
        <h1>Create Account</h1>
        <p>It's free and hardly takes more than 30 seconds</p>
            <!-- <center>
                <br>
                <img src="../image/registericon.png" width="100" alt="Avatar" id="avatar">
         
                <hr>
            </center> -->
        </div>
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control " name="name" placeholder="Name" value="{{ old('name') }}">
            </div>
            <span class="text-danger">
                @if($errors->has('name'))
                {{ $errors->first('name') }}
                @endif
            </span>
        </div>
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" name="username" value="{{ old('username') }}"
                    placeholder="Username">
            </div>
            <span class="text-danger">
                @if($errors->has('username'))
                {{ $errors->first('username') }}
                @endif
            </span>
        </div>
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" name="email" value="{{ old('email') }}"
                    placeholder="Email Address">
            </div>
            <span class="text-danger">
                @if($errors->has('email'))
                {{ $errors->first('email') }}
                @endif
            </span>
        </div>
        <div class="form-group">
            <div class="input-group">
                <label><b>Gender:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" class="form-check-input" name="gender"
                        value="Male">Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" class="form-check-input" name="gender" value="Female">Female
                </label>
            </div>
        </div>
       
        <div class="form-group">
            <div class="input-group">
                <input type="password" class="form-control" value="{{ old('password') }}" name="password"
                    placeholder="Password">
            </div>
            <span class="text-danger">
                @if($errors->has('password'))
                {{ $errors->first('password') }}
                @endif
            </span>
        </div>
        <div class="form-group">
            <div class="input-group">
                <input type="password" class="form-control" value="{{ old('password_confirmation') }}"
                    name="password_confirmation" placeholder="Confirm Password">
            </div>
        </div>
        <div class="form-group" id="registerButton">
            
                <button type="submit" name="submit" class="btn btn-primary">Register</button>
            
        </div>
        Already have an account? <a href="{{route('loginForm')}}">Login here</a>
    </form>

    
</div>
@endsection('content')