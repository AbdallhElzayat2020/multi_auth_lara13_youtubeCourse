<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {
            Route::middleware('web')
                ->group(base_path('routes/admin-auth.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware): void {

        // redirect authenticated user to their own dashboard when they try to access guest routes
        $middleware->redirectUsersTo(function (Request $request) {

            // If the route requires admin guard → redirect admin to admin dashboard
            if ($request->is('admin/*') || $request->is('admin')) {
                if (Auth::guard('admin')->check()) {
                    return route('admin.dashboard');
                }
            }

            // If the route requires web guard → redirect user to user dashboard
            if (Auth::guard('web')->check()) {
                return route('user.dashboard');
            }

            // Fallback: if admin is logged in anywhere else
            if (Auth::guard('admin')->check()) {
                return route('admin.dashboard');
            }

            return '/';
        });

        // redirect guest to the correct login page based on which section they tried to access
        $middleware->redirectGuestsTo(function (Request $request) {

            if ($request->is('admin') || $request->is('admin/*')) {
                return route('admin.login');
            }

            return route('login');
        });

    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->shouldRenderJsonWhen(
            fn (Request $request) => $request->is('api/*') || $request->expectsJson(),
        );
    })->create();
