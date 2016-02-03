<?php

namespace App\Models;

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

    private static $parent_id = 0;

    public function brands()
    {
        return $this->hasOne('App\Models\Brands', 'brand_id', 'brand_id');
    }

    public function size()
    {
        return $this->hasMany('App\Models\Size');
    }

    public function productsize()
    {
        return $this->belongsTo('App\Models\Size');
    }

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

    public static function getAll($parent)
    {
        $sqla = '(SELECT count(products.brand_id) as count 
                            FROM products
                            WHERE products.brand_id = brand.brand_id
                            AND products.parent_id = "' . $parent . '") as brand_cnt';
        $sqlb = '(SELECT count(productcolour.colour_id) as count
                            FROM productcolour 
                            LEFT JOIN products
                            ON products.product_id = productcolour.product_id
                            WHERE productcolour.colour_id = colour.colour_id
                            AND products.parent_id = "' . $parent . '") as color_cnt';
        $result = DB::table('brand')
            ->select(array('*', DB::raw($sqla), DB::raw($sqlb)))
            ->leftJoin('size', 'brand.brand_id', '=', 'size.size_id')
            ->leftJoin('colour', 'brand.brand_id', '=', 'colour.colour_id')
            ->get();
        $data['brand'] = array();
        $data['colour'] = array();
        $data['size'] = array();
        foreach ($result as $val) {
            $data['brand'][] = $val;
            $data['colour'][] = $val;
            $data['size'][] = $val;
        }
        return $data;
    }

    public static function getBrand()
    {
        $result = DB::table('brand')->get();
        return $result;
    }

    public static function getLatest()
    {
        $result = DB::table('products')
            ->join('categories', 'categories.cat_id', '=', 'products.cat_id')
            ->orderBy('product_id', 'ASC')
            ->take('6')
            ->get();
        return $result;
    }

    public static function getRandom()
    {
        $result = DB::table('products')
            ->join('categories', 'categories.cat_id', '=', 'products.cat_id')
            ->orderBy('product_id', 'RANDOM')
            ->take('6')
            ->get();
        return $result;
    }

    public static function getBanners()
    {
        $result = DB::table('products')
            ->leftJoin('categories', 'categories.cat_id', '=', 'products.cat_id')
            ->orderBy('product_id', 'RANDOM')
            ->take('6')
            ->get();
        return $result;
    }

    public static function getColor($id)
    {
        $result = DB::table('productcolour')
            ->join('colour', 'colour.colour_id', '=', 'productcolour.colour_id')
            ->where('productcolour.product_id', '=', $id)
            ->get();
        return $result;
    }

    public static function getProduct($id)
    {
        $result = DB::table('products')
            ->select(array('*', DB::raw("GROUP_CONCAT(size.size SEPARATOR ',') as size")))
            ->leftJoin('categories', 'categories.cat_id', '=', 'products.cat_id')
            ->leftJoin('productsize', 'productsize.product_id', '=', 'products.product_id')
            ->leftJoin('size', 'size.size_id', '=', 'productsize.size_id')
            ->leftJoin('brand', 'brand.brand_id', '=', 'products.brand_id')
            ->where('products.product_id', '=', $id)
            ->groupBy('products.product_id')
            ->get();
        return $result;
    }

    public static function pagination(array $get, $parent)
    {
        $query = DB::table('products');
        $query->leftJoin('categories', 'categories.cat_id', '=', 'products.cat_id');
        $query->leftJoin('productsize', 'productsize.product_id', '=', 'products.product_id');
        $query->leftJoin('productcolour', 'productcolour.product_id', '=', 'products.product_id');
        $query->where('categories.parent_id', '=', $parent);
        if (!empty($get['size'])) {
            $query->whereIn('productsize.size_id', $get['size']);
        }
        if (!empty($get['color'])) {
            $query->whereIn('productcolour.colour_id', $get['color']);
        }
        if (!empty($get['categ'])) {
            $query->whereIn('products.cat_id', $get['categ']);
        }
        if (!empty($get['brand'])) {
            $query->whereIn('brand_id', $get['brand']);
        }
        $query->orderBy('price', 'desc');
        $query->groupBy('products.product_id');
        $result = $query->paginate(6);
        return $result;
    }

    public static function prepareGlobal()
    {
        $data = array(
            'latest' => self::getLatest(),
            'products' => self::getRandom(),
            'menu' => self::getMenuData(self::$parent_id),
            'title' => 'EShop eCommerce CMS',
            'description' => 'EShop CMS',
            'keyword' => 'Eshop',
        );
        return $data;
    }

    public static function prepareHome()
    {
        $data = array(
            'latest' => self::getLatest(),
            'products' => self::getRandom(),
            'brand_id' => self::getBrand(),
        );
        return $data;
    }

    public static function prepareFilter()
    {
        $data = array(
            'banner' => self::getBanners(),
            'size' => (array)Request::input('size'),
            'color' => (array)Request::input('color'),
            'brand' => (array)Request::input('brand'),
            'price' => (array)Request::input('price'),
            'name' => (array)Request::input('name'),
            'category' => (array)Request::input('categ')
        );
        return $data;
    }

    public static function prepareProduct()
    {
        $data = array(
            'latest' => self::getLatest(),
            'random' => self::getRandom(),
        );
        return $data;
    }
}