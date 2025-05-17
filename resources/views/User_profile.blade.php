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
        <header class="header">
            <h1 class="portal-title">Lost and Found Portal</h1>
            <a href="{{ route('show.home') }}" class="back-home-btn" style="text-decoration: none">Back to Home</a>
        </header>

        <!-- Sidebar -->
        <aside class="profile-sidebar">
            <!-- Profile Picture -->
            <div class="user-profile">
                <div class="user-avatar">
                    <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 24 24' fill='none' stroke='%23000' stroke-width='1' stroke-linecap='round' stroke-linejoin='round'><circle cx='12' cy='7' r='4'/><path d='M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2'/></svg>" alt="User Avatar">
                </div>
                <!-- Name and Username -->
                <h2 class="user-name">Juan Santos</h2>
                <p class="user-username">alasdiel</p> 
            </div>

            <!-- Nav Bar-->
            <nav class="nav-menu">
                <a href="#" class="nav-item active" id="reports-tab">Report Submissions</a>
                <a href="#" class="nav-item" id="settings-tab">Account Settings</a>
            </nav>
                
            <!-- Logout Button -->
            <div class="logout-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                    LOG OUT
            </div>
        </aside>
        
        <!-- Main Content -->
        <div class="profile-content">
            <!-- Reports Tab Content -->
            <div id="reports-content" class="tab-content">
                <div class="content-header">
                    <h2>Latest Submission</h2>
                    <div class="content-actions">
                        <div class="filter-dropdown">
                            <button class="filter-btn">Filter ▼</button>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left: -25px; position: relative;"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        </div>
                    </div>
                </div>
                    
                <div class="submissions-table active">
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

            <!-- Settings Tab Content -->
            <div id="settings-content" class="tab-content active">
                <!-- Header -->
                <div class="content-header">
                    <h2>User Information</h2>
                </div>
                    
                <form class="settings-form active">
                    <!-- Row 1: Firstname, Lastname & Username-->
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
                
        </div><!-- End of Main Content -->

    </div><!-- End of Page Wrapper -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {   
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