<?php

namespace Veritrans;

use Illuminate\Support\ServiceProvider;

class VeritransServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('veritrans', 'Veritrans\Veritrans');

        $config = __DIR__ . '/../config/veritrans.php';
        $this->mergeConfigFrom($config, 'veritrans');

        $this->publishes([__DIR__ . '/../config/veritrans.php' => config_path('veritrans.php')], 'config');
    }
}