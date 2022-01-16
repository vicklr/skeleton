<?php

declare(strict_types=1);

namespace App\Routes;

use Illuminate\Http\Request;
use Illuminate\Routing\Router;

class ApiRoutes
{
    public static function routes(Router $router): void
    {
        $router->get('/', fn() => 'ok');

        $router->group(['middleware' => 'auth:sanctum'], function (Router $router) {
            $router->get('/user', fn(Request $request): mixed => $request->user());
        });
    }
}
