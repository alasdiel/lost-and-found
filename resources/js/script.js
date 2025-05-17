document.addEventListener('DOMContentLoaded', function() {
    // Get DOM elements
    const tabs = document.querySelectorAll('.tab');
<<<<<<< HEAD
    const searchInput = document.getElementById('searchInput');
=======
    const lostContent = document.getElementById('lostContent');
    const foundContent = document.getElementById('foundContent');
    const searchInput = document.getElementById('searchInput');

    //SET LOST AS DEFAULT
    lostContent.style.display = 'block';
    foundContent.style.display = 'none';
>>>>>>> 1ca6faf2fac7c1251f4a2884cdb9c607e65c49f2
    
    // Determine if user is logged in based on current page
    const isUserLoggedIn = document.body.classList.contains('user-page');
    
<<<<<<< HEAD
    // Tab switching functionality - navigates between HTML files
=======
    // Get current page filename
    const currentPage = window.location.pathname.split('/').pop();
    
    // Tab switching functionality
>>>>>>> 1ca6faf2fac7c1251f4a2884cdb9c607e65c49f2
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const tabType = this.getAttribute('data-tab');
            
<<<<<<< HEAD
            // Navigate to the appropriate HTML file based on user status
            if (tabType === 'lost') {
                if (isUserLoggedIn) {
                    window.location.href = 'Homepage_user_lost.html';
                } else {
                    window.location.href = 'Homepage_guest_lost.html';
                }
            } else if (tabType === 'found') {
                if (isUserLoggedIn) {
                    window.location.href = 'Homepage_user_found.html';
                } else {
                    window.location.href = 'Homepage_guest_found.html';
                }
=======
            // For other cases, use the seamless tab switching
            // Remove active class from all tabs
            tabs.forEach(t => t.classList.remove('active'));
            
            // Add active class to clicked tab
            this.classList.add('active');
            
            // Show/hide appropriate content
            if (tabType === 'lost') {
                lostContent.style.display = 'block';
                foundContent.style.display = 'none';
                document.body.classList.add('lost-page');
                document.body.classList.remove('found-page');
            } else if (tabType === 'found') {
                lostContent.style.display = 'none';
                foundContent.style.display = 'block';
                document.body.classList.add('found-page');
                document.body.classList.remove('lost-page');
>>>>>>> 1ca6faf2fac7c1251f4a2884cdb9c607e65c49f2
            }
        });
    });
    
    // Search functionality
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase().trim();
            
            // Get all visible item cards in the current page
            const itemCards = document.querySelectorAll('.item-card');
            
            itemCards.forEach(card => {
                const itemDetails = card.querySelector('.item-details').textContent.toLowerCase();
                
                // Show/hide cards based on search term
                if (searchTerm === '' || itemDetails.includes(searchTerm)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    }
    
<<<<<<< HEAD
    // Login button functionality (for guest pages)
    const loginButtons = document.querySelectorAll('.login-btn, .login-link');
    loginButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            // After login, redirect to user version of the current page
            const isLostPage = document.body.classList.contains('lost-page');
            if (isLostPage) {
                window.location.href = 'Homepage_user_lost.html';
            } else {
                window.location.href = 'Homepage_user_found.html';
            }
        });
    });
    
    // Submit button functionality (for user pages)
    const submitButtons = document.querySelectorAll('.submit-btn');
    submitButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            // Redirect to form submission page
            window.location.href = 'Form_submission.html';
        });
    });
    
    // Profile button functionality (for user pages)
    const profileButtons = document.querySelectorAll('.profile-btn');
    profileButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            // Redirect to user profile page
            window.location.href = 'User_profile_reports.html';
        });
    });
});

// For demonstration purposes, logging that script is loaded
console.log('Lost and Found Portal script loaded successfully');
=======
    // Login button functionality - updated to point to Log_in.blade.php
    // const loginButtons = document.querySelectorAll('.login-btn, .login-link');
    // loginButtons.forEach(button => {
    //     button.addEventListener('click', function(e) {
    //         e.preventDefault();
    //         window.location.href = 'Log_in.blade.php';
    //     });
    // });
});
    // For demonstration purposes, logging that script is loaded
    console.log('Lost and Found Portal script loaded successfully');
>>>>>>> 1ca6faf2fac7c1251f4a2884cdb9c607e65c49f2
