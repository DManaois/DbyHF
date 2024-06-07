<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    
    <div class="form-container">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        <h2>Sign Up</h2>
        <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="username">Username:</label> 
            <input type="text" id="username" name="username" required>
            
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>
            
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
            
            <label for="address">Address:</label>
            <input type="text" id="address" name="address">
            
            <label for="contact_number">Contact Number:</label>
            <input type="text" id="contact_number" name="contact_number">
            
            <label for="profile_picture">Profile Picture:</label>
            <input type="file" id="profile_picture" name="profile_picture">
            
            <button type="submit">Register</button>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            
            <p>Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
        </form>
    </div>
    <div class="image-container">
        <img src="{{ asset('images/landscape.png') }}" alt="Landscape">
    </div>
</body>
</html>
