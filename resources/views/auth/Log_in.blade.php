<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <!-- Include your CSS file -->
        @vite(['resources/css/log-styles.css'])
    </head>

    <body>
        <div class="container">
        <!--Sign Up / Homepage #-->
        <div class="signup-section">
            <h1>Create Account</h1>

            <!-- Sign up form -->
            <div class="center-btn">
                <a href="{{ route('show.signup') }}" class="btn btn-primary" style="text-decoration:none;text-align: center;">SIGN UP</a>
            </div>

            <!--Homepage link-->
            <div class="guest-link">
                Return to <a href="{{ route('show.home') }}"><u>Homepage</u></a>.
            </div>
        </div>

        <!--Log-in section-->
        <div class="login-section">
            <h1>Welcome Back!</h1>

            <!--Text Field-->
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <!--Username-->
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">
                </div>

                <!--Password-->
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                </div>
                
                <!--
                <div class="checkbox-group">
                    <input type="checkbox" id="show-password">
                    <label for="show-password" style="display: inline;">Show my Password</label>
                    <div class="forgot-password" style="margin-left: auto;">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>
                -->

                <!--Login button-->
                <button type="submit" class="login-btn">LOG IN</button>
                
                <!-- validation errors -->
                    @if ($errors->any())
                        <ul class="error-message">
                            @foreach ($errors->all() as $error)
                                <li class="error-text">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
            
            </form>

        </div>

    </div>

    </body>
</html>