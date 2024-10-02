@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    <!-- Navigation Bar -->
    <nav class="bg-white dark:bg-gray-800 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex space-x-4">
                    <a href="{{ route('dashboard') }}" class="text-gray-900 dark:text-white px-3 py-2 rounded-md text-sm font-medium">
                        Dashboard
                    </a>
                    <a href="{{ route('profile') }}" class="text-gray-900 dark:text-white px-3 py-2 rounded-md text-sm font-medium">
                        Profile
                    </a>
                    <a href="{{ route('categories.index') }}" class="text-gray-900 dark:text-white px-3 py-2 rounded-md text-sm font-medium">
                        Categories
                    </a>
                    <a href="{{ route('transactions.index') }}" class="text-gray-900 dark:text-white px-3 py-2 rounded-md text-sm font-medium">
                        Transactions
                    </a>
                </div>

                <div class="flex items-center space-x-4">
                    <!-- Dark Mode Toggle -->
                    <button onclick="toggleDarkMode()" class="px-3 py-2 bg-gray-200 dark:bg-gray-700 text-gray-900 dark:text-white rounded-md text-sm font-medium">
                        Toggle Dark Mode
                    </button>

                    <!-- Logout -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="px-3 py-2 rounded-md text-sm font-medium text-gray-900 dark:text-white">
                            Logout
                        </button>
                    </form>
                    
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-gray-900 dark:text-white">Welcome to the Dashboard</h1>
            <p class="mt-4 text-lg text-gray-700 dark:text-gray-300">
                This is your income and expense management system dashboard.
            </p>
        </div>

        <!-- Analytics Section -->
        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Total Income -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Total Income</h2>
                <p class="mt-4 text-4xl font-bold text-green-600 dark:text-green-400">${{ $totalIncome }}</p>
            </div>

            <!-- Total Expense -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Total Expense</h2>
                <p class="mt-4 text-4xl font-bold text-red-600 dark:text-red-400">${{ $totalExpense }}</p>
            </div>

            <!-- Balance -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Balance</h2>
                <p class="mt-4 text-4xl font-bold text-blue-600 dark:text-blue-400">${{ $balance }}</p>
            </div>
        </div>
    </div>
</div>

<!-- Dark Mode Script -->
<script>
    function toggleDarkMode() {
        document.documentElement.classList.toggle('dark');
        localStorage.setItem('darkMode', document.documentElement.classList.contains('dark'));
    }

    if (localStorage.getItem('darkMode') === 'true') {
        document.documentElement.classList.add('dark');
    }
</script>
@endsection
