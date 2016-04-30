<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitProduct;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;
use Request, Auth, View;
use App\Models\Tax;


class CartController extends BaseController
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
     * Add a row to the cart
     *
     * @param string|Array $id Unique ID of the item|Item formated as array|Array of items
     * @param string $name Name of the item
     * @param int $qty Item qty to add to the cart
     * @param float $price Price of one item
     * @param Array $options Array of additional options, such as 'size' or 'color'
     */

    public function getIndex()
    {
        return view('frontend/shopping_cart');
    }

    public function checkDiscount()
    {
        $codes = Tax::all();
        foreach ($codes as $code ) {
            if(Request::has('discount') && Request::input('discount')!== $code->code){
                return true;
            }else{
                return false;
            }
        }
    }

    public function postStore(SubmitProduct $request)
    {
        $code = Tax::where('code', $request->input('discount'))->first();
        if($this->checkDiscount()){
            Session::flash('flash_message', 'You are entered invalid discount code!');
            return redirect()->back();
        }
        isset($code) ? $discount = $code->discount : $discount = 0;
        $productPrice = $request->input('price');
        $price = ((100 - $discount) / 100) * $productPrice;
        $data = Request::except(['_token', 'discount', 'price', 'color', 'size', 'img']);
        $data['price'] = $price;
        $data['options'] = Request::except(['_token', 'id', 'name', 'qty', 'price']);
        Cart::add($data);
        return redirect('cart');
    }

    public function postUpdate()
    {
        $content = Request::input('qty');
        foreach ($content as $id => $row) {
            Cart::update($row['rowid'], $row['qty']);
        }
        return redirect('cart');
    }

    public function getEdit($rowId)
    {
        Cart::remove($rowId);
        return redirect('cart');
    }

    public function getDelete()
    {
        Cart::destroy();
        return redirect('cart');
    }
}