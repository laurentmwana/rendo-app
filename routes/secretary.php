<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Secretary\DashboardController;
use App\Http\Controllers\Secretary\SecretaryRequesterController;
use App\Http\Controllers\Secretary\SecretaryHourlyController;

Route::prefix('secretary')->middleware(['auth', 'verified', 'secretary'])->name('&')->group(function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');

    Route::get('hourly', [SecretaryHourlyController::class, 'index'])
        ->name('hourly.index');
    Route::get('hourly/{hourly}', [SecretaryHourlyController::class, 'show'])
        ->name('hourly.show');

    Route::resource('requester', SecretaryRequesterController::class);
});
