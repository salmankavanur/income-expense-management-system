<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Livewire\Volt\Component;

new class extends Component
{
    public string $current_password = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Update the password for the currently authenticated user.
     */
    public function updatePassword(): void
    {
        try {
            $validated = $this->validate([
                'current_password' => ['required', 'string', 'current_password'],
                'password' => ['required', 'string', Password::defaults(), 'confirmed'],
            ]);
        } catch (ValidationException $e) {
            $this->reset('current_password', 'password', 'password_confirmation');

            throw $e;
        }

        Auth::user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        $this->reset('current_password', 'password', 'password_confirmation');

        $this->dispatch('password-updated');
    }
}; ?>

<div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
        {{ __('Update Password') }}
    </h3>

    <form wire:submit.prevent="updatePassword">
        @csrf
        <!-- Current Password -->
        <div class="mt-4">
            <x-input-label for="current_password" :value="__('Current Password')" />
            <x-text-input id="current_password" type="password" wire:model.defer="current_password" class="block w-full mt-1" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('current_password')" class="mt-2" />
        </div>

        <!-- New Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('New Password')" />
            <x-text-input id="password" type="password" wire:model.defer="password" class="block w-full mt-1" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" type="password" wire:model.defer="password_confirmation" class="block w-full mt-1" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-6">
            <x-primary-button>
                {{ __('Update Password') }}
            </x-primary-button>
        </div>
    </form>
</div>
