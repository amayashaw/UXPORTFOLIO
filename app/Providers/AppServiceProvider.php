<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // This tells Laravel how to handle URLs

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // This forces all links to use HTTPS in production to fix the "Mixed Content" error
        if (app()->environment('production')) {
            URL::forceScheme('https');
        }
    }
} 