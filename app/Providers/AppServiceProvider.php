<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        //Custom admin blade
        Blade::if('admin', function () {
            return auth()->check() && auth()->user()->hasRole('admin');
        });
        //Custom user blade
        Blade::if('user', function () {
            return auth()->check() && auth()->user()->hasRole('user');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
