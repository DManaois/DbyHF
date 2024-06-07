<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/ADHD.css') }}">
</head>
<body>
    
    <div class="form-container">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        
        <form action="{{ route('login') }}" method="post">
        <h2>Sign In</h2>
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
            <p>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>
        </form>
    </div>
    <div class="image-container">
        <img src="{{ asset('images/landscape.png') }}" alt="Landscape">
    </div>
</body>
</html>
