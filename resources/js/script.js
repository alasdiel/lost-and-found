document.addEventListener('DOMContentLoaded', function() {
    // Get DOM elements
    const tabs = document.querySelectorAll('.tab');
    const lostContent = document.getElementById('lostContent');
    const foundContent = document.getElementById('foundContent');
    const searchInput = document.getElementById('searchInput');

    //SET LOST AS DEFAULT
    lostContent.style.display = 'block';
    foundContent.style.display = 'none';
    
    // Determine if user is logged in based on current page
    const isUserLoggedIn = document.body.classList.contains('user-page');
    
    // Get current page filename
    const currentPage = window.location.pathname.split('/').pop();
    
    // Tab switching functionality
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const tabType = this.getAttribute('data-tab');
            
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
    
    // Login button functionality - updated to point to Log_in.blade.php
    const loginButtons = document.querySelectorAll('.login-btn, .login-link');
    loginButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            window.location.href = 'Log_in.blade.php';
        });
    });
    
    // Submit button functionality (for user pages)
    const submitButtons = document.querySelectorAll('.submit-btn');
    submitButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            // Redirect to form submission page
            window.location.href = 'Form_submission.blade.php';
        });
    });
    
    // Profile button functionality (for user pages)
    const profileButtons = document.querySelectorAll('.profile-btn');
    profileButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            // Redirect to user profile page
            window.location.href = 'User_profile_reports.blade.php';
        });
    });
});

// For demonstration purposes, logging that script is loaded
console.log('Lost and Found Portal script loaded successfully');