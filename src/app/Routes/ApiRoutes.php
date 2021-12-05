<?php

declare(strict_types=1);

namespace App\Routes;

use Domain\Models\User;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;

class ApiRoutes
{
    public static function routes(Router $router): void
    {
        $router->group(['middleware' => 'auth:sanctum'], function (Router $router) {
            $router->get('/user', function (Request $request): User {
                /** @var User $user */
                $user = $request->user();

                return $user;
            });
        });
    }
}
