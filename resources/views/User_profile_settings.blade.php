<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lost and Found Portal - User Profile</title>\
        <!-- CSS file-->
        @vite(['resources/css/styles.css'])
        @vite(['resources/css/profile-styles.css'])
    </head>

    <body class="profile-page">
        <div class="page-wrapper">
            <!-- White header border -->
            <div class="top-header">
                <div class="container">
                    <div class="header-content">
                        <h1 class="portal-title">Lost and Found Portal</h1>
                        <a href="Homepage_user_lost.html" class="back-home-btn">Back to Home</a>
                    </div>
                </div>
            </div>

            <div class="profile-container">
                <!-- Sidebar -->
                <div class="profile-sidebar">
                    <div class="user-avatar">
                        <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 24 24' fill='none' stroke='%23000' stroke-width='1' stroke-linecap='round' stroke-linejoin='round'><circle cx='12' cy='7' r='4'/><path d='M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2'/></svg>" alt="User Avatar">
                    </div>
                    <h2 class="user-name">Juan Santos</h2>
                    <p class="user-username">alasdiel</p>
                    
                    <nav class="profile-nav">
                        <a href="User_profile_reports.html" class="nav-item" data-tab="reports">Report Submissions</a>
                        <a href="User_profile_settings.html" class="nav-item active" data-tab="settings">Account Settings</a>
                    </nav>
                    
                    <button class="logout-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                        LOG OUT
                    </button>
                </div>
                
                <!-- Main Content -->
                <div class="profile-content">
                    <div class="content-header">
                        <h2>User Information</h2>
                    </div>
                    
                    <form class="settings-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" id="firstName" value="Juan" class="form-input">
                            </div>
                            
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" id="lastName" value="Santos" class="form-input">
                            </div>
                            
                            <div class="form-group">
                                <label for="userName">User Name</label>
                                <input type="text" id="userName" value="alasdiel" class="form-input">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="phoneNumber">Phone Number</label>
                                <input type="tel" id="phoneNumber" placeholder="Enter phone number" class="form-input">
                            </div>
                            
                            <div class="form-group">
                                <label for="newPassword">Change Password</label>
                                <input type="password" id="newPassword" placeholder="Enter new password" class="form-input">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" placeholder="Enter email address" class="form-input">
                            </div>
                            
                            <div class="form-group">
                                <label for="confirmPassword">Re-Enter Password</label>
                                <input type="password" id="confirmPassword" placeholder="Confirm new password" class="form-input">
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="update-btn">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- JS file -->
        @vite(['resources/js/script.js'])
        @vite(['resources/js/profile-script.js'])
    </body>

</html>