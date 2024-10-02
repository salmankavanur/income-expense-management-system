<!-- resources/views/categories/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-8">Edit Category</h1>

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

    <!-- Edit Category Form -->
    <form action="{{ route('categories.update', $category->id) }}" method="POST" class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-8 space-y-6">
        @csrf
        @method('PUT')

        <!-- Category Name Input -->
        <div class="flex flex-col space-y-1">
            <label for="name" class="text-gray-900 dark:text-gray-300 font-semibold">Category Name</label>
            <input type="text" name="name" id="name" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" value="{{ old('name', $category->name) }}" required>
        </div>

        <!-- Category Type Dropdown -->
        <div class="flex flex-col space-y-1">
            <label for="type" class="text-gray-900 dark:text-gray-300 font-semibold">Category Type</label>
            <select name="type" id="type" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                <option value="income" {{ $category->type == 'income' ? 'selected' : '' }}>Income</option>
                <option value="expense" {{ $category->type == 'expense' ? 'selected' : '' }}>Expense</option>
            </select>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit" class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-lg shadow-md transition ease-in-out duration-150">
                Update Category
            </button>
        </div>
    </form>
</div>
@endsection
