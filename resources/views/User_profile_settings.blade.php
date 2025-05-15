<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lost and Found Portal - User Profile</title>
        <!-- CSS file-->
        @vite(['resources/css/profile-styles.css'])
    </head>

    <body>
        <div class="page-wrapper">
            <!-- White header border -->
            <div class="top-header">
                <div class="container">
                    <div class="header-content">
                        <h1 class="portal-title">Lost and Found Portal</h1>
                        <a href="#" class="back-home-btn">Back to Home</a>
                    </div>
                </div>
            </div>

            <div class="profile-container">
                <!-- Sidebar -->
                <div class="profile-sidebar">
                    <!-- PRofile Picture -->
                    <div class="user-avatar">
                        <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 24 24' fill='none' stroke='%23000' stroke-width='1' stroke-linecap='round' stroke-linejoin='round'><circle cx='12' cy='7' r='4'/><path d='M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2'/></svg>" alt="User Avatar">
                    </div>

                    <!-- Name and Username -->
                    <h2 class="user-name">Juan Santos</h2>
                    <p class="user-username">alasdiel</p>
                    
                    <!-- Nav Bar-->
                    <nav class="profile-nav">
                        <a href="#" class="nav-item" data-tab="reports">Report Submissions</a>
                        <a href="#" class="nav-item active" data-tab="settings">Account Settings</a>
                    </nav>
                    
                    <!-- Logout Button -->
                    <button class="logout-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                        LOG OUT
                    </button>
                </div>
                
                <!-- Main Content -->
                <div class="profile-content">
                    <!-- Header -->
                    <div class="content-header">
                        <h2>User Information</h2>
                    </div>
                    
                    <form class="settings-form">
                        <!-- Row 1: Firstname, Lastname & Username-->
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" id="firstName" value="First Name" class="form-input">
                            </div>
                            
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" id="lastName" value="Last Name" class="form-input">
                            </div>
                            
                            <div class="form-group">
                                <label for="userName">User Name</label>
                                <input type="text" id="userName" value="Username" class="form-input">
                            </div>
                        </div>
                        
                        <!-- Row 2: Phone Number & Change Password  -->
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
                        
                        <!-- Row 3: Email & Re-Enter Password -->
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
                        
                        <!-- Update Button -->
                        <div class="form-actions">
                            <button type="submit" class="update-btn">Update</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        
    </body>
</html>