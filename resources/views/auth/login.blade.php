@extends('layout.app')

<link rel="stylesheet" href="{{ URL::asset('css/registration.css')}}">
@section('content')

<form method="POST" action="{{route('login')}}" class="form-controller">
    @csrf
    <div class="login-wrapper">
        <div class="redirect-register">
            <i class="fa fa-long-arrow-left left-arrow fa-lg" aria-hidden="true"></i>
            <a class="register-btn" href="{{route('register')}}">Register</a>
        </div>

        <div class="main-form">
            <div class="details">
                <h2>Login</h2>
                <p>Welcome! Please fill in your username and password to log into your account</p>
            </div>
            <div class="form-details">
                <input type="text" name="email" placeholder="email" required class="form-control 
        {{ $errors->has('email') ? 'is-invalid' : '' }}">

                @if($errors->has('email')){
                <span class="invalid-feedback">
                    <strong>
                        {{ $errors->first('email') }}
                    </strong>
                </span>
                }
                @endif
                <input type="password" name="password" placeholder="Password" required class="form-control 
        {{ $errors->has('password') ? 'is-invalid' : '' }}">

                @if($errors->has('password')){
                <span class="invalid-feedback">
                    <strong>
                        {{ $errors->first('password') }}
                    </strong>
                </span>
                } @endif

                <a href="{{route('register')}}">
                    Forgot your password?
                </a>
            </div>
            <button type="submit" class="signup-btn">login</button>
        </div>
    </div>

    <div class="img-wrapper"></div>
</form>

@endsection