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
</head>
<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 min-h-screen flex flex-col">
    
    <!-- Navbar -->
    <nav class="p-4 bg-gray-100 dark:bg-gray-800">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Income Expense Management</h1>

            <!-- Dark Mode Toggle -->
            <button @click="darkMode = !darkMode; localStorage.setItem('darkMode', darkMode)" class="text-sm font-semibold p-2 bg-gray-300 dark:bg-gray-600 rounded-md">
                Toggle Dark Mode
            </button>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-100 dark:bg-gray-800 p-4 text-center">
        <p class="text-sm text-gray-600 dark:text-gray-400">© 2024 Income Expense Management</p>
    </footer>
</body>
</html>
