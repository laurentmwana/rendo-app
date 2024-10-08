<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\GrantAccessAdmin;
use App\Http\Middleware\GrantAccessSecretary;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => GrantAccessAdmin::class,
            'secretary' => GrantAccessSecretary::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
