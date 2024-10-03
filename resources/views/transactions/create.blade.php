<!-- resources/views/transactions/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-8">Add New Transaction</h1>

    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
            <strong class="font-bold">Whoops!</strong>
            <span class="block sm:inline">There were some problems with your input.</span>
            <ul class="mt-2 list-disc list-inside text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Transaction Form -->
    <form action="{{ route('transactions.store') }}" method="POST" class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-8 space-y-6">
        @csrf

        <!-- Category Dropdown -->
        <div class="flex flex-col space-y-1">
            <label for="category_id" class="text-gray-900 dark:text-gray-300 font-semibold">Category</label>
            <select name="category_id" id="category_id" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Amount Input -->
        <div class="flex flex-col space-y-1">
            <label for="amount" class="text-gray-900 dark:text-gray-300 font-semibold">Amount (₹)</label>
            <input type="number" name="amount" id="amount" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" value="{{ old('amount') }}" step="0.01" required>
        </div>

        <!-- Date Input -->
        <div class="flex flex-col space-y-1">
            <label for="date" class="text-gray-900 dark:text-gray-300 font-semibold">Date</label>
            <input type="date" name="date" id="date" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" value="{{ old('date') }}" required>
        </div>

        <!-- Description Textarea -->
        <div class="flex flex-col space-y-1">
            <label for="description" class="text-gray-900 dark:text-gray-300 font-semibold">Description</label>
            <textarea name="description" id="description" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">{{ old('description') }}</textarea>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit" class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-lg shadow-md transition ease-in-out duration-150">
                Add Transaction
            </button>
        </div>
    </form>
</div>
@endsection
