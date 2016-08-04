<?php

namespace App\Http\Composers;

use App\Models\Category;
use App\Models\Currency;
use App\Models\Setting;
use Gloudemans\Shoppingcart\Facades\Cart;
use Auth,View;

class GlobalComposer
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
     * GlobalComopser Class for share global variables.
     *
     * @package ecommerce-cms
     * @category Base Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    private static $parent_id = 0;

    /**
     * Share global data to all views.
     */
    public function compose()
    {
        $data = self::globalData();
        View::share($data);
    }

    /**
     * Get Menu Items
     * @param $parent_id
     * @return array
     */
    public static function getMenuData($parent_id)
    {
        $categories = array();
        $result = Category::where('parent_id',$parent_id)->get();
        foreach ($result as $parentCategory) {
            $category = array();
            $category['id'] = $parentCategory->cat_id;
            $category['name'] = $parentCategory->cat;
            $category['parent_id'] = $parentCategory->parent_id;
            $category['banner'] = $parentCategory->m_img;
            $category['sub_cat'] = self::getMenuData($category['id']);
            $categories[$parentCategory->cat_id] = $category;
        }
        return $categories;
    }

    /**
     * Prepare global variables.
     * @return array
     */
    public static function globalData()
    {
        if (!Auth::check()) {
            $rows = null;
            $cart = null;
            $grandTotal = null;
        } else {
            $rows = Cart::instance(auth()->id())
                ->count(false);
            $cart = Cart::instance(auth()->id())
                ->content();
            $grandTotal = Cart::instance(auth()->id())
                ->total();
        }
        $data = array(
            'menu' => self::getMenuData(self::$parent_id),
            'header' => Setting::findOrFail(1),
            'rows' => $rows,
            'cart' => $cart,
            'grand_total' => $grandTotal,
            'currencies' => Currency::all(),
        );
        return $data;
    }
}