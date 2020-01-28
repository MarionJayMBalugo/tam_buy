@extends('layout.registration')

@section('title', 'Login')

@section('content')

<div class="col-sm-10 mt-10 ml-100 mb-5" id="formDiv">
    <form action="{{ route('user.login') }}" method="post" class="form">
        <h1>Sign In</h1>
        @csrf

        <!-- login form -->
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" name="username" value="{{ old('username') }}"
                    placeholder="username">
            </div>
            <span class="text-danger">
                @if($errors->has('username'))
                {{ $errors->first('username') }}
                @endif
            </span>
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
       
        <div class="form-group" id="loginButton">
            <center>
                <button type="submit" name="login" class="btn btn-primary">login</button>
            </center>
        </div>
        Don't have an account yet? <a href="{{route('signup')}}">Sign up here</a>
    </form>
</div>
@endsection('content')