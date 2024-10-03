@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between mb-4">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">User Management</h1>
        <a href="{{ route('users.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">Add User</a>
    </div>

    <table class="min-w-full bg-white dark:bg-gray-800 shadow rounded-lg">
        <thead>
            <tr>
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Name</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Email</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Role</th>
                <th class="px-4 py-2 text-right text-sm font-medium text-gray-700 dark:text-gray-300">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td class="px-4 py-2 text-sm text-gray-700 dark:text-gray-300">{{ $user->name }}</td>
                <td class="px-4 py-2 text-sm text-gray-700 dark:text-gray-300">{{ $user->email }}</td>
                <td class="px-4 py-2 text-sm text-gray-700 dark:text-gray-300">{{ $user->roles->pluck('name')->join(', ') }}</td>
                <td class="px-4 py-2 text-sm text-right space-x-2">
                    <a href="{{ route('users.edit', $user) }}" class="bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600">Edit</a>
                    <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
