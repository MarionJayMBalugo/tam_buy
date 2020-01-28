@extends('layout.registration')

@section('title', 'Signup')

@section('content')
<div class="col-sm-10 mt-3 ml-100 mb-5" id="formDiv">
    <form action="" method="post" class="form" >
        @csrf
        <div>
        <h1>Create Account</h1>
        <p>It's free and hardly takes more than 30 seconds</p>
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
                        {{ old('gender') == "Male" ? "checked" : "" }} value="Male">Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" class="form-check-input" name="gender" value="Female"
                        {{ old('gender') == "Female" ? "checked" : "" }}>Female
                </label>
                @if($errors->has('gender'))
                {{ $errors->first('gender') }}
                @endif
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
        Already have an account? <a href="{{route('user.login')}}">Login here</a>
    </form>

</div>
@endsection('content')