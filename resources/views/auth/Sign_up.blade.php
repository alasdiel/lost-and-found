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
                <form>
                    <!--Name -->
                    <div class="form-row">
                        <!-- First name -->
                        <div class="input-group half">
                            <label for="first-name">First name <span class="required">*</span></label>
                            <input type="text" id="first-name" name="first-name" required>
                        </div>
                        <!-- Last name -->
                        <div class="input-group half">
                            <label for="last-name">Last name <span class="required">*</span></label>
                            <input type="text" id="last-name" name="last-name" required>
                        </div>
                    </div>
                    
                    <!-- Username -->
                    <div class="input-group">
                        <label for="username">Username <span class="required">*</span></label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    
                    <!-- Email -->
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">
                    </div>
                    
                    <!-- Password -->
                    <div class="input-group">
                        <label for="password">Password <span class="required">*</span></label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    
                    <!-- Confirm Password -->
                    <div class="input-group">
                        <label for="confirm-password">Re-enter password <span class="required">*</span></label>
                        <input type="password" id="confirm-password" name="confirm-password" required>
                    </div>
                    
                    <!-- Contact Number -->
                    <div class="input-group">
                        <label for="contact">Contact Number</label>
                        <input type="tel" id="contact" name="contact">
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="center-btn">
                        <button type="submit" class="signup-btn">SIGN UP</button>
                    </div>

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