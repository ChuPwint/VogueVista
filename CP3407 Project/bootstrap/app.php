<?php

use App\Http\Middleware\LoginCheckMiddleWare;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        // $middleware->append(\Illuminate\Session\Middleware\StartSession::class);
        // $middleware->append(LoginCheckMiddleWare::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
