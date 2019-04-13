<?php

namespace DenisKisel\LaravelMigrationPump;

use DenisKisel\LaravelMigrationPump\Commands\PumpCommand;
use Illuminate\Support\ServiceProvider;

class LaravelMigrationPumpServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'deniskisel');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'deniskisel');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        // Register the service the package provides.
        $this->app->singleton('laravelmigrationpump', function ($app) {
            return new LaravelMigrationPump;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravelmigrationpump'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/deniskisel'),
        ], 'laravelmigrationpump.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/deniskisel'),
        ], 'laravelmigrationpump.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/deniskisel'),
        ], 'laravelmigrationpump.views');*/

        // Registering package commands.
         $this->commands([
             PumpCommand::class
         ]);
    }
}
