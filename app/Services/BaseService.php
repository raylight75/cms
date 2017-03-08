<?php

namespace App\Services;

use Illuminate\Support\Facades\App;

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

    protected  $cat;

    protected $auth;

    public function __construct()
    {
        $this->cart = App::make('Gloudemans\Shoppingcart\Cart');
        $this->cat = App::make('App\Repositories\CategoryRepository');
        $this->auth = App::make('Illuminate\Contracts\Auth\Guard');
    }
}