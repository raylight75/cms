<?php

namespace App\Repositories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use App\Repositories\ShareRepository as Share;
use Request, DB;

class ProductRepository
{

    /**
     *
     * Product repository Class with custom methods for products.
     * Just move logic outside from Eloquent model.
     *
     * @package ecommerce-cms
     * @category Base Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    /**
     * Get data and count items for filters page.
     * @return mixed
     */
    public static function getAll($parent)
    {
        $parents = Product::GetParents($parent);
        $data['brand'] = Brand::with(['brandCount' => function ($q) use ($parent) {
            $q->where('parent_id', $parent);
        }])->get();
        $data['brand']->first()->brandCount;
        $data['color'] = Color::with(['colorCount' => function ($q) use ($parents) {
            $q->whereIn('product_id', $parents);
        }])->get();
        $data['color']->first()->colorCount;
        $data['size'] = Size::with(['sizeCount' => function ($q) use ($parents) {
            $q->whereIn('product_id', $parents);
        }])->get();
        $data['size']->first()->sizeCount;
        return $data;
    }

    /**
     * Get data for Home page.
     * @return mixed
     */
    public static function getHome()
    {
        $data['brands'] = Brand::all();
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
        if (Request::input('name')) {
            $query->orderBy('name', Request::input('name'));
        } else {
            $query->orderBy('price', Request::input('price'));
        }
        //$query->orderBy('price', Request::input('price'));
        //$query->orderBy('name', Request::input('name'));
        $query->groupBy('product_id');
        $result = $query->paginate(6);
        return $result;
    }
}