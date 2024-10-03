<!-- resources/views/profile.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Update Profile Information -->
            <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <livewire:profile.update-profile-information-form />
            </div>
    
            <!-- Update Password -->
            <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <livewire:profile.update-password-form />
            </div>
    
            <!-- Delete Account -->
            <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <livewire:profile.delete-user-form />
            </div>
        </div>
    </div>
    
            </div>
        </div>
    </div>
</x-app-layout>
