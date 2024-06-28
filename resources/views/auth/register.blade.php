@extends('layouts.app')
@section('title')
    Register
@endsection
@section('content')
    <form class="login-form" method="POST" action="{{ route('register') }}">
        @csrf
        
        <div>
            <input class="login-input" type="text" id="name" name="name" placeholder="Name"
                value="{{ old('name') }}">
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input class="login-input" type="email" id="email" name="email" placeholder="Email"
                value="{{ old('email') }}">
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input class="login-input" type="password" id="password" placeholder="Password" name="password">
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input class="login-input" type="password" id="password_confirmation"
                placeholder="Password confirm" name="password_confirmation">
            @error('password_confirmation')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <button class="login-button" type="submit">Register</button>
        </div>
    </form>
@endsection
