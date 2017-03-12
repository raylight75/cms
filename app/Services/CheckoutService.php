<?php

namespace App\Services;

use App\Repositories\CountryRepository;
use App\Repositories\PaymentRepository;
use App\Repositories\ShippingRepository;

class CheckoutService
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
     * @package ecommerce-cms
     * @category Service Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    public function __construct
    (
        CountryRepository $country,
        PaymentRepository $payment,
        ShippingRepository $shipping

    )
    {
        $this->country = $country;
        $this->payment = $payment;
        $this->shipping = $shipping;
    }

    /**
     * Prepare data to checkout page
     * @return mixed
     */
    public function checkoutData()
    {
        $data['countries'] = $this->country->all();
        $data['payments'] = $this->payment->all();
        $data['shippings'] = $this->shipping->all();
        return $data;
    }

    /**
     * Show order information from session.
     * @param Request $request
     * @return mixed
     */
    public function checkoutShow($request)
    {
        $data['vat'] = $this->country->getVat($request);
        $data['payments'] = $this->payment->find($request->session()->get('payment'));
        $data['shippings'] = $this->shipping->find($request->session()->get('delivery'));
        $data['customer'] = $request->session()->all();
        return $data;
    }
}