<?php

declare(strict_types=1);

namespace App\Routes;

use App\Http\Controllers;
use Illuminate\Routing\Router;

class HttpRoutes
{
    public static function routes(Router $router): void
    {
        $router->get('/', fn() => 'ok');
    }
}
