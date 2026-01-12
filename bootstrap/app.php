<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
        'check.email' => \App\Http\Middleware\CheckEmail::class,
         'check.post.title' => \App\Http\Middleware\CheckPostTitle::class,
         'check.password' => \App\Http\Middleware\CheckPassword::class,
         'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
    ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
