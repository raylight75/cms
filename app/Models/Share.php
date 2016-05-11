<?php

namespace App\Models;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use DB;

class Share
{

    /**
     *
     * Share Class for prepare and share global variables
     *
     * @package ecommerce-cms
     * @category Base Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    private static $parent_id = 0;

    /**
     * @param $parent_id
     * @return array
     */
    public static function getMenuData($parent_id)
    {
        $categories = array();
        $result = DB::table('categories')
            ->where('parent_id', '=', $parent_id)
            ->get();
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
     * Remove all user piece of data from the session.
     * @param Request $request
     */
    public static function forgetSessionKeys(Request $request)
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
     * Prepare filter value for view.
     * @return array
     */
    public static function prepareFilter(Request $request,$parent)
    {
        $data = array(
            'parent' => $parent,
            'size' => (array)$request->input('size'),
            'color' => (array)$request->input('color'),
            'brand' => (array)$request->input('brand'),
            'price' => (array)$request->input('price'),
            'name' => (array)$request->input('name'),
            'category' => (array)$request->input('categ')
        );
        return $data;
    }

    /**
     * Prepare global variables.
     * @return array
     */
    public static function globalData()
    {
        $data = array(
            'menu' => self::getMenuData(self::$parent_id),
            'header' => Setting::find(1),
            'rows' => Cart::count(false),
            'cart' => Cart::content(),
            'grand_total' => Cart::total(),
            'currencies' => self::currencyGet(),
        );
        return $data;
    }

    /**
     * Get currency data from database.
     * @return mixed
     */
    public static function currencyGet()
    {
        $currency = DB::table('currencies')->get();
        return $currency;
    }
}