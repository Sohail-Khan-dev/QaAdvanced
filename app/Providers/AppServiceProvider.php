<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        if($this->app->environment('production')) {
            $this->app['request']->server->set('HTTPS', true);
            URL::forceScheme('https');
        }
        if ($this->app->environment('local')) {
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(\App\Providers\TelescopeServiceProvider::class);
        }
        $this->app->register(\App\Providers\FirebaseServiceProvider::class);
    }

    public function boot(): void
    {
        Schema::defaultStringLength(191);
        
        if($this->app->environment('production')) {
            \URL::forceScheme('https');
        }
    }
}

