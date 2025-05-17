<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost and Found Portal - User Profile</title>
    @vite(['resources/css/profile-styles.css'])
    <style>
        .success-message {
        padding: 1rem;
        margin-bottom: 1rem;
        color: #22543d;
        background-color: #f0fff4;
        border-radius: 10px;
        width: 100%;
        margin-right: 1rem;
        }
        .error-message {
        background-color: #e86a68;
        padding: 10px;
        border-radius: 5px;
        margin: 20px;
        border: #c30010 2px solid;
        }   
        .error-text {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 4px;
            font-size: 14px;
            font-weight: bold;
            color: #f1e3e5;
        }
    </style>
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
                <h2 class="user-name">{{ trim((Auth::user()->first_name ?? '') . ' ' . (Auth::user()->last_name ?? '')) ?: 'Unknown' }}</h2>
                <p class="user-username">{{ Auth::user()->username ?? 'Username' }}</p> 
            </div>

            <!-- Nav Bar-->
            <nav class="nav-menu">
                <a href="#" class="nav-item active" id="reports-tab">Report Submissions</a>
                <a href="#" class="nav-item" id="settings-tab">Account Settings</a>
            </nav>
                
            <!-- Logout Button -->
            <div class="logout-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                <form method="POST" action="{{ route('logout') }}" style="display:inline">
                    @csrf
                    <button type="submit" style="all: unset; cursor: pointer;">LOG OUT</button>
                </form>
            </div>
        </aside>
        
        <!-- Main Content -->
        <div class="profile-content">
            <!-- Reports Tab Content -->
            <div id="reports-content" class="tab-content">
                <div class="content-header">
                    <h2>Submissions</h2>
                    {{-- <div class="content-actions">
                        {{-- <div class="filter-dropdown">
                            <button class="filter-btn">Filter ▼</button>
                            <div class="filter-options">
                                <a href="#">All</a>
                                <a href="#">Lost</a>
                                <a href="#">Found</a>
                                <a href="#">Pending</a>
                                <a href="#">Resolved</a>
                            </div>
                        </div> --}}
                        {{-- <div class="search-container">
                            <input type="text" placeholder="Post ID" class="search-input">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left: -25px; position: relative;"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        </div> --}}

                </div>
                @if (session('success'))
                    <div class="success-message">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- validation errors -->
                @if ($errors->any())
                    <ul class="error-message">
                        @foreach ($errors->all() as $error)
                            <li class="error-text">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="submissions-table active">
                    <!-- Table Header -->
                    <div class="table-header">
                        <div class="table-cell">Lost / Found</div>
                        <div class="table-cell">Post ID</div>
                        <div class="table-cell">Item Name</div>
                        <div class="table-cell">Status</div>
                    </div>

                    @if($posts->isEmpty())
                        <div class="table-row">
                            <div class="table-cell" colspan="4" style="text-align: center;">
                                No submissions found.
                            </div>
                        </div>
                    @else
                        @foreach($posts as $post)
                            <div class="table-row">
                                <div class="table-cell">{{ ucfirst($post->lost_or_found) }}</div>
                                <div class="table-cell">{{ $post->id }}</div>
                                <div class="table-cell">{{ $post->item_name }}</div>
                                <div class="table-cell status-cell">
                                    <span class="status-{{ $post->status == 1 ? 'pending' : 'approved' }}">
                                        {{ $post->status == 1 ? 'Pending' : 'Approved' }}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            <!-- Settings Tab Content -->
            <div id="settings-content" class="tab-content active">
                <!-- Header -->
                <div class="content-header">
                    <h2>User Information</h2>
                </div>
                    
                <form class="settings-form active" method="POST" action="{{ route('update.profile') }}">
                    @csrf
                    <!-- Row 1: Firstname, Lastname -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" id="firstName" name="first_name" value="{{ old('first_name', Auth::user()->first_name) }}" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" id="lastName" name="last_name" value="{{ old('last_name', Auth::user()->last_name) }}" class="form-input" required>
                        </div>
                    </div>
                    <!-- Row 2: Phone Number & Change Password  -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phoneNumber">Phone Number</label>
                            <input type="tel" id="phoneNumber" name="contact_number" value="{{ old('contact_number', Auth::user()->contact_number) }}" placeholder="Enter phone number" class="form-input">
                        </div>
                        <div class="form-group">
                            <label for="newPassword">Change Password</label>
                            <input type="password" id="newPassword" name="password" placeholder="Enter new password" class="form-input" autocomplete="new-password">
                        </div>
                    </div>
                    <!-- Row 3: Email & Re-Enter Password -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="contact_email" value="{{ old('contact_email', Auth::user()->contact_email) }}" placeholder="Enter email address" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Re-Enter Password</label>
                            <input type="password" id="confirmPassword" name="password_confirmation" placeholder="Confirm new password" class="form-input" autocomplete="new-password">
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
            // Get tab elements
            const reportsTab = document.getElementById('reports-tab');
            const settingsTab = document.getElementById('settings-tab');
            
            // Get content elements
            const reportsContent = document.getElementById('reports-content');
            const settingsContent = document.getElementById('settings-content');
            
            // Show initial tab (Reports tab)
            reportsContent.classList.add('active');
            settingsContent.classList.remove('active');
            reportsTab.classList.add('active');
            settingsTab.classList.remove('active');
            
            // Tab switching functionality
            reportsTab.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Update active tab
                reportsTab.classList.add('active');
                settingsTab.classList.remove('active');
                
                // Show/hide content
                reportsContent.classList.add('active');
                settingsContent.classList.remove('active');
            });
            
            settingsTab.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Update active tab
                settingsTab.classList.add('active');
                reportsTab.classList.remove('active');
                
                // Show/hide content
                settingsContent.classList.add('active');
                reportsContent.classList.remove('active');
            });
            
            // Filter dropdown functionality
            const filterBtn = document.querySelector('.filter-btn');
            const filterOptions = document.querySelector('.filter-options');
            
            if (filterBtn) {
                filterBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    filterOptions.classList.toggle('show');
                });
            }
            
            // Get all status toggle buttons
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
                if (filterOptions) {
                    filterOptions.classList.remove('show');
                }
            });
        });
    </script>
</body>
</html>