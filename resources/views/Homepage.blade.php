<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lost and Found Portal</title>
        <!-- Include your CSS file -->
        @vite(['resources/css/styles.css'])
    </head>

    <style>
        .success-message {
        padding: 1rem;
        margin-bottom: 1rem;
        color: #22543d;
        background-color: #f0fff4;
        border-radius: 10px;
        width: 80%;
        margin-left: 1rem;
        margin-right: 1rem;
        }

        /* .failed-message {
        padding: 1rem;
        margin-bottom: 1rem;
        color: #da5959;
        background-color: #f0fff4;
        border-radius: 10px;
        width: 80%;
        margin-left: 1rem;
        margin-right: 1rem;

        } */
    </style>

    <body class="lost-page">
        <div class="page-wrapper">
            <!-- White header border -->
            <div class="top-header">
                <div class="container">
                    <div class="header-content">
                        <h1 class="portal-title">Lost and Found Portal</h1>
                        <div class="user-actions">
                        @auth
                            @if (Auth::user()->is_admin)
                                <a href="{{ route('show.report') }}" class="submit-btn">Submit</a>
                                <a href="{{ route('show.dashboard') }}" class="dashboard-btn">Dashboard</a>
                                <form action="{{ route('logout') }}" method="POST" class="logout-form" style="display:inline;">
                                @csrf
                                <button type="submit" class="logout-btn">Log out</button>
                            </form>
                            @else
                            <a href="{{ route('show.report') }}" class="submit-btn">Submit</a>
                            <a href="{{ route('show.profile') }}" class="profile-btn">Profile</a>
                            <form action="{{ route('logout') }}" method="POST" class="logout-form" style="display:inline;">
                                @csrf
                                <button type="submit" class="logout-btn">Log out</button>
                            </form>
                            @endif
                        @endauth
                        @guest
                            <a href="{{ route('show.signup') }}" class="submit-btn">Sign up</a>
                            <a href="{{ route('show.login') }}" class="login-btn">Log in</a>
                        @endguest

                        </div>
                    </div>
                </div>
            </div>
            @if (session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
            @endif

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
                        <!-- LOST -->
                        @php $count = 0; @endphp
                        @foreach($posts as $post)
                            @if($post->status === 0 && $post->lost_or_found === 'lost')
                                @if($count % 3 === 0)
                                    @if($count > 0)
                                        </div> <!-- Close previous items-container -->
                                    @endif
                                    <div class="items-container">
                                @endif
                                <div class="item-card">
                                    <div class="item-image-container">
                                        @if($post->image_path)
                                            <img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->item_name }}" class="item-image">
                                        @else
                                            <img src="assets/default.png" alt="No Image" class="item-image">
                                        @endif
                                    </div>
                                    <div class="item-details">
                                        <p class="detail"><strong>Last seen:</strong> {{ $post->last_seen_date }}</p>
                                        <p class="detail"><strong>Item:</strong> {{ $post->item_name }}</p>
                                        <p class="detail"><strong>Contact Details:</strong></p>
                                        <p class="detail">{{ trim(($post->user->first_name ?? '') . ' ' . ($post->user->last_name ?? '')) ?: 'Unknown' }}</p>
                                        <p class="detail">{{ $post->user->phone ?? '' }}</p>
                                        <p class="detail"><strong>Other details:</strong> {{ $post->other_details }}</p>
                                        <p class="detail posted-by">Posted by: {{ $post->user->username ?? 'unknown' }}</p>
                                        <form class="action-buttons" method="POST" action="{{ route('admin.handle', $post->id) }}">
                                            @csrf
                                            <!-- eve wala koy css vvvvv -->
                                            <button name="action" value="decline" class="decline-btn">Delete</button>
                                        </form>
                                    </div>
                                </div>
                                @php $count++; @endphp
                            @endif
                        @endforeach
                        @if($count > 0)
                            </div> <!-- Close last items-container -->
                        @else
                            <div class="items-container" style="display: flex; justify-content: center; align-items: center;width: 100%;">
                                <div class="item-card" style="padding: 100px; text-align: center;">
                                    <div class="item-details" style="text-align:center;">
                                        <p class="detail"><strong>No found results</strong></p>
                                    </div>
                                </div>
                            </div>
                        @endif
                </div>
                </div>
                <!-- Main content area with light background (FOUND) -->
                <div class="main-content-area" id="foundContent">
                    <div class="tab-content">
                        <!-- FOUND -->
                        @php $count = 0; @endphp
                        @foreach($posts as $post)
                            @if($post->status === 0 && $post->lost_or_found === 'found')
                                @if($count % 3 === 0)
                                    @if($count > 0)
                                        </div> <!-- Close previous items-container -->
                                    @endif
                                    <div class="items-container">
                                @endif
                                <div class="item-card">
                                    <div class="item-image-container">
                                        @if($post->image_path)
                                            <img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->item_name }}" class="item-image">
                                        @else
                                            <img src="assets/default.png" alt="No Image" class="item-image">
                                        @endif
                                    </div>
                                    <div class="item-details">
                                        <p class="detail"><strong>Last seen:</strong> {{ $post->last_seen_date }}</p>
                                        <p class="detail"><strong>Item:</strong> {{ $post->item_name }}</p>
                                        <p class="detail"><strong>Contact Details:</strong></p>
                                        <p class="detail">{{ trim(($post->user->first_name ?? '') . ' ' . ($post->user->last_name ?? '')) ?: 'Unknown' }}</p>
                                        <p class="detail">{{ $post->user->phone ?? '' }}</p>
                                        <p class="detail"><strong>Other details:</strong> {{ $post->other_details }}</p>
                                        <p class="detail posted-by">Posted by: {{ $post->user->username ?? 'unknown' }}</p>
                                        <form class="action-buttons" method="POST" action="{{ route('admin.handle', $post->id) }}">
                                            @csrf
                                            <!-- eve wala koy css vvvvv -->
                                            <button name="action" value="decline" class="decline-btn">Delete</button>
                                        </form>
                                    </div>
                                </div>
                                @php $count++; @endphp
                            @endif
                        @endforeach
                        @if($count > 0)
                            </div> <!-- Close last items-container -->
                        @else
                            <div class="items-container" style="display: flex; justify-content: center; align-items: center;width: 100%;">
                                <div class="item-card" style="padding: 100px; text-align: center;">
                                    <div class="item-details" style="text-align:center;">
                                        <p class="detail"><strong>No found results</strong></p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        @guest
        <footer>
            <p>Want to submit a report? <a href="{{ route('show.login') }}" class="login-link">Log in.</a></p>
        </footer>
        @endguest
        <!-- JS file -->
        @vite(['resources/js/script.js'])
    </body>

</html>