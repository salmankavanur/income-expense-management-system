<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Redirect root URL to the login page if not authenticated
Route::get('/', function () {
    return redirect('/dashboard');
})->middleware(['auth', 'verified']);

// Authenticated routes (users need to be logged in)
Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard Route
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Profile Route
    Route::get('profile', [ProfileController::class, 'show'])->name('profile');
    Route::put('profile', [ProfileController::class, 'update']);

    // Category CRUD Routes (for income/expense categories)
    Route::resource('categories', CategoryController::class);

    // Transaction CRUD Routes (for income/expense transactions)
    Route::resource('transactions', TransactionController::class);

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

});

// Include the default Laravel authentication routes (login, register, etc.)
require __DIR__.'/auth.php';
