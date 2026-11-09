<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Database\Blueprints\BlueprintMacros;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        BlueprintMacros::register();
    }
}
