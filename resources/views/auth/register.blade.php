@extends('layout.app')

<link rel="stylesheet" href="{{ URL::asset('css/registration.css')}}">
@section('content')
<form method="POST" action="{{ route('register') }}" class="form-controller">
    @csrf
    <div class="signup-wrapper">
        <div class="redirect-register">
            <i class="fa fa-long-arrow-left left-arrow fa-lg" aria-hidden="true"></i>
            <a class="register-btn" href="{{route('login')}}">Login</a>
        </div>

        <div class="main-form">
            <div class="details">
                <h2>Sign up</h2>
                <p>Welcome! Please fill in your e-mail and password to create an account</p>
            </div>
            <div class="form-details">
                <input name="name" value="{{old('name')}}" placeholder="Name" required class="form-control 
                 {{ $errors->has('name') ? 'is-invalid' : '' }}">

                @if($errors->has('name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
                <input name="email" value="{{ old('email') }}" placeholder="E-mail" required class="form-validate  
                {{ $errors->has('email') ? 'is-invalid' : '' }}">

                @if($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif

                <input type="password" name="password" placeholder="Password" required class="form-validate 
                {{ $errors->has('password') ? 'is-invalid' : '' }}">

                @if($errors->has('password')){
                <span class="invalid feedback">
                    <strong> {{ $errors->first('password') }} </strong>
                </span>
                @endif
                <input type="password" name="password_confirmation" placeholder="Retype-Password">

            </div>
            <button type="submit" class="signup-btn">Register</button>
        </div>
    </div>
    <div class="img-wrapper"></div>
</form>
@endsection