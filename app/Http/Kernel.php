<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use App\Http\Middleware\HandleInertiaRequests;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Global middleware
    ];

    protected $middlewareGroups = [
        'web' => [
            HandleInertiaRequests::class,
        ],

        'api' => [
            // API middleware
        ],
    ];

    protected $routeMiddleware = [
        // Route middleware
    ];
    
}
