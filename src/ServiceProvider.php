<?php

namespace LaravelIproSoftwareApi;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application services.
     * @codeCoverageIgnore
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/iprosoftware-api.php' => config_path('iprosoftware-api.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     * @codeCoverageIgnore
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/iprosoftware-api.php', 'iprosoftware-api');

        $this->app->bind('iprosoftware', function () {
            return new IproSoftware();
        });
    }
}
