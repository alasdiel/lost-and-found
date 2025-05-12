<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lost and Found Portal - Lost Items (User)</title>
        <!-- CSS file -->
        @vite(['resources/css/styles.css'])
    </head>
    
    <body class="lost-page user-page">
        <div class="page-wrapper">
            <!-- White header border -->
            <div class="top-header">
                <div class="container">
                    <div class="header-content">
                        <h1 class="portal-title">Lost and Found Portal</h1>
                        <div class="user-actions">
                            <a href="Form_submission.html" class="submit-btn">Submit</a>
                            <a href="User-profile_report.html" class="profile-btn">Profile</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="search-container">
                    <input type="text" id="searchInput" placeholder="Search" class="search-input">
                </div>

                <div class="tabs-container">
                    <div class="tab active" data-tab="lost">LOST</div>
                    <div class="tab" data-tab="found">FOUND</div>
                </div>

                <!-- Tab content containers -->
                <div class="tab-content" id="lostContent">
                    <div class="items-container">
                        <div class="item-card">
                            <div class="item-image-container">
                                <img src="assets/Item 1.png" alt="Hydro Flask" class="item-image">
                            </div>
                            <div class="item-details">
                                <p class="detail"><strong>Last seen:</strong> 03/23/2025</p>
                                <p class="detail"><strong>Item:</strong> Hydro Flask</p>
                                <p class="detail"><strong>Contact Details:</strong></p>
                                <p class="detail">Alex Neal Albinda</p>
                                <p class="detail">09xxxxxxxxx</p>
                                <p class="detail"><strong>Other details:</strong> naay dent</p>
                                <p class="detail posted-by">Posted by: alasdiel</p>
                            </div>
                        </div>

                        <div class="item-card">
                            <div class="item-image-container">
                                <img src="assets/Item 2.png" alt="PlayStation 5" class="item-image">
                            </div>
                            <div class="item-details">
                                <p class="detail"><strong>Last seen:</strong> 03/23/1990</p>
                                <p class="detail"><strong>Item:</strong> Playstation 5</p>
                                <p class="detail"><strong>Contact Details:</strong></p>
                                <p class="detail">Alex Neal Albinda</p>
                                <p class="detail">09xxxxxxxxx</p>
                                <p class="detail posted-by">Posted by: alasdiel</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-content" id="foundContent" style="display: none;">
                    <!-- Found items content will be loaded here -->
                </div>
            </div>
        </div>

        <!-- JS file-->
        @vite(['resources/js/script.js'])
    </body>

</html>