<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\AddCustomer' => [
            'App\Listeners\CreateCustomer',
        ],
        'App\Events\ForgetSession' => [
            'App\Listeners\ClearSession',
        ],
        'Illuminate\Auth\Events\Login' => [
            'App\Listeners\RestoreCartOnLogin',
        ],
        'Illuminate\Auth\Events\Logout' => [
            'App\Listeners\StoreCartOnLogout',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
