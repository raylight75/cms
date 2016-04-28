<?php

namespace App\Models;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;
use Request;
use DB;

class Product extends Model
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
     *
     * Product Model
     *
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */
    /**
     * The database table used by the model.
     *
     * @var string
     */

    private static $parent_id = 0;

    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'slug',
        'name',
        'description',
        'a_img',
        'brand_id',
        'cat_id',
        'quantity',
        'price'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */

    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     * Just example with singular name of the method
     */
    public function brands()
    {
        return $this->hasOne('App\Models\Brands', 'brand_id', 'brand_id');
    }

    public function category()
    {
        return $this->hasOne('App\Models\Category', 'cat_id', 'cat_id');
    }

    public function order()
    {
        return $this->belongsTo('App\Models\Order','product_id', 'product_id');
    }

    public function productsSizes()
    {
        return $this->hasMany('App\Models\Products_sizes');
    }

    public function size()
    {
        return $this->belongsToMany('App\Models\Size');
    }

    public function colorsProducts()
    {
        return $this->hasMany('App\Models\Colors_products');
    }

    public function color()
    {
        return $this->belongsToMany('App\Models\Color');
    }

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
     * @param $parent
     * @return mixed
     */
    public static function getAll($parent)
    {
        $sqla = '(SELECT count(products.brand_id) as count 
                            FROM products
                            WHERE products.brand_id = brand.brand_id
                            AND products.parent_id = "' . $parent . '") as brand_cnt';
        $sqlb = '(SELECT count(color_product.color_id) as count
                            FROM color_product
                            LEFT JOIN products
                            ON products.product_id = color_product.product_id
                            WHERE color_product.color_id = colors.color_id
                            AND products.parent_id = "' . $parent . '") as color_cnt';
        $result = DB::table('brand')
            ->select(array('*', DB::raw($sqla), DB::raw($sqlb)))
            ->leftJoin('sizes', 'brand.brand_id', '=', 'sizes.size_id')
            ->leftJoin('colors', 'brand.brand_id', '=', 'colors.color_id')
            ->get();
        $data['brand'] = array();
        $data['color'] = array();
        $data['size'] = array();
        foreach ($result as $val) {
            $data['brand'][] = $val;
            $data['color'][] = $val;
            $data['size'][] = $val;
        }
        return $data;
    }

    /**
     * @param $parent
     * @return mixed
     */
    public static function pagination($parent)
    {
        $query = Product::whereHas('productsSizes', function ($q) {
            if (!empty(Request::input('size'))) {
                $sizes = Request::input('size');
                $q->whereIn('size_id', $sizes);
            }
        });
        if (!empty(Request::input('color'))) {
            $query->whereHas('colorsProducts', function ($q) {
                $colors = Request::input('color');
                $q->whereIn('color_id', $colors);
            });
        }
        $query->where('parent_id', '=', $parent);
        if (!empty(Request::input('categ'))) {
            $query->whereIn('cat_id', Request::input('categ'));
        };
        if (!empty(Request::input('brand'))) {
            $query->whereIn('brand_id', Request::input('brand'));
        };
        $query->orderBy('price', Request::input('price'));
        $query->orderBy('name', Request::input('name'));
        $query->groupBy('product_id');
        $result = $query->paginate(6);
        return $result;
    }

    /**
     * @return mixed
     */
    public static function getProducts()
    {
        $data = Product::with('category')
            ->orderBy('product_id', 'desc')
            ->get()
            ->random(6);
        return $data;
    }

    /**
     * @return array
     */
    public static function prepareFilter($parent)
    {
        $data = array(
            'parent' => $parent,
            'size' => (array)Request::input('size'),
            'color' => (array)Request::input('color'),
            'brand' => (array)Request::input('brand'),
            'price' => (array)Request::input('price'),
            'name' => (array)Request::input('name'),
            'category' => (array)Request::input('categ')
        );
        return $data;
    }

    public static function prepareGlobalData()
    {
        $data = array(
            'menu' => self::getMenuData(self::$parent_id),
            'header' => Setting::find(1),
            'rows' => Cart::count(false),
            'cart' => Cart::content(),
            'grand_total' => Cart::total(),
        );
        return $data;
    }
}