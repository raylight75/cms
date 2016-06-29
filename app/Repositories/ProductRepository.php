<?php

namespace App\Repositories;

use App\Models\Brands;
use App\Models\Category;
use App\Models\Product;
use App\Repositories\ShareRepository as Share;
use Request,DB;

class ProductRepository
{

    /**
     *
     * Product Class with custom methods for products.
     * Just move logic outside from Eloquent model.
     *
     * @package ecommerce-cms
     * @category Base Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

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
     * Get data for Home page.
     * @return mixed
     */
    public static function getHome()
    {
        $data['brands'] = Brands::all();
        $data['latest'] = Product::latest();
        $data['products'] = Product::Products();
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
        $data['latest'] = Product::latest();
        $data['products'] = Product::Products();
        $data['item'] = Product::ItemProperty($id);
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
        if(Request::input('name')){
            $query->orderBy('name', Request::input('name'));
        }else{
            $query->orderBy('price', Request::input('price'));
        }
        //$query->orderBy('price', Request::input('price'));
        //$query->orderBy('name', Request::input('name'));
        $query->groupBy('product_id');
        $result = $query->paginate(6);
        return $result;
    }
}