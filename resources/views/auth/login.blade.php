@extends('layouts.app')
@section('title')
    Login
@endsection
@section('content')
    <form class="login-form" method="POST" action="">
        @csrf

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
            <button class="login-button" type="submit">Login</button>
        </div>
    </form>
@endsection
