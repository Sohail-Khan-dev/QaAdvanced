<?php

use App\Http\Middleware\CheckRole;
use Illuminate\Foundation\Configuration\Middleware;

return function (Middleware $middleware) {
    // Global middleware
    $middleware->append([
        // Add any global middleware here
    ]);

    // Web middleware
    $middleware->web(append: [
        // Add any web middleware here
    ]);

    // API middleware
    $middleware->api(append: [
        // Add any API middleware here
    ]);

    // Named middleware
    $middleware->alias([
        'role' => CheckRole::class,
    ]);
};
