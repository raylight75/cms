<?php

namespace App\Repositories;

use App\Models\Order;

class OrderRepository
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
     * Order repository Class for model Brand.
     * Just move query outside from Eloquent model.
     *
     * @package ecommerce-cms
     * @category Repository Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    protected $order;

    /**
     * @param Customer $customer
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * @param $customer
     * @return static
     */
    public function create($order)
    {
        return $this->order->create($order);
    }

    /**
     * @param $request
     * @return mixed
     */
    public function find($request)
    {
        return $this->order->findOrFail($request->all())
            ->first();
    }

    /**
     * @param $request
     * @return mixed
     */
    public function whereId($request)
    {
        return $this->order->where('id', $request->input('update'))
            ->first();
    }

    /**
     * Get user order parameters.
     * @param $request
     * @return mixed
     */
    public function getUserOrder($request)
    {
        if ($request->has('update')) {
            $order = $this->whereId($request);
        } else {
            $order = $this->find($request);
        }
        return $order;
    }
}