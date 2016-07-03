<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitProduct;
use App\Http\Requests\SubmitCheckout;
use App\Repositories\ShareRepository as Share;
use App\Repositories\PaymentRepository as Payment;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Auth, View;

class ShoppingController extends BaseController
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
     * Shopping Class
     * Shopping Class for managing shopping cart and payments.
     * @package ecommerce-cms
     * @category Base Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    /**
     * Show shopping cart to user.
     * @return View
     */
    public function getIndex()
    {
        return view('frontend/shopping_cart');
    }

    /**
     * Pass data to checkout view.
     * @return View
     */
    public function checkout()
    {
        $data = Payment::checkoutData();
        return view('frontend.checkoutOne',$data);
    }

    /**
     * Store customer data to Session.
     * @param Request $request
     * @return View
     */
    public function customerStore(SubmitCheckout $request)
    {
        $input = $request->all();
        $request->session()->put($input);
        return redirect('checkout/show');
    }

    /**
     * Show order information from session.
     * @param Request $request
     * @return View
     */
    public function checkoutShow(Request $request)
    {
        $country = $request->session()->get('country');
        if (!isset($country)) {
            Session::flash('flash_message', 'YOUR MUST FILL REQUIRED FIELDS!');
            return redirect('checkout/shipping');
        }
        $data = Payment::prepareShow($request);
        return view('frontend.checkoutTwo', $data);
    }

    /**
     * Create Order and Customer in Database.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function createOrder(Request $request)
    {
        $cart = Cart::content();
        if (!$request->session()->has('email')) {
            Session::flash('flash_message', 'YOUR MUST FILL REQUIRED FIELDS!');
            return redirect('checkout/shipping');
        } elseif ($cart->isEmpty()) {
            Session::flash('flash_message', 'YOU MUST SELECT PRODUCT!');
            return redirect()->back();
        }
        Payment::createOrder($request);
        Cart::destroy();
        Share::forgetSessionKeys($request);
        return redirect('checkout/order');
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
    public function postStore(SubmitProduct $request)
    {
        if (Payment::checkDiscount($request)) {
            Session::flash('flash_message', 'You are entered invalid discount code!');
            return redirect()->back();
        }
        $data = Payment::prepareStore($request);
        //make new instance of the Cart for every user.
        //active instance of the cart is curent instance.
        Cart::instance(auth()->id())->add($data);
        return redirect('cart');
    }

    /**
     * Update products in shopping cart.
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postUpdate(Request $request)
    {
        $content = $request->input('qty');
        foreach ($content as $id => $row) {
            Cart::update($row['rowId'], $row['qty']);
        }
        return redirect('cart');
    }

    /**
     * Remove product from shopping cart.
     * @param $rowId
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function getEdit($rowId)
    {
        Cart::remove($rowId);
        return redirect('cart');
    }

    /**
     * Clear shopping cart.
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function getDelete()
    {
        Cart::destroy();
        return redirect('cart');
    }

    /**
     * Show user confirmation for finalazing order.
     * @return View
     */
    public function finalOrder()
    {
        Session::flash('flash_message', 'YOUR ORDER HAVE BEEN SUCCESSFULY PLACED!');
        return view('frontend.placeOrder');
    }
}