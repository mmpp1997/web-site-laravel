<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <title>Web Site</title>
</head>

<body>
    <form class="login-form" method="POST" action="">
        @csrf

        <div>
            <input class="login-input" type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
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
</body>

</html>
