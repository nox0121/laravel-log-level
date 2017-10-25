<?php

namespace Nox0121\LaravelLogLevel;

use Illuminate\Support\ServiceProvider;

class LaravelLogLevelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/laravel-log-level.php' => config_path('laravel-log-level.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-log-level.php', 'laravel-log-level');

        $monolog = \Log::getMonolog();
        foreach ($monolog->getHandlers() as $handler) {
            $handler->setLevel(config('laravel-log-level.log-level'));
        }
    }
}
