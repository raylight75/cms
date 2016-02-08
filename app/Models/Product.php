<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
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

    public function brands()
    {
        return $this->hasOne('App\Models\Brands', 'brand_id', 'brand_id');
    }

    public function category()
    {
        return $this->hasOne('App\Models\Category', 'cat_id', 'cat_id');
    }

    public function size()
    {
        return $this->hasMany('App\Models\Size');
    }

    public function color()
    {
        return $this->hasMany('App\Models\Color');
    }

    /*public function productsize()
    {
        return $this->belongsTo('App\Models\Size');
    }*/

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

    /**
     * @param $parent
     * @return mixed
     */
    public static function pagination($parent)
    {
        $query = Product::whereHas('size', function ($q) {
            if (!empty(Input::get('size'))) {
                $sizes = Input::get('size');
                $q->whereIn('size_id', $sizes);
            }
        });
        if (!empty(Input::get('color'))) {
            $query->whereHas('color', function ($q) {
                $colors = Input::get('color');
                $q->whereIn('colour_id', $colors);
            });
        }
        $query->where('parent_id', '=', $parent);
        if (!empty(Input::get('categ'))) {
            $query->whereIn('cat_id', Input::get('categ'));
        };
        if (!empty(Input::get('brand'))) {
            $query->whereIn('brand_id', Input::get('brand'));
        };
        $query->orderBy('price', 'asc');
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
}