<?php

namespace App\Http\Routes;

use App\Repositories\ShareRepository as Share;
use Illuminate\Support\Facades\File;
use Route;

class RouteRegister
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
     * RouteRegister class
     *
     * @package ecommerce-cms
     * @category Base Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    public static function registerRoutes()
    {
        $parent_id = 0;
        $categories = Share::getMenuData($parent_id);
        foreach ($categories as $row) {
            $parent_cat = $row['name'];
            foreach ($row['sub_cat'] as $sub_cat) {
                $slug = $sub_cat['name'];
                Route::get('' . $parent_cat . '/{slug}/{id}', 'BaseController@filter');
                Route::get('' . $slug . '/{slug}/{id}', 'BaseController@product');
            }
        }
    }

    public static function writeRoutes()
    {
        $cotroller_parent = 'BaseController@filter';
        $cotroller_sub = 'BaseController@product';
        $category = self::getMenuData(0);
        $data[] = "<?php";
        foreach ($category as $row) {
            $data[] = "Route::get('". $row['name'] . "/{slug}/{id}' , '". $cotroller_parent ."');";
            foreach ($row['sub_cat'] as $sub_cat) {
                $data[] = "Route::get('". $sub_cat['name'] ."/{slug}/{id}' , '". $cotroller_sub ."');";
            }
        }
        $output = implode("\n", $data);
        $file = app_path().'/Http/Routes/routes.php';
        $bytes_written = File::put($file, $output);
        if ($bytes_written === false)
        {
            die("Error writing to file");
        }
    }

    public static function  testFunction()
    {
        //$cat = Request::input('categ');
        //echo '<pre>',print_r($cat),'</pre>';
        //$parent = Request::segment(3);
        //echo '<pre>',print_r($products),'</pre>';
        //dd($data['size_id']);
        //
        /*$query = DB::table('products');
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
        $result = $query->paginate(6);*/
    }
}

