<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost and Found Portal - Admin</title>
    @vite(['resources/css/admin-styles.css'])
</head>
<body>
    <div class="page-wrapper">
        <!-- Header -->
        <header class="header">
            <h1 class="portal-title">Lost and Found Portal</h1>
            <button class="back-home-btn">Back to Home</button>
        </header>

        <!-- Sidebar -->
        <aside class="admin-sidebar">
            <!-- Admin Picture-->
            <div class="admin-profile">
                <div class="admin-avatar">
                    <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 24 24' fill='none' stroke='%23000' stroke-width='1' stroke-linecap='round' stroke-linejoin='round'><circle cx='12' cy='7' r='4'/><path d='M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2'/></svg>" alt="User Avatar">
                </div>
                <!-- Name and Username -->
                <h2 class="admin-name">Admin</h2>
                <p class="admin-username">Admin</p>
            </div>

            <!-- Nav Bar -->
            <nav class="nav-menu">
                <a href="#" class="nav-item active">Lost Reports</a>
                <a href="#" class="nav-item">Found Reports</a>
            </nav>

            <!-- Logout Button -->
            <div class="logout-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                    LOG OUT
            </div>
        </aside>

        <!-- Main Content -->
        <div class="admin-content">
            <!-- Lost Reports Section -->
            <div id="lost-reports" class="tab-content">
                <h2 class="section-title">Pending Post Request</h2>
                <p class="lost-section">Lost Reports</p>
                <div class="requests-container">
                    <!-- Request Item 1 -->
                    <div class="request-item">
                        <div class="item-image">
                            <img src="assets/Item 2.png" alt="Hydro Flask" class="item-img">
                        </div>
                        <div class="item-details">
                            <p><strong>Last seen:</strong> 03/23/2025</p>
                            <p><strong>Item:</strong> Hydro Flask</p>
                            <p><strong>Contact Details:</strong></p>
                            <p>Alex Neal Albinda</p>
                            <p>09xxxxxxxx</p>
                            <p><strong>Other details:</strong> navy dent</p>
                            <p><strong>Posted by:</strong> alasdiel</p>
                        </div>
                        <div class="action-buttons">
                            <button class="approve-btn">Approve</button>
                            <button class="decline-btn">Decline</button>
                        </div>
                    </div>

                    <!-- Request Item 2 -->
                    <div class="request-item">
                        <div class="item-image">
                            <img src="assets/Item 2.png" alt="PlayStation 5" class="item-img">
                        </div>
                        <div class="item-details">
                            <p><strong>Last seen:</strong> 03/23/1990</p>
                            <p><strong>Item:</strong> Playstation 5</p>
                            <p><strong>Contact Details:</strong></p>
                            <p>Alex Neal Albinda</p>
                            <p>09xxxxxxxx</p>
                            <p><strong>Posted by:</strong> alasdiel</p>
                        </div>
                        <div class="action-buttons">
                            <button class="approve-btn">Approve</button>
                            <button class="decline-btn">Decline</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Found Reports Section -->
            <div id="found-reports" class="tab-content">
                <h2 class="section-title">Pending Post Request</h2>
                <p class="found-section">Found Reports</p>
                <div class="requests-container">
                    <!-- Request Item 1 -->
                    <div class="request-item">
                        <div class="item-image">
                            <img src="assets/Item 1.png" alt="Hydro Flask" class="item-img">
                        </div> 
                        <div class="item-details">
                            <p><strong>Last seen:</strong> 03/23/2025</p>
                            <p><strong>Item:</strong> Hydro Flask</p>
                            <p><strong>Contact Details:</strong></p>
                            <p>Alex Neal Albinda</p>
                            <p>09xxxxxxxx</p>
                            <p><strong>Other details:</strong> navy dent</p>
                            <p><strong>Posted by:</strong> alasdiel</p>
                        </div>
                        <div class="action-buttons">
                            <button class="approve-btn">Approve</button>
                            <button class="decline-btn">Decline</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>