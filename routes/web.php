<?php

use App\Http\Controllers\Page\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeController::class)->name('welcome');

require __DIR__ . '/profile.php';

require __DIR__ . '/admin.php';

require __DIR__ . '/secretary.php';

require __DIR__ . '/auth.php';

require __DIR__ . '/page.php';
