<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost and Found Portal - Dashboard</title>
    @vite(['resources/css/admin_styles.css'])
</head>
<body>
    <div class="page-wrapper">
        <!-- Header -->
        <header class="header">
            <h1 class="portal-title">Lost and Found Portal</h1>
            <a href="{{ route('show.home') }}" class="back-home-btn" style="text-decoration:none">Back to Home</a>
        </header>

        <!-- Sidebar -->
        <aside class="admin-sidebar">
            <!-- Admin Picture-->
            <div class="admin-profile">
                <div class="admin-avatar">
                    <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 24 24' fill='none' stroke='%23000' stroke-width='1' stroke-linecap='round' stroke-linejoin='round'><circle cx='12' cy='7' r='4'/><path d='M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2'/></svg>" alt="User Avatar">
                </div>
                <!-- Name and Username -->
                <h2 class="admin-name">{{ Auth::user()->username ?? 'Admin' }}</h2>
                <p class="admin-username">Administrator</p>
            </div>

            <!-- Nav Bar -->
            <nav class="nav-menu">
                <a href="#" class="nav-item active">Lost Reports</a>
                <a href="#" class="nav-item">Found Reports</a>
            </nav>

            <!-- Logout Button -->
            <div class="logout-btn">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                    <form method="POST" action="{{ route('logout') }}" style="display:inline, class=logout-btn">
                        @csrf
                        <button type="submit" style="all: unset; cursor: pointer;">LOG OUT</button>
                    </form>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="admin-content">
            <!-- Lost Reports Section -->
            <div id="lost-reports" class="tab-content">
                <h2 class="section-title">Pending Post Request</h2>
                <p class="lost-section">Lost Reports</p>
                    <div class="requests-container">
                    @php $hasLostPosts = false; @endphp
                    @foreach($posts as $post)
                        @if($post->status == 1 && $post->lost_or_found == 'lost')
                            @php $hasLostPosts = true; @endphp
                            <div class="request-item">
                                <div class="item-image">
                                    <img src="{{ $post->image_path ? asset('storage/' . $post->image_path) : asset('assets/default.png') }}" alt="{{ $post->item_name }}" class="item-img">
                                </div>
                                <div class="item-details">
                                    <p><strong>Last seen:</strong> {{ $post->last_seen_date }}</p>
                                    <p><strong>Item:</strong> {{ $post->item_name }}</p>
                                    <p><strong>Contact Details:</strong></p>
                                    <p>{{ trim(($post->user->first_name ?? '') . ' ' . ($post->user->last_name ?? '')) ?: 'Unknown' }}</p>
                                    <p>{{ $post->user->contact_number ?? '' }}</p>
                                    <p><strong>Other details:</strong> {{ $post->other_details }}</p>
                                    <p><strong>Posted by:</strong> {{ $post->user->username ?? 'unknown' }}</p>
                                </div>
                                <form class="action-buttons" method="POST" action="{{ route('admin.handle', $post->id) }}">
                                    @csrf
                                    <button name="action" value="approve" class="approve-btn">Approve</button>
                                    <button name="action" value="decline" class="decline-btn">Decline</button>
                                </form>
                            </div>
                        @endif
                    @endforeach
                    @if(!$hasLostPosts)
                        <div class="no-reports">
                                <p class="text-reports">No Lost Reports Found</p>
                        </div>
                    @endif
                    </div>
            </div>
            <!-- Found Reports Section -->
            <div id="found-reports" class="tab-content">
                <h2 class="section-title">Pending Post Request</h2>
                <p class="found-section">Found Reports</p>
                <div class="requests-container">
                    @php $hasFoundPosts = false; @endphp
                    @foreach($posts as $post)
                        @if($post->status == 1 && $post->lost_or_found == 'found')
                            @php $hasFoundPosts = true; @endphp
                            <div class="request-item">
                                <div class="item-image">
                                    <img src="{{ $post->image_path ? asset('storage/' . $post->image_path) : asset('assets/default.png') }}" alt="{{ $post->item_name }}" class="item-img">
                                </div>
                                <div class="item-details">
                                    <p><strong>Last seen:</strong> {{ $post->last_seen_date }}</p>
                                    <p><strong>Item:</strong> {{ $post->item_name }}</p>
                                    <p><strong>Contact Details:</strong></p>
                                    <p>{{ trim(($post->user->first_name ?? '') . ' ' . ($post->user->last_name ?? '')) ?: 'Unknown' }}</p>
                                    <p>{{ $post->user->contact_number ?? '' }}</p>
                                    <p><strong>Other details:</strong> {{ $post->other_details }}</p>
                                    <p><strong>Posted by:</strong> {{ $post->user->username ?? 'unknown' }}</p>
                                </div>
                                <form class="action-buttons" method="POST" action="{{ route('admin.handle', $post->id) }}">
                                    @csrf
                                    <button name="action" value="approve" class="approve-btn">Approve</button>
                                    <button name="action" value="decline" class="decline-btn">Decline</button>
                                </form>
                            </div>
                        @endif
                    @endforeach
                    @if(!$hasFoundPosts)
                        <div class="no-reports">
                                <p class="text-reports">No Found Reports Found</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Get navigation items
                const navItems = document.querySelectorAll('.nav-item');
                const lostTab = navItems[0];
                const foundTab = navItems[1];
                
                // Get content sections
                const lostReports = document.getElementById('lost-reports');
                const foundReports = document.getElementById('found-reports');
                
                // Initialize - hide found reports initially
                foundReports.style.display = 'none';
                lostReports.style.display = 'block';
                
                // Make sure the correct tab is active initially
                lostTab.classList.add('active');
                foundTab.classList.remove('active');
                
                // Add click event listeners
                lostTab.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Update active states
                    lostTab.classList.add('active');
                    foundTab.classList.remove('active');
                    
                    // Show/hide content
                    lostReports.style.display = 'block';
                    foundReports.style.display = 'none';
                });
                
                foundTab.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Update active states
                    foundTab.classList.add('active');
                    lostTab.classList.remove('active');
                    
                    // Show/hide content
                    foundReports.style.display = 'block';
                    lostReports.style.display = 'none';
                });
            });
        </script>    
    </body>
</html>