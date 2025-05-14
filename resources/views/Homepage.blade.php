<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lost and Found Portal</title>
        <!-- Include your CSS file -->
        @vite(['resources/css/styles.css'])
    </head>

    <body class="lost-page">
        <div class="page-wrapper">
            <!-- White header border -->
            <div class="top-header">
                <div class="container">
                    <div class="header-content">
                        <h1 class="portal-title">Lost and Found Portal</h1>
                        <!--<a href="#" class="login-btn">Log in</a>-->
                    </div>
                </div>
            </div>

            <div class="container">
                <!-- Search bar -->
                <div class="search-container">
                    <input type="text" id="searchInput" placeholder="Search" class="search-input">
                </div>

                <!-- Tabs for Lost and Found -->
                <div class="tabs-container">
                    <div class="tab active" data-tab="lost">LOST</div>
                    <div class="tab" data-tab="found">FOUND</div>
                </div>

                <!-- Main content area with light background (LOST) -->
                <div class="main-content-area" id=lostContent>
                    <!-- Tab content containers -->
                    <div class="tab-content">

                        <!-- Row 1 -->
                        <div class="items-container">

                            <!-- Item 1-->
                            <div class="item-card">
                                <div class="item-image-container">
                                    <img src="assets\Item 1.png" alt="Hydro Flask" class="item-image">
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

                            <!-- Item 2-->
                            <div class="item-card">
                                <div class="item-image-container">
                                    <img src="assets\Item 2.png" alt="PlayStation 5" class="item-image">
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

                            <!-- Item 3-->
                            <div class="item-card">
                                <div class="item-image-container">
                                    <img src="assets\Item 1.png" alt="Laptop" class="item-image">
                                </div>
                                <div class="item-details">
                                    <p class="detail"><strong>Last seen:</strong> 04/15/2025</p>
                                    <p class="detail"><strong>Item:</strong> Laptop</p>
                                    <p class="detail"><strong>Contact Details:</strong></p>
                                    <p class="detail">John Smith</p>
                                    <p class="detail">09xxxxxxxxx</p>
                                    <p class="detail"><strong>Other details:</strong> Black Dell laptop</p>
                                    <p class="detail posted-by">Posted by: johnsmith</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 2nd row -->
                        <div class="items-container">
                            <!-- Item 1-->
                            <div class="item-card">
                                <div class="item-image-container">
                                    <img src="assets\Item 1.png" alt="Hydro Flask" class="item-image">
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

                            <!-- Item 2-->
                            <div class="item-card">
                                <div class="item-image-container">
                                    <img src="assets\Item 2.png" alt="PlayStation 5" class="item-image">
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

                            <!-- Item 3-->
                            <div class="item-card">
                                <div class="item-image-container">
                                    <img src="assets\Item 1.png" alt="Laptop" class="item-image">
                                </div>
                                <div class="item-details">
                                    <p class="detail"><strong>Last seen:</strong> 04/15/2025</p>
                                    <p class="detail"><strong>Item:</strong> Laptop</p>
                                    <p class="detail"><strong>Contact Details:</strong></p>
                                    <p class="detail">John Smith</p>
                                    <p class="detail">09xxxxxxxxx</p>
                                    <p class="detail"><strong>Other details:</strong> Black Dell laptop</p>
                                    <p class="detail posted-by">Posted by: johnsmith</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- Main content area with light background (FOUND) -->
                <div class="container">
                <div class="main-content-area" id=foundContent>
                    <!-- Tab content containers -->
                    <div class="tab-content">

                        <!-- Row 1 -->
                        <div class="items-container">

                            <!-- Item 1-->
                            <div class="item-card">
                                <div class="item-image-container">
                                    <img src="assets\Item 1.png" alt="Hydro Flask" class="item-image">
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

                            <!-- Item 2-->
                            <div class="item-card">
                                <div class="item-image-container">
                                    <img src="assets\Item 2.png" alt="PlayStation 5" class="item-image">
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

                            <!-- Item 3-->
                            <div class="item-card">
                                <div class="item-image-container">
                                    <img src="assets\Item 1.png" alt="Laptop" class="item-image">
                                </div>
                                <div class="item-details">
                                    <p class="detail"><strong>Last seen:</strong> 04/15/2025</p>
                                    <p class="detail"><strong>Item:</strong> Laptop</p>
                                    <p class="detail"><strong>Contact Details:</strong></p>
                                    <p class="detail">John Smith</p>
                                    <p class="detail">09xxxxxxxxx</p>
                                    <p class="detail"><strong>Other details:</strong> Black Dell laptop</p>
                                    <p class="detail posted-by">Posted by: johnsmith</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 2nd row -->
                        <div class="items-container">
                            <!-- Item 1-->
                            <div class="item-card">
                                <div class="item-image-container">
                                    <img src="assets\Item 1.png" alt="Hydro Flask" class="item-image">
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

                            <!-- Item 2-->
                            <div class="item-card">
                                <div class="item-image-container">
                                    <img src="assets\Item 2.png" alt="PlayStation 5" class="item-image">
                                </div>
                                <div class="item-details">
                                    <p class="detail"><strong>Last seen:</strong> 03/23/1990</p>
                                    <p class="detail"><strong>Item:</strong> Playstation 5</p>
                                    <p class="detail"><strong>Contact Details:</strong></p>
                                    <p class="detail">Alex Neal Albinda</p>
                                    <p class="detail">09xxxxxxxxx</p>
                                    <p class="detail posted-by">Posted by: alasdiel</p>
                                </div>
                            </div> <!-- item card-->
                        </div> <!--items-container-->
                    </div>
                </div>
            </div>
        <footer>
            <p>Want to submit a report? <a href="{{ route('show.login') }}" class="login-link">Log in.</a></p>
        </footer>

        <!-- JS file -->
        @vite(['resources/js/script.js'])
    </body>

</html>