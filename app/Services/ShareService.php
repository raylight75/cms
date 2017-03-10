<?php

namespace App\Services;

use View;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Repositories\CategoryRepository;
use App\Repositories\CurrencyRepository;
use App\Repositories\SettingRepository;

class ShareService extends BaseService
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
     * ShareService Class for share global variables.
     *
     * @package ecommerce-cms
     * @category Service Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    public function __construct
    (
        CategoryRepository $cat,
        CurrencyRepository $currency,
        SettingRepository $setting)
    {
        parent::__construct();
        $this->cat = $cat;
        $this->currency = $currency;
        $this->setting = $setting;
    }

    /**
     * @return parent id
     */
    public function getParent()
    {
        return $parent_id = 0;
    }

    /**
     * Get Menu Items
     * @param $parent_id
     * @return array
     */
    public function getMenuData($parent_id)
    {
        $categories = array();
        $result = $this->cat->where('parent_id', $parent_id);
        foreach ($result as $parentCategory) {
            $category = array();
            $category['id'] = $parentCategory->cat_id;
            $category['name'] = $parentCategory->cat;
            $category['parent_id'] = $parentCategory->parent_id;
            $category['banner'] = $parentCategory->m_img;
            $category['sub_cat'] = $this->getMenuData($category['id']);
            $categories[$parentCategory->cat_id] = $category;
        }
        return $categories;
    }

    /**
     * Prepare global variables.
     * @return array
     */
    public function globalData()
    {
        if (!Auth::check()) {
            $rows = null;
            $cart = null;
            $grandTotal = null;
        } else {
            $rows = $this->cart->instance(auth()->id())
                ->content()
                ->count(false);
            $cart = $this->cart->instance(auth()->id())
                ->content();
            $grandTotal = $this->cart->instance(auth()->id())
                ->total();
        }
        $data = array(
            'menu' => $this->getMenuData($this->getParent()),
            'header' => $this->setting->findOrFail(1),
            'locale' => App::getLocale(),
            'label' => session('currency', config('app.currency')),
            'rows' => $rows,
            'cart' => $cart,
            'grand_total' => $grandTotal,
            'currencies' => $this->currency->all(),
        );
        return $data;
    }
}