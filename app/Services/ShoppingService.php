<?php

namespace App\Services;

use App\Events\AddCustomer;
use App\Events\ForgetSession;
use App\Repositories\OrderRepository;
use App\Repositories\TaxRepository;;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;

class ShoppingService
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
     * ShoppingService Class for prepare and store product
     * in shopping cart and databes.
     *
     * If we need only few times table result is better
     * to call models to retrieve result.
     * Othetwise use coresponded repository.
     *
     * @package ecommerce-cms
     * @category Service Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    protected  $order;

    protected $tax;

    /**
     * ShoppingService constructor.
     * @param OrderRepository $order
     * @param TaxRepository $tax
     */
    public function __construct(OrderRepository $order, TaxRepository $tax)
    {
        $this->order = $order;
        $this->tax = $tax;
    }

    /**
     * @param $request
     * @return bool
     */
    public function checkDiscount($request)
    {
        $codes = $this->tax->all();
        foreach ($codes as $code) {
            if ($request->has('discount') && $request->input('discount') !== $code->code) {
                return true;
            } else {
                return false;
            }
        }
    }

    /**
     * @param $request
     * @param $cart
     */
    public function createOrder($request, $cart)
    {
        $user = $request->session()->all();
        $user['user_id'] = Auth::user()->id;
        $this->order->makeOrder($cart);
        Event::fire(new AddCustomer($user));
        Event::fire(new ForgetSession($request));
    }

    /**
     * @param $request
     * @return mixed
     */
    public function prepareStore($request)
    {
        $code = $this->tax->findBy('code', $request->input('discount'));
        isset($code) ? $discount = $code->discount : $discount = 0;
        $productPrice = $request->input('price');
        $price = ((100 - $discount) / 100) * $productPrice;
        $data = $request->except(['_token', 'discount', 'price', 'color', 'size', 'img']);
        $data['price'] = $price;
        $data['options'] = $request->except(['_token', 'id', 'name', 'qty', 'price']);
        return $data;
    }

}