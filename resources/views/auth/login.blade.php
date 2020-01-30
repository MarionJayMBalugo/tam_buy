@extends('layouts.GuestDashboard')

@section('title','Log-in to tamBuy')

@section('content')
<div class="container">
    <div>
        @if( session()->has('success'))
            <div class="alert alert-success">
                <center>{{ session('success') }}</center>
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger">
                <center>{!! session()->get('error') !!}</center>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-sm-5 mt-lg-5" id="formDiv">
                <form action="{{ route('login') }}" method="post" class="form">
                    @csrf
                    <h1>Sign In</h1>
                        
                        <!-- login form -->
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
                            <input type="password" class="form-control" value="{{ old('password') }}" name="password"
                                placeholder="Password">
                        </div>
                        <span class="text-danger">
                            @if($errors->has('password'))
                            {{ $errors->first('password') }}
                            @endif
                        </span>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
            
                            {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
