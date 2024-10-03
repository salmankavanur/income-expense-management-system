@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    <!-- Navigation Bar -->
    <nav class="bg-white dark:bg-gray-800 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16"> <!-- Use items-center for vertical alignment -->
                <div class="flex space-x-4">
                    <!-- Navigation Links -->
                    <a href="{{ route('dashboard') }}" class="text-gray-900 dark:text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-200 dark:hover:bg-gray-700">
                        Dashboard
                    </a>
                    <a href="{{ route('profile.show') }}" class="text-gray-900 dark:text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-200 dark:hover:bg-gray-700">
                        Profile
                    </a>
                    
                    <a href="{{ route('categories.index') }}" class="text-gray-900 dark:text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-200 dark:hover:bg-gray-700">
                        Categories
                    </a>
                    <a href="{{ route('transactions.index') }}" class="text-gray-900 dark:text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-200 dark:hover:bg-gray-700">
                        Transactions
                    </a>
                </div>

                <div class="flex items-center space-x-4">
                    <!-- Logout Button -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="px-4 py-2 rounded-lg bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition ease-in-out duration-150">
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
            <h1 class="text-5xl font-extrabold text-gray-900 dark:text-white">Welcome to Your Dashboard</h1>
            <p class="mt-4 text-lg text-gray-700 dark:text-gray-300">
                Manage your income and expenses with ease.
            </p>
        </div>

        <!-- Analytics Section -->
        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Total Income -->
            <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Total Income</h2>
                <div class="mt-4 flex items-baseline space-x-2">
                    <span class="text-4xl font-bold text-green-600 dark:text-green-400">₹{{ $totalIncome }}</span>
                </div>
                <p class="text-gray-500 dark:text-gray-400 mt-2">Track your earnings</p>
            </div>

            <!-- Total Expense -->
            <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Total Expense</h2>
                <div class="mt-4 flex items-baseline space-x-2">
                    <span class="text-4xl font-bold text-red-600 dark:text-red-400">₹{{ $totalExpense }}</span>
                </div>
                <p class="text-gray-500 dark:text-gray-400 mt-2">Monitor your spending</p>
            </div>

            <!-- Balance -->
            <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Balance</h2>
                <div class="mt-4 flex items-baseline space-x-2">
                    <span class="text-4xl font-bold text-blue-600 dark:text-blue-400">₹{{ $balance }}</span>
                </div>
                <p class="text-gray-500 dark:text-gray-400 mt-2">Your current balance</p>
            </div>
        </div>
    </div>
</div>
@endsection
