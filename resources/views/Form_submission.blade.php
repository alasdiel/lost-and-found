<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lost and Found Portal Report</title>
        <!-- Include your CSS file -->
        @vite(['resources/css/form_styles.css'])
    </head>

    <body>
        <div class="page-container">

            <!-- header border -->
            <div class="header-container">
                <!--
                <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8.009 8.009 0 0 1-8 8z"/><path d="M13.293 7.293 8.586 12l4.707 4.707 1.414-1.414L11.414 12l3.293-3.293-1.414-1.414z"/></svg>
                -->
                <a href="{{ route('show.home') }}" class="back-button">Back to Home</a>
            </div>

            <!-- Main content area -->
            <div class="form-container">
                <h2>Submit a report</h2>
                
                <form id="lost-found-form" action="{{ route('report') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- L/F and Item Name-->
                    <div class="form-row">
                        <!-- Lost or Found -->
                        <div class="form-group">
                            <label for="status">Lost or Found</label>
                            <select id="status" name="lost_or_found" required>
                                <option value="found" selected>FOUND</option>
                                <option value="lost">LOST</option>
                            </select>
                        </div>
                        
                        <!-- Item Name -->
                        <div class="form-group">
                            <label for="item-name">Item Name</label>
                            <input type="text" id="item-name" name="item_name" required>
                        </div>
                    </div>
                    
                    <!-- Data and Location -->
                    <div class="form-row">
                        <!-- Date -->
                        <div class="form-group">
                            <label for="last-seen-date">Last seen date</label>
                            <input type="date" id="last-seen-date" name="last_seen_date" required>
                        </div>
                        
                        <!-- Location -->
                        <div class="form-group">
                            <label for="last-seen-location">Last seen location</label>
                            <input type="text" id="last-seen-location" name="last_seen_location" required>
                        </div>
                    </div>
                    
                    <!--Details and Image-->
                    <div class="form-row">
                        <!-- Details -->
                        <div class="form-group">
                            <label for="other-details">Other Details (Optional)</label>
                            <textarea id="other-details" name="other_details" rows="5"></textarea>
                        </div>
                        
                        <!-- Image -->
                        <div class="form-group">
                            <label for="upload-image">Upload Image</label>
                            <div class="file-upload">
                                <input type="file" id="upload-image" name="image" accept="image/*" onchange="showFileName(this)" required>
                                <label for="upload-image" class="file-upload-btn">
                                    <span class="upload-icon">&#8593;</span> choose file
                                </label>
                                <span id="file-name" style="margin-left:10px; color:#333;"></span>
                            </div>

                            <script>
                            function showFileName(input) {
                                const fileNameSpan = document.getElementById('file-name');
                                if (input.files && input.files[0]) {
                                    fileNameSpan.textContent = input.files[0].name;
                                } else {
                                    fileNameSpan.textContent = '';
                                }
                            }
                            </script>
                            
                            <!-- Submit Button -->
                            <div class="submit-container">
                                <button type="submit" class="submit-btn">SUBMIT</button>
                            </div>

                        </div>
                    </div>

                </form>

            </div>
        </div>

    </body>
</html>