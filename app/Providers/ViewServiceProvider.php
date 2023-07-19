<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('App\Service\CustomServiceInterface', 'App\Service\CustomServiceProviderView');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
