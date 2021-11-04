<?php

namespace Jotform;

use Illuminate\Support\ServiceProvider;

/**
 * Class JotformServiceProvider
 *
 * @package Jotform
 * @author  İzni Burak Demirtaş <info@burakdemirtas.org>
 */
class JotformServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            $this->configPath() => config_path('jotform.php'),
        ], 'jotform');
    }

    /**
     * Register the services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom($this->configPath(), 'jotform');

        $this->app->singleton(Jotform::class, function ($app) {
            return new Jotform($app['config']->get('jotform'));
        });
    }

    /**
     * @return string
     */
    protected function configPath(): string
    {
        return __DIR__ . '/../config/jotform.php';
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [ Jotform::class ];
    }
}
