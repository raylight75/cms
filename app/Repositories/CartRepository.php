<?php

namespace App\Repositories;

use Gloudemans\Shoppingcart\Cart;

class CartRepository
{
    /**
     * Ecommerce-CMS
     *
     * Copyright (C) 2014 - 2015  Tihomir Blazhev.
     *
     * Repository Class for model Category, extends base Repository Class.
     * Simple implementation without scopes and Criteria
     * specific queries is placed here.
     *
     * @package ecommerce-cms
     * @category Repository Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    /**
     * Cart constructor.
     *
     * @param Cart $cart
     */
    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function setCart()
    {
        if (!auth()->check()) {
            $data['rows'] = null;
            $data['cart'] = null;
            $data['grandTotal'] = null;
        } else {
            $data['rows'] = $this->cart->instance(auth()->id())
                ->content()
                ->count(false);
            $data['cart'] = $this->cart->instance(auth()->id())
                ->content();
            $data['grandTotal'] = $this->cart->instance(auth()->id())
                ->total();
        }
        return $data;
    }
}