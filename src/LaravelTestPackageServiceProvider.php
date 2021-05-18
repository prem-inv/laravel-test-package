<?php

namespace Laravel\TestPackage;

use Illuminate\Support\ServiceProvider;

class ExabytesServiceProvider extends ServiceProvider
{
    /**
     * Publishes configuration file.
     * 
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('config.php')
        ], 'config');
    }

    /**
     * 
     * Make config publishment optional by merging the config from the package.
     * 
     * @return void
     */
    public function register()
    {
        $this->mergingConfigFrom(
            __DIR__.'/../config/config.php', 'config'
        );
    }
}