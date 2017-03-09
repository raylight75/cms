<?php

namespace App\Services;

use Illuminate\Support\Facades\App;
use Gloudemans\Shoppingcart\Cart;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;

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

    protected $cart;

    protected $cat;

    protected $product;

    /**
     * BaseService constructor.
     */
    public function __construct()
    {
        $this->cart = App::make(Cart::class);
        $this->cat = App::make(CategoryRepository::class);
        $this->product = App::make(ProductRepository::class);
    }
}