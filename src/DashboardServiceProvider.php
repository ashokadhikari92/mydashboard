<?php

namespace MyPackage\Dashboard;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services
     *
     * @return void
     */
    public function boot()
    {
        if(!$this->app->routesAreCached()){
            require __DIR__.'/routes/cms.php';
        }

        $this->publishes([
            __DIR__.'/public/' => public_path('vendor/dashboard/assets')
        ],'dashboard');

        $this->loadViewsFrom(__DIR__.'/resources/views','dashboard');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {

    }
}
