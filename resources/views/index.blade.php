<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Equipment Rental System</title>
    <link rel='stylesheet' id='nice-select-css' href="{{ asset('css/styles.css') }}" media='all' />
    <style>
        /* Your existing CSS */
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container sign-up-container">
            <!-- Laravel form with CSRF protection -->
            <form method="POST">
    @csrf
    <h1>Join Us</h1>
    <input type="text" name="name" placeholder="Name" required />
    <input type="email" name="email" placeholder="Email" required />
    <input type="password" name="password" placeholder="Password" required />
    <input type="password" name="confirm_password" placeholder="Confirm Password" required />
    <input type="text" name="mobile" placeholder="Mobile Number" required />
    
    <!-- Gujarat Cities Dropdown -->
    <select name="city" required>
        <option value="" disabled selected>Select your city</option>
        <option value="Ahmedabad">Ahmedabad</option>
        <option value="Surat">Surat</option>
        <!-- Add the other city options -->
    </select>
    
    <!-- Styled Address Field -->
    <textarea name="address" placeholder="Address" rows="3" required></textarea>
    <button type="submit">Sign Up</button>
</form>
        </div>
        <div class="form-container sign-in-container">
            <form action="/" method="POST">
                @csrf
                <h1>Log in</h1>
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <a href="#">Forgot your password?</a>
                <button type="submit">Log In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back, Farmer</h1>
                    <p>To continue renting and managing equipment, please log in with your account</p>
                    <button class="ghost" id="signIn">Log In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Farmer</h1>
                    <p>Sign up to start renting agricultural equipment and grow your farming business with ease</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
