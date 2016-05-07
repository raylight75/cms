<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitProduct;
use App\Http\Requests\SubmitCheckout;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Auth, View;
use App\Models\Tax;
use App\Models\Country;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Shipping;
use Carbon\Carbon;


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
     * Cart Class
     * Cart Class for managing shopping cart
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
        parent::__construct();
    }

    /**
     * Show shopping cart to user.
     * @return View
     */
    public function getIndex()
    {
        return view('frontend/shopping_cart');
    }

    public function checkDiscount(Request $request)
    {
        $codes = Tax::all();
        foreach ($codes as $code) {
            if ($request->has('discount') && $request->input('discount') !== $code->code) {
                return true;
            } else {
                return false;
            }
        }
    }

    /**
     * Pass data to checkout view.
     * @return View
     */
    public function checkout()
    {
        $countries = Country::all();
        $payments = Payment::all();
        $shippings = Shipping::all();
        return view('frontend.checkoutOne', compact('countries', 'payments', 'shippings'));
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
        $vat = Country::where('name', $request->session()->get('country'))->first();
        $data['vat'] = $vat->vat;
        $data['payments'] = Payment::findOrFail($request->session()->get('payment'));
        $data['shippings'] = Shipping::findOrFail($request->session()->get('delivery'));
        $data['customer'] = $request->session()->all();
        return view('frontend.checkoutTwo', $data);
    }

    /**
     * Create Order in Database.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function createOrder(Request $request)
    {
        $cart = Cart::content();
        foreach ($cart as $item) {
            Order::create([
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
        Cart::destroy();
        $this->forgetSessionKeys($request);
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
        if ($this->checkDiscount($request)) {
            Session::flash('flash_message', 'You are entered invalid discount code!');
            return redirect()->back();
        }
        $code = Tax::where('code', $request->input('discount'))->first();
        isset($code) ? $discount = $code->discount : $discount = 0;
        $productPrice = $request->input('price');
        $price = ((100 - $discount) / 100) * $productPrice;
        $data = $request->except(['_token', 'discount', 'price', 'color', 'size', 'img']);
        $data['price'] = $price;
        $data['options'] = $request->except(['_token', 'id', 'name', 'qty', 'price']);
        Cart::add($data);
        return redirect('cart');
    }

    /**
     * Update products in shopping cart.
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postUpdate()
    {
        $content = Request::input('qty');
        foreach ($content as $id => $row) {
            Cart::update($row['rowid'], $row['qty']);
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

    /**
     * Remove all user piece of data from the session.
     * @param Request $request
     */
    public function forgetSessionKeys(Request $request)
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
}