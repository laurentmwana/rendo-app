<?php

use App\Http\Controllers\Admin\AdminHourlyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminUserController;

Route::get('/dashboard', DashboardController::class)
    ->middleware(['auth', 'verified', 'admin'])->name('dashboard');

Route::prefix('admin')->middleware(['auth', 'verified', 'admin'])->name('~')->group(function () {
    Route::resource('user', AdminUserController::class);
    Route::resource('hourly', AdminHourlyController::class)
        ->except(['destroy', 'create', 'store']);
});
