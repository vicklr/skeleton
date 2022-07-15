<?php

declare(strict_types=1);

namespace App\Providers;

use App\Routes\ChannelRoutes;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        ChannelRoutes::routes();
    }
}
