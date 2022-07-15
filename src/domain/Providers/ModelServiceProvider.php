<?php

declare(strict_types=1);

namespace Domain\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class ModelServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {
        Model::unguard();
    }
}
