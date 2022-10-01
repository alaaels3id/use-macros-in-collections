<?php

namespace App\Providers;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Collection::make(glob(__DIR__ . '/../macros/builders/*.php'))
            ->mapWithKeys(function ($path){
                return [$path => pathinfo($path,PATHINFO_FILENAME)];
            })
            ->each(function($macro, $path){
                require_once $path;
            });

        Collection::make(glob(__DIR__ . '/../macros/carbon/*.php'))
            ->mapWithKeys(function ($path){
                return [$path => pathinfo($path,PATHINFO_FILENAME)];
            })
            ->each(function($macro, $path){
                require_once $path;
            });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
