<?php

namespace App\Http\Controllers;

use App\Services\CheckoutService;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;
use Auth, View;

class CheckoutController extends Controller
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
     * Checkout Class
     * Checkout Class for managing checkouts.
     * @package ecommerce-cms
     * @category Base Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    protected $checkout;

    /**
     * ShoppingController constructor.
     * @param ShoppingService $shoppingService
     * @param Cart $cart
     * @param Request $request
     */
    public function __construct(CheckoutService $checkout)
    {
        $this->checkout = $checkout;
    }

    /**
     * Pass data to checkout view.
     * @return View
     */
    public function checkout()
    {
        $data = $this->checkout->checkoutData();
        return view('frontend.checkoutOne',$data);
    }

    /**
     * Show order information from session.     *
     * @return View
     */
    public function checkoutShow(Request $request)
    {
        $country = $request->session()->get('country');
        if (!isset($country)) {
            $request->session()->flash('flash_message', 'YOUR MUST FILL REQUIRED FIELDS!');
            return redirect('checkout/shipping');
        }
        $data = $this->checkout->checkoutShow($request);
        return view('frontend.checkoutTwo', $data);
    }
}