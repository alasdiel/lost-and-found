document.addEventListener('DOMContentLoaded', function() {
    // Handle navigation between tabs
    const navItems = document.querySelectorAll('.nav-item');
    
    navItems.forEach(item => {
        item.addEventListener('click', function(e) {
            // We'll let the default link behavior handle the navigation
            // The active class will be set in the HTML of each page
        });
    });
    
    // Handle logout button
    const logoutBtn = document.querySelector('.logout-btn');
    if (logoutBtn) {
        logoutBtn.addEventListener('click', function() {
            // Redirect to guest homepage when logging out
            window.location.href = 'Homepage_guest_lost.html';
        });
    }
    
    // Handle back to home button
    const backHomeBtn = document.querySelector('.back-home-btn');
    if (backHomeBtn) {
        backHomeBtn.addEventListener('click', function(e) {
            e.preventDefault();
            // Redirect to user homepage
            window.location.href = 'Homepage_user_lost.html';
        });
    }
    
    // Handle form submission in settings page
    const settingsForm = document.querySelector('.settings-form');
    if (settingsForm) {
        settingsForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const userName = document.getElementById('userName').value;
            const phoneNumber = document.getElementById('phoneNumber').value;
            const email = document.getElementById('email').value;
            const newPassword = document.getElementById('newPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            
            // Validate form
            if (newPassword && newPassword !== confirmPassword) {
                alert('Passwords do not match!');
                return;
            }
            
            // In a real application, you would send this data to a server
            // For now, just show a success message
            alert('Profile updated successfully!');
        });
    }
    
    // Handle filter dropdown
    const filterBtn = document.querySelector('.filter-btn');
    const filterOptions = document.querySelector('.filter-options');
    
    if (filterBtn && filterOptions) {
        // Show/hide filter options on click
        filterBtn.addEventListener('click', function() {
            filterOptions.style.display = filterOptions.style.display === 'block' ? 'none' : 'block';
        });
        
        // Hide filter options when clicking outside
        document.addEventListener('click', function(e) {
            if (!filterBtn.contains(e.target) && !filterOptions.contains(e.target)) {
                filterOptions.style.display = 'none';
            }
        });
        
        // Handle filter option selection
        const filterLinks = filterOptions.querySelectorAll('a');
        filterLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                filterBtn.textContent = this.textContent + ' ▼';
                filterOptions.style.display = 'none';
                
                // In a real application, you would filter the table based on the selection
                // For now, just log the selected filter
                console.log('Filter selected:', this.textContent);
            });
        });
    }
    
    // Handle search functionality
    const searchInput = document.querySelector('.search-input');
    const searchBtn = document.querySelector('.search-btn');
    const tableRows = document.querySelectorAll('.table-row');
    
    if (searchInput && searchBtn && tableRows.length > 0) {
        const performSearch = function() {
            const searchTerm = searchInput.value.toLowerCase().trim();
            
            tableRows.forEach(row => {
                const postId = row.querySelector('.table-cell:nth-child(2)').textContent.toLowerCase();
                
                if (searchTerm === '' || postId.includes(searchTerm)) {
                    row.style.display = 'flex';
                } else {
                    row.style.display = 'none';
                }
            });
        };
        
        searchBtn.addEventListener('click', performSearch);
        
        searchInput.addEventListener('keyup', function(e) {
            if (e.key === 'Enter') {
                performSearch();
            }
        });
    }
});

console.log('Profile script loaded successfully');