<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminGradeController;
use App\Http\Controllers\Admin\AdminHourlyController;
use App\Http\Controllers\Admin\AdminWorkerController;
use App\Http\Controllers\Admin\AdminSecretaryController;

Route::get('/dashboard', DashboardController::class)
    ->middleware(['auth', 'verified', 'admin'])->name('dashboard');

Route::prefix('admin')->middleware(['auth', 'verified', 'admin'])->name('~')->group(function () {
    Route::resource('user', AdminUserController::class);
    Route::resource('hourly', AdminHourlyController::class)
        ->except(['destroy', 'create', 'store']);

    Route::resource('secretary', AdminSecretaryController::class);
    Route::resource('worker', AdminWorkerController::class);
    Route::resource('grade', AdminGradeController::class);
});
