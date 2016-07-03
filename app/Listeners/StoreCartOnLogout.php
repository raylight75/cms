<?php

namespace App\Listeners;

use Gloudemans\Shoppingcart\Facades\Cart;

class StoreCartOnLogout
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
     * @return void
     */
    public function handle()
    {
        if (Cart::instance(auth()->id())->count(false) == 0) {

        } else {
            Cart::store(auth()->id());
        }
    }
}