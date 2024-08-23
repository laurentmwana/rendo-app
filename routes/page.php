<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\BasicController;

Route::name('.')->group(function () {
    Route::get('/about', [BasicController::class, 'about'])->name('about');
});
