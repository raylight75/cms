<?php

namespace App\Services;

use App\Repositories\CartRepository;
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
     * CheckoutService Class for checkout processing.
     *
     * @package ecommerce-cms
     * @category Service Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    /**
     * CheckoutService constructor.
     * @param CountryRepository $country
     * @param PaymentRepository $payment
     * @param ShippingRepository $shipping
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
     * Show order information and final cost from session.
     * @param Request $request
     * @return mixed
     */
    public function checkoutShow($request)
    {
        $cart = $this->cartContent();
        $data['cartTotal'] = $cart['grandTotal'];
        $data['payments'] = $this->payment->find($request->session()->get('payment'));
        $data['shippings'] = $this->shipping->find($request->session()->get('delivery'));
        $data['customer'] = $request->session()->all();
        $data['vat_total'] = $this->vat($request);
        $data['finalTotal'] = $cart['grandTotal'] + $data['shippings']->rate + $data['vat_total'];
        return $data;
    }

    /**
     * @param $request
     * @return mixed
     */
    public function vat($request)
    {
        $cart = $this->cartContent();
        $vat = $this->country->getVat($request);
        $vat_total = $cart['grandTotal'] * $vat;
        return $vat_total;
    }

    /**
     * @return mixed
     */
    public function cartContent()
    {
        $cart = app(CartRepository::class)->setCart();
        return $cart;
    }
}