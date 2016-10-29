<?php

namespace Gwiddle\LaravelVestaCP;

use Illuminate\Support\ServiceProvider;

class VestaCPServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['vestacp'] = $this->app->share(function ($app) {
            return new VestaCP();
        });
    }
}
