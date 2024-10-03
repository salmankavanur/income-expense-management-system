<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" :class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Income Expense Management')</title>
    
    <!-- Vite: Include compiled CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Include Heroicons for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/heroicons/1.0.6/outline/heroicons-outline.min.css" rel="stylesheet">
</head>
<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 min-h-screen flex flex-col">
    
    <!-- Navbar -->
    <nav class="p-4 bg-gray-100 dark:bg-gray-800">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Replace text with the logo -->
            <a href="{{ route('dashboard') }}">
                <img src="{{ asset('images/income-expense-m-logo-04.svg') }}" alt="Income Expense Management Logo" class="h-10"> <!-- Adjust the height as needed -->
            </a>

            <div class="flex items-center space-x-4">
                <!-- Back to Home Button (visible on sub-pages only) -->
                @if (Route::currentRouteName() !== 'dashboard')
                    <a href="{{ route('dashboard') }}" class="text-sm font-semibold p-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md">
                        Back to Home
                    </a>
                @endif

                <!-- Dark Mode Toggle Button with Icons -->
                <button @click="darkMode = !darkMode; localStorage.setItem('darkMode', darkMode)" class="relative inline-flex items-center h-6 rounded-full w-11 focus:outline-none focus:ring focus:ring-indigo-500">
                    <span class="sr-only">Toggle dark mode</span>
                    <span class="absolute inset-0 bg-gray-200 dark:bg-gray-600 rounded-full transition-all"></span>
                    <span class="absolute left-1 w-5 h-5 transform bg-white rounded-full transition-transform dark:translate-x-5 dark:bg-gray-900"></span>

                    <!-- Icons inside toggle -->
                    <span class="absolute left-1 w-5 h-5 flex items-center justify-center text-gray-400 dark:text-yellow-400">
                        <!-- Moon Icon (for dark mode) -->
                        <svg x-show="darkMode" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 3.25a7.75 7.75 0 011.197 15.397A7.5 7.5 0 1110 3.25z" />
                        </svg>
                        <!-- Sun Icon (for light mode) -->
                        <svg x-show="!darkMode" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 4.75a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2.75 10h14.5M10 2.75v14.5M3.52 3.52l12.96 12.96M3.52 16.48L16.48 3.52" />
                        </svg>
                    </span>
                </button>
            </div>
        </div>
    </nav>


    <!-- Main Content -->
    <main class="flex-grow container mx-auto py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-100 dark:bg-gray-800 p-4 text-center">
        <p class="text-sm text-gray-600 dark:text-gray-400">© 2024 Income-Expense Management System</p>
    </footer>
</body>
</html>
