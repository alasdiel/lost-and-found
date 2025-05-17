<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost and Found Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="min-h-screen" style="background-color: #b3c0e6;">
    <!-- Header -->
    <div class="bg-white rounded-b-lg shadow-md px-4 py-3 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-indigo-900">Lost and Found Portal</h1>
        <a href="/login" class="bg-indigo-900 text-white px-6 py-2 rounded-md font-medium">Log in</a>
    </div>

    <div class="container mx-auto px-4 py-8">
        <!-- Search Bar -->
        <div class="mb-6">
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </span>
                <input type="text" class="w-full pl-10 pr-4 py-2 rounded-lg border-0 focus:ring-2 focus:ring-indigo-500" placeholder="Search">
            </div>
        </div>

        <!-- Tabs and Content -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <!-- Tabs -->
            <div class="flex">
                <button class="w-1/2 py-4 text-xl font-bold text-white bg-indigo-900">LOST</button>
                <button class="w-1/2 py-4 text-xl font-bold text-indigo-900 bg-white">FOUND</button>
            </div>

            <!-- Content -->
            <div class="p-4 bg-pink-50">
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Lost Item -->
                    <div class="bg-indigo-300 p-4 rounded-lg">
                        <div class="bg-white p-2 rounded-lg mb-4">
                            <img src="/images/hydro-flask.jpg" alt="Hydro Flask" class="w-full h-64 object-contain">
                        </div>
                        <div class="text-indigo-900">
                            <p class="font-medium">Last seen: 03/23/2025</p>
                            <p class="font-medium">Item: Hydro Flask</p>
                            <p class="font-medium">Contact Details:</p>
                            <p class="font-medium">Alex Neal Albinda</p>
                            <p class="font-medium">09xxxxxxxxx</p>
                            <p class="font-medium">Other details: naay dent</p>
                            <p class="text-indigo-700">Posted by: alasdiel</p>
                        </div>
                    </div>

                    <!-- Found Item -->
                    <div class="bg-indigo-300 p-4 rounded-lg">
                        <div class="bg-white p-2 rounded-lg mb-4">
                            <img src="/images/playstation-5.jpg" alt="PlayStation 5" class="w-full h-64 object-contain">
                        </div>
                        <div class="text-indigo-900">
                            <p class="font-medium">Last seen: 03/23/1990</p>
                            <p class="font-medium">Item: Playstation 5</p>
                            <p class="font-medium">Contact Details:</p>
                            <p class="font-medium">Alex Neal Albinda</p>
                            <p class="font-medium">09xxxxxxxxx</p>
                            <p class="text-indigo-700">Posted by: alasdiel</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center mt-6 text-indigo-900">
            <p>Want to submit a report? <a href="/login" class="font-bold">Log in.</a></p>
        </div>
    </div>
</div>
</body>
</html>