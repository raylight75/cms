<?php

namespace App\Services;

use Illuminate\Support\Facades\App;
use Gloudemans\Shoppingcart\Cart;

abstract class BaseService
{
    /**
     *
     * BaseService Class.
     *
     * @package ecommerce-cms
     * @category Service Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    protected $cart;

    /**
     * BaseService constructor.
     */
    public function __construct()
    {
        $this->cart = App::make(Cart::class);
    }
}