<?php

namespace Edarkzero\CMSBuilder;

use Illuminate\Support\ServiceProvider;

class CMSBuilderServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'edarkzero');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'edarkzero');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {

            // Publishing the configuration file.
            $this->publishes([
                __DIR__.'/../config/cmsbuilder.php' => config_path('cmsbuilder.php'),
            ], 'cmsbuilder.config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/edarkzero'),
            ], 'cmsbuilder.views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/edarkzero'),
            ], 'cmsbuilder.views');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/edarkzero'),
            ], 'cmsbuilder.views');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/cmsbuilder.php', 'cmsbuilder');

        // Register the service the package provides.
        $this->app->singleton('cmsbuilder', function ($app) {
            return new CMSBuilder;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['cmsbuilder'];
    }
}
