<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\BasicController;

Route::name('.')->group(function () {
    Route::get('/about', [BasicController::class, 'about'])->name('about');

    Route::get('/contact', [ContactController::class, 'index'])
        ->name('contact');

    Route::post('/contact/send', [ContactController::class, 'send'])
        ->name('contact.send');
});
