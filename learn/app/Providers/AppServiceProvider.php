<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->bind('first_service_helper', function($app){
            dd("this is my first service provider");
        });

        app()->bind('second_service_helper', function($app){
            dd("this is my second service provider");
        });

        app()->bind('third_service_helper', function($app){
            dd("this is my third service provider");
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
