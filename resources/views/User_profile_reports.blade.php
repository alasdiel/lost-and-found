<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lost and Found Portal - User Profile</title>
        @vite(['resources/css/profile-styles.css'])
    </head>

    <body>
        <div class="page-wrapper">
            <!-- Header -->
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
                    <div class="user-avatar">
                        <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 24 24' fill='none' stroke='%23000' stroke-width='1' stroke-linecap='round' stroke-linejoin='round'><circle cx='12' cy='7' r='4'/><path d='M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2'/></svg>" alt="User Avatar">
                    </div>
                    <h2 class="user-name">Juan Santos</h2>
                    <p class="user-username">alasdiel</p>
                    
                    <nav class="profile-nav">
                        <a href="#" class="nav-item active">Report Submissions</a>
                        <a href="#" class="nav-item">Account Settings</a>
                    </nav>
                    
                    <button class="logout-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                        LOG OUT
                    </button>
                </div>
                
                <!-- Main Content -->
                <div class="profile-content">
                    <div class="content-header">
                        <h2>Latest Submission</h2>
                        <div class="content-actions">
                            <div class="filter-dropdown">
                                <button class="filter-btn">Filter <span>▼</span></button>
                                <div class="filter-options">
                                    <a href="#">All</a>
                                    <a href="#">Lost</a>
                                    <a href="#">Found</a>
                                    <a href="#">Pending</a>
                                    <a href="#">Resolved</a>
                                </div>
                            </div>
                            <div class="search-container">
                                <input type="text" placeholder="Post ID" class="search-input">
                                <button class="search-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="submissions-table">
                        <!-- Table Header -->
                        <div class="table-header">
                            <div class="table-cell">Lost / Found</div>
                            <div class="table-cell">Post ID</div>
                            <div class="table-cell">Item Name</div>
                            <div class="table-cell">Created Date</div>
                            <div class="table-cell">Status</div>
                        </div>
                        
                        
                        <div class="table-row">
                            <div class="table-cell">Lost</div>
                            <div class="table-cell">LF001</div>
                            <div class="table-cell">Hydro Flask</div>
                            <div class="table-cell">03/23/2025</div>
                            <div class="table-cell status-cell">
                                <span class="status-resolved">Resolved</span>
                                <div class="status-dropdown">
                                    <button class="dropdown-toggle">
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item" data-status="pending">Pending</a>
                                        <a href="#" class="dropdown-item" data-status="resolved">Resolved</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="table-row">
                            <div class="table-cell">Found</div>
                            <div class="table-cell">LF002</div>
                            <div class="table-cell">Playstation 5</div>
                            <div class="table-cell">03/23/1990</div>
                            <div class="table-cell status-cell">
                                <span class="status-pending">Pending</span>
                                <div class="status-dropdown">
                                    <button class="dropdown-toggle">
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item" data-status="pending">Pending</a>
                                        <a href="#" class="dropdown-item" data-status="resolved">Resolved</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="table-row">
                            <div class="table-cell">Lost</div>
                            <div class="table-cell">LF003</div>
                            <div class="table-cell">Laptop</div>
                            <div class="table-cell">05/10/2025</div>
                            <div class="table-cell status-cell">
                                <span class="status-pending">Pending</span>
                                <div class="status-dropdown">
                                    <button class="dropdown-toggle">
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item" data-status="pending">Pending</a>
                                        <a href="#" class="dropdown-item" data-status="resolved">Resolved</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Get all dropdown toggles
                const toggles = document.querySelectorAll('.dropdown-toggle');
                
                // Add click event to each toggle
                toggles.forEach(toggle => {
                    toggle.addEventListener('click', function(e) {
                        e.stopPropagation();
                        
                        // Close all other open dropdowns
                        document.querySelectorAll('.dropdown-menu').forEach(menu => {
                            if (menu !== this.nextElementSibling) {
                                menu.classList.remove('show');
                            }
                        });
                        
                        // Toggle current dropdown
                        this.nextElementSibling.classList.toggle('show');
                    });
                });
                
                // Add click event to dropdown items
                document.querySelectorAll('.dropdown-item').forEach(item => {
                    item.addEventListener('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        
                        const statusCell = this.closest('.status-cell');
                        const statusSpan = statusCell.querySelector('span');
                        const status = this.getAttribute('data-status');
                        
                        // Remove existing status classes
                        statusSpan.classList.remove('status-pending', 'status-resolved');
                        
                        // Add new status class and update text
                        if (status === 'pending') {
                            statusSpan.classList.add('status-pending');
                            statusSpan.textContent = 'Pending';
                        } else if (status === 'resolved') {
                            statusSpan.classList.add('status-resolved');
                            statusSpan.textContent = 'Resolved';
                        }
                        
                        // Hide dropdown
                        this.closest('.dropdown-menu').classList.remove('show');
                    });
                });
                
                // Close dropdowns when clicking outside
                document.addEventListener('click', function() {
                    document.querySelectorAll('.dropdown-menu').forEach(menu => {
                        menu.classList.remove('show');
                    });
                });
            });
        </script>
    </body>
</html>