<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Secretary\DashboardController;
use App\Http\Controllers\Secretary\SecretaryUserController;
use App\Http\Controllers\Secretary\SecretaryHourlyController;
use App\Http\Controllers\Secretary\SecretaryWorkerController;
use App\Http\Controllers\Secretary\SecretaryRequesterController;
use App\Http\Controllers\Secretary\SecretaryAppointmentController;
use App\Http\Controllers\Secretary\SecretaryApprovedAppointmentController;

Route::prefix('secretary')->middleware(['auth', 'verified', 'secretary'])->name('&')->group(function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');

    Route::get('hourly', [SecretaryHourlyController::class, 'index'])
        ->name('hourly.index');
    Route::get('hourly/{hourly}', [SecretaryHourlyController::class, 'show'])
        ->name('hourly.show');

    Route::get('worker', [SecretaryHourlyController::class, 'index'])
        ->name('worker.index');
    Route::get('worker/{worker}', [SecretaryWorkerController::class, 'show'])
        ->name('worker.show');

    Route::resource('requester', SecretaryRequesterController::class);
    Route::resource('user', SecretaryUserController::class);
    Route::resource('appointment', SecretaryAppointmentController::class);

    Route::put(
        'approved/appointment/{id}',
        SecretaryApprovedAppointmentController::class
    )->name('appointment.approved');
});
