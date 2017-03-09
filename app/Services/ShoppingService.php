<?php

namespace App\Services;

use Carbon\Carbon;
use App\Repositories\CountryRepository;
use App\Repositories\CustomerRepository;
use App\Repositories\OrderRepository;
use App\Repositories\PaymentRepository;
use App\Repositories\ShippingRepository;
use App\Repositories\TaxRepository;
use Illuminate\Support\Facades\Auth;

class ShoppingService extends BaseService
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
        parent::__construct();
        $this->country = $country;
        $this->payment = $payment;
        $this->shipping = $shipping;
    }

    /**
     * Check for discount code.
     * @param Request $request
     * @return bool
     */
    public function checkDiscount(TaxRepository $tax, $request)
    {
        $codes = $tax->all();
        foreach ($codes as $code) {
            if ($request->has('discount') && $request->input('discount') !== $code->code) {
                return true;
            } else {
                return false;
            }
        }
    }


    /**
     * @param CustomerRepository $customer
     * @param OrderRepository $order
     * @param $request
     */
    public function createOrder(CustomerRepository $customer, OrderRepository $order, $request)
    {
        $cart = $this->cart->instance(auth()->id())->content();
        $user = $request->session()->all();
        $user['user_id'] = Auth::user()->id;
        $customer->create($user);
        foreach ($cart as $item) {
            $order->create([
                'user_id' => Auth::user()->id,
                'order_date' => Carbon::now(),
                'product_id' => $item->id,
                'quantity' => $item->qty,
                'amount' => $item->subtotal,
                'size' => $item->options->size,
                'img' => $item->options->img,
                'color' => $item->options->color,
            ]);
        }
    }

    /**
     * Remove all user piece of data from the session.
     * @param Request $request
     */
    public function forgetSessionKeys($request)
    {
        $request->session()->forget('country');
        $request->session()->forget('city');
        $request->session()->forget('postcode');
        $request->session()->forget('adress');
        $request->session()->forget('name');
        $request->session()->forget('phone');
        $request->session()->forget('email');
        $request->session()->forget('delivery');
        $request->session()->forget('payment');
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
    public function prepareShow($request)
    {
        $data['vat'] = $this->country->getVat($request);
        $data['payments'] = $this->payment->find($request->session()->get('payment'));
        $data['shippings'] = $this->shipping->find($request->session()->get('delivery'));
        $data['customer'] = $request->session()->all();
        return $data;
    }


    /**
     * @param TaxRepository $tax
     * @param $request
     * @return mixed
     */
    public function prepareStore(TaxRepository $tax, $request)
    {
        $code = $tax->findBy('code', $request->input('discount'));
        isset($code) ? $discount = $code->discount : $discount = 0;
        $productPrice = $request->input('price');
        $price = ((100 - $discount) / 100) * $productPrice;
        $data = $request->except(['_token', 'discount', 'price', 'color', 'size', 'img']);
        $data['price'] = $price;
        $data['options'] = $request->except(['_token', 'id', 'name', 'qty', 'price']);
        return $data;
    }

}