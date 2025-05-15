<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lost and Found Portal - Log In</title>
        <!-- Include your CSS file -->
        @vite(['resources/css/log-styles.css'])
    </head>
    
    <body>
        <div class="container signup-container">
            <div class="signup-form">
                <h1>Create Account</h1>
                <form action="{{ route('signup') }}" method="POST">
                    @csrf
                    <!--Name -->
                    <div class="form-row">
                        <!-- First name -->
                        <div class="input-group half">
                            <label for="first-name">First name <span class="required">*</span></label>
                            <input type="text" id="first-name" name="first_name" required>
                        </div>
                        <!-- Last name -->
                        <div class="input-group half">
                            <label for="last-name">Last name <span class="required">*</span></label>
                            <input type="text" id="last-name" name="last_name" required>
                        </div>
                    </div>
                    
                    <!-- Username -->
                    <div class="input-group half">
                        <label for="username">Username <span class="required">*</span></label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    
                    <div class="form-row">
                        <!-- Password -->
                        <div class="input-group half">
                            <label for="password">Password <span class="required">*</span></label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        
                        <!-- Confirm Password -->
                        <div class="input-group half">
                            <label for="confirm-password">Re-enter password <span class="required">*</span></label>
                            <input type="password" id="confirm-password" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <!-- Email -->
                        <div class="input-group half">
                            <label for="email">Contact Email</label>
                            <input type="email" id="email" name="contact_email" required value="{{ old('email') }}">
                        </div>

                        <!-- Contact Number -->
                        <div class="input-group half">
                            <label for="contact">Contact Number</label>
                            <input type="text" id="contact" name="contact_number">
                        </div>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="center-btn">
                        <button type="submit" class="signup-btn">SIGN UP</button>
                    </div>
                    
                    <!-- validation errors -->
                    @if ($errors->any())
                        <ul class="px-4 py-2 bg-red-100">
                            @foreach ($errors->all() as $error)
                                <li class="my-2 text-red-500">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <!-- Login Link -->
                    <div class="login-link">
                        Already have an account? <a href="{{ route('show.login') }}">Log in</a>
                    </div>
                    
                    <!-- Homepage Link -->
                    <div class="home-link">
                        Return to <a href="{{ route('show.home') }}">Homepage</a>.
                    </div>

                </form>

            </div>
        </div>

    </body>
</html>