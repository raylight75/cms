<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Request;
use Auth, View;

class CartController extends Controller
{
    /**
     * Ecommerce-CMS
     *
     * Copyright (C) 2014 - 2015  Tihomir Blazhev.
     *
     * LICENSE
     *
     * Ecommerce-cms is released with dual licensing, using the GPL v3 (license-gpl3.txt) and the MIT license (license-mit.txt).
     * You don't have to do anything special to choose one license or the other and you don't have to notify anyone which license you are using.
     * Please see the corresponding license file for details of these licenses.
     * You are free to use, modify and distribute this software, but all copyright information must remain.
     *
     * @package     ecommerce-cms
     * @copyright   Copyright (c) 2014 through 2015, Tihomir Blazhev
     * @license     http://opensource.org/licenses/MIT  MIT License
     * @version     1.0.0
     * @author      Tihomir Blazhev <raylight75@gmail.com>
     */

    /**
     *
     * Cart Class
     * Cart Class fo managing shoppinf cart
     * @package ecommerce-cms
     * @category Base Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $data = Product::prepareGlobalData();
        View::share($data);
    }

    /**
     * Add a row to the cart
     *
     * @param string|Array $id Unique ID of the item|Item formated as array|Array of items
     * @param string $name Name of the item
     * @param int $qty Item qty to add to the cart
     * @param float $price Price of one item
     * @param Array $options Array of additional options, such as 'size' or 'color'
     */

    public function store()
    {
        $data = Request::except(['_token','discount','color','size','img']);
        $data['options'] = Request::except(['_token','id','name','qty','price']);
        Cart::add($data);
        return redirect('cms');
    }

    public function destroy()
    {
        Cart::destroy();
        return redirect('cms');
    }
}