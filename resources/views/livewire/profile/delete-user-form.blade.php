<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Component;

new class extends Component
{
    public string $password = '';

    /**
     * Delete the currently authenticated user.
     */
    public function deleteUser(Logout $logout): void
    {
        $this->validate([
            'password' => ['required', 'string', 'current_password'],
        ]);

        tap(Auth::user(), $logout(...))->delete();

        $this->redirect('/', navigate: true);
    }
}; ?>

<div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
        {{ __('Delete Account') }}
    </h3>

    <p class="text-sm text-gray-600 dark:text-gray-400">
        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please download any data or information that you wish to retain before deleting your account.') }}
    </p>

    <div class="mt-5">
        <form wire:submit.prevent="deleteUser">
            @csrf
            <div class="max-w-xs">
                <x-input-label for="password" :value="__('Password Confirmation')" />
                <x-text-input id="password" type="password" wire:model.defer="password" class="block w-full mt-1" required />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex justify-end mt-4">
                <x-danger-button>
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </div>
</div>
