<?php

namespace App\Services;

use App\Repositories\BrandRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\ColorRepository;
use App\Repositories\ProductRepository;
use App\Repositories\SizeRepository;
use App\Repositories\CountryRepository;
use App\Repositories\CustomerRepository;
use App\Repositories\OrderRepository;
use App\Repositories\PaymentRepository;
use App\Repositories\ShippingRepository;
use App\Repositories\TaxRepository;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Contracts\Auth\Guard;
use App\Repositories\CurrencyRepository;
use App\Repositories\SettingRepository;
use Illuminate\Foundation\Application;

abstract class BaseService
{
    /**
     *
     * BaseService Class.
     *
     * @package ecommerce-cms
     * @category Service Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    public function __construct
    (
        Application $app,
        BrandRepository $brand,
        CategoryRepository $cat,
        CurrencyRepository $currency,
        Cart $cart,
        ColorRepository $color,
        CountryRepository $country,
        CustomerRepository $customer,
        Guard $auth,
        OrderRepository $order,
        PaymentRepository $payment,
        ProductRepository $product,
        SizeRepository $size,
        SettingRepository $setting,
        ShippingRepository $shipping,
        TaxRepository $tax

    )
    {
        $this->auth = $auth;
        $this->app = $app;
        $this->brand = $brand;
        $this->category = $cat;
        $this->cat = $cat;
        $this->cart = $cart;
        $this->currency = $currency;
        $this->color = $color;
        $this->country = $country;
        $this->customer = $customer;
        $this->order = $order;
        $this->payment = $payment;
        $this->product = $product;
        $this->size = $size;
        $this->setting = $setting;
        $this->shipping = $shipping;
        $this->tax = $tax;
    }
}