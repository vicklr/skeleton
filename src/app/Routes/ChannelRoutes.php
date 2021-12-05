<?php

declare(strict_types=1);

namespace App\Routes;

use Domain\Models\User;
use Illuminate\Support\Facades\Broadcast;

class ChannelRoutes
{
    public static function routes(): void
    {
        Broadcast::channel('Domain.Models.User.{id}', function (User $user, int $id) {
            return $user->id === $id;
        });
    }
}
