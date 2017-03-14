<?php

namespace App\Listeners;

use App\Events\AddCustomer;
use App\Models\Customer;

class CreateCustomer
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
     * @param AddCustomer $event
     */
    public function handle(AddCustomer $event)
    {
        Customer::create($event->userData);
    }
}
