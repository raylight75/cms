<?php

namespace App\Listeners;

use App\Events\ForgetSession;

class ClearSession
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param ForgetSession $event
     */
    public function handle(ForgetSession $event)
    {
        $event->request->session()->forget([
            'country',
            'city',
            'postcode',
            'adress',
            'name',
            'phone',
            'email',
            'delivery',
            'payment'
        ]);
    }
}
