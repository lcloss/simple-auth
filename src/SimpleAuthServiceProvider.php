<?php

namespace Lcloss\SimpleAuth;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use Lcloss\SimpleAuth\Http\Middleware\AuthGates;

class SimpleAuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /* Register routes */
//        Route::prefix('simple-auth')
//            ->as('simple-auth.')
//            ->middleware( config('simple-auth.middleware') )
//            ->group(function () {
//                $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
//            });

        /* Register views */
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'simple-auth');

        if ($this->app->runningInConsole()) {
            /* Register assets */
            $this->publishes([
                __DIR__.'/../resources/assets' => public_path('simple-auth'),
            ], 'simple-auth-assets');

            /* Register config */
            $this->publishes([
                __DIR__.'/../config/simple-auth.php' => config_path('simple-auth.php'),
            ], 'simple-auth-config');
        }
    }
}
