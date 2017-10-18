<?php

namespace App\Policies;

use App\Models\Order;
use App\User;

class BackendPolicy
{
    /**
     * Not used for now
     * Determine if the given user can view resources.
     *
     * @param  \App\User  $user
     * @param  \App\Order $order
     * @return bool
     */
    public function view(User $user, Order $order)
    {
        return $user->id === (int)$order->user_id;
    }
}