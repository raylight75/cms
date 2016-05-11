<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Request, DB;

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
        return $this->belongsTo('App\Models\Order', 'product_id', 'product_id');
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
     * Scope a query to latest users.
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLatest($query)
    {
        return $query->orderBy('product_id', 'desc')
            ->take('6')
            ->get();
    }

    /**
     * Scope a query to 6 per page.
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function scopeProducts($query)
    {
        return $query->with('category')
            ->orderBy('product_id', 'desc')
            ->get()
            ->random(6);
    }

    /**
     * Scope a query for property of the Items.
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeItemProperty($query,$id)
    {
        return $query->with('category', 'size', 'color')->findOrFail($id);
    }

    /**
     * Get data for Home page.
     * @return mixed
     */
    public static function getHome()
    {
        $data['brands'] = Brands::all();
        $data['latest'] = self::latest();
        $data['products'] = self::Products();
        return $data;
    }


    /**
     * Get data for search filters.
     * @param $request
     * @param $parent
     * @return array
     */
    public static function getFilter($request, $parent)
    {
        $data = Share::prepareFilter($request, $parent);
        $data['banner'] = Category::whereIn('cat_id', $request->input('categ'))->first();
        $data['properties'] = self::getAll($parent);
        $data['products'] = self::pagination($parent);
        return $data;
    }


    /**
     * Get products details data.
     * @param $slug
     * @param $id
     * @return mixed
     */
    public static function getProductInfo($slug, $id)
    {
        $data['latest'] = self::latest();
        $data['products'] = self::Products();
        $data['item'] = self::ItemProperty($id);
        return $data;
    }

    /**
     * Get products details.
     * @param $request
     * @param $parent
     * @return array
     */
    public static function prepareSearch($request, $parent)
    {
        $search = $request->input('search');
        $data = Share::prepareFilter($request, $parent);
        $data['banner'] = Category::where('cat_id', $request->input('categ'))->first();
        $data['properties'] = self::getAll($parent);
        $data['products'] = Product::where('name', 'like', '%' . $search . '%')
            ->orderBy('name')
            ->paginate(6);
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
}