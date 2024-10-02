<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Routes for unauthenticated users (guest)
Route::middleware('guest')->group(function () {
    
    // Registration page
    Volt::route('register', 'pages.auth.register')
        ->name('register');

    // Login page
    Volt::route('login', 'pages.auth.login')
        ->name('login');

    // Forgot password page (request password reset link)
    Volt::route('forgot-password', 'pages.auth.forgot-password')
        ->name('password.request');

    // Reset password page (after clicking on reset link in email)
    Volt::route('reset-password/{token}', 'pages.auth.reset-password')
        ->name('password.reset');
});

// Routes for authenticated users
Route::middleware('auth')->group(function () {
    
    // Verify email notice page (shows prompt to verify email)
    Volt::route('verify-email', 'pages.auth.verify-email')
        ->name('verification.notice');

    // Verify email action (after clicking email verification link)
    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])  // Signed URL and throttling to prevent abuse
        ->name('verification.verify');

    // Confirm password page (asks users to re-enter password for sensitive actions)
    Volt::route('confirm-password', 'pages.auth.confirm-password')
        ->name('password.confirm');
});
