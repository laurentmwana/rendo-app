<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\BasicController;
use App\Http\Controllers\ReservationController;

Route::name('.')->group(function () {
    Route::get('/about', [BasicController::class, 'about'])->name('about');

    Route::middleware(['guest'])->group(function () {
        Route::get('reservation', [ReservationController::class, 'index'])
            ->name('reservation.index');

        Route::get('reservation/create', [ReservationController::class, 'create'])
            ->name('reservation.create');
        Route::post('reservation/store', [ReservationController::class, 'store'])
            ->name('reservation.store');
    });
});
