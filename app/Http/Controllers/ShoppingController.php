<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;
use App\Http\Requests\SubmitProduct;
use App\Http\Requests\SubmitCheckout;
use App\Services\ShoppingService;
use Auth, View;

class ShoppingController extends Controller
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

    protected $cart;

    protected $shopping;

    protected $request;

    /**
     * ShoppingController constructor.
     * @param ShoppingService $shoppingService
     * @param Cart $cart
     * @param Request $request
     */
    public function __construct
    (
        ShoppingService $shoppingService,
        Cart $cart,
        Request $request
    )
    {
        $this->cart = $cart;
        $this->request = $request;
        $this->shopping = $shoppingService;
    }

    /**
     * Show shopping cart to user.
     * @return View
     */
    public function index()
    {
        return view('frontend/shopping_cart');
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
     * Create Order     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function createOrder()
    {
        $cart = $this->cart->instance(auth()->id())->content();
        if (!$this->request->session()->has('email')) {
            $this->request->session()->flash('flash_message', 'YOUR MUST FILL REQUIRED FIELDS!');
            return redirect('checkout/shipping');
        } elseif ($cart->isEmpty()) {
            $this->request->session()->flash('flash_message', 'YOU MUST SELECT PRODUCT!');
            return redirect()->back();
        }
        $this->shopping->createOrder($this->request);
        $this->cart->instance(auth()->id())->destroy();
        $this->shopping->forgetSessionKeys($this->request);
        return redirect('checkout/order');
    }


    /**
     * Add a row to the cart
     * @param SubmitProduct $request     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function storeItem(SubmitProduct $request)
    {
        if ($this->shopping->checkDiscount($request)) {
            $request->session()->flash('flash_message', 'You are entered invalid discount code!');
            return redirect()->back();
        }
        $data = $this->shopping->prepareStore($request);
        //make new instance of the Cart for every user.
        //active instance of the cart is curent instance.
        $this->cart->instance(auth()->id())->add($data);
        return redirect('cart');
    }

    /**
     * Update products in shopping cart.
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function updateItem()
    {
        $content = $this->request->input('qty');
        foreach ($content as $id => $row) {
            $this->cart->instance(auth()->id())
                ->update($row['rowId'], $row['qty']);
        }
        return redirect('cart');
    }

    /**
     * Remove product from shopping cart.
     * @param $rowId
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function removeItem($rowId)
    {
        $this->cart->instance(auth()->id())->remove($rowId);
        return redirect('cart');
    }

    /**
     * Clear shopping cart.
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete()
    {
        $this->cart->instance(auth()->id())->destroy();
        return redirect('cart');
    }

    /**
     * Show user confirmation for finalazing order.
     * @return View
     */
    public function finalOrder()
    {
        $this->request->session()->flash('flash_message', 'YOUR ORDER HAVE BEEN SUCCESSFULY PLACED!');
        return view('frontend.placeOrder');
    }
}