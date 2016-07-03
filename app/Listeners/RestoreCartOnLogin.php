<?php

namespace App\Listeners;

use Gloudemans\Shoppingcart\Facades\Cart;

class RestoreCartOnLogin
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
        Cart::restore(auth()->id());
    }
}