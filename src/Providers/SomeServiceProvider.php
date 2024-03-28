<?php

namespace issue\ext\testbench\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;


class SomeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        //Adding user provider
        Auth::provider('some.service.provider', fn ($app, array $config) => new SomeProvider($config['model']));
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
    }
}
