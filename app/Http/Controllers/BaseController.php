<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Brands;
use App\Models\Product;
use Request;
use Illuminate\Support\Facades\Input;
use Auth, View;
use DB;

class BaseController extends Controller
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
     * Base Class
     *
     * @package ecommerce-cms
     * @category Base Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $data = Product::prepareGlobalData();
        View::share($data);
    }

    /**
     * Show the home page to the user.
     *
     * @return Response
     */
    public function index()
    {
        $data['brands'] = Brands::all();
        $data['latest'] = Product::orderBy('product_id', 'desc')->take('6')->get();
        $data['products'] = Product::getProducts();
        return view('frontend/body', $data);
    }

    public function aboutus()
    {
        return view('frontend/aboutus');
    }

    public function contacts()
    {
        return view('frontend/contacts');
    }

    /**
     * @param $slug
     * @param $parent
     * @return View
     */
    public function filter($slug, $parent)
    {
        $data = Product::prepareFilter($parent);
        $data['banner'] = Category::whereIn('cat_id',Input::get('categ'))->first();
        $data['properties'] = Product::getAll($parent);
        $data['products'] = Product::pagination($parent);
        if (Request::ajax()) {
            return response()->json(view('frontend/ajax-products', $data)->render());
        }else{
            return view('frontend/filter_view', $data);
        }

    }

    /**
     * @param $slug
     * @param $parent
     * @return View
     */
    public function product($slug, $id)
    {
        $data['latest'] = Product::orderBy('product_id', 'desc')->take('6')->get();
        $data['products'] = Product::getProducts();
        $data['item'] = Product::with('category', 'size', 'color')->find($id);
        return view('frontend/product_page', $data);
    }

    /**
     * @param $slug
     * @param $parent
     * @return View
     */
    public function frame($id)
    {
        $data['item'] = Product::with('category', 'size', 'color')->find($id);
        return view('frontend/frame', $data);
    }

    /**
     * @param $parent
     * @return \Illuminate\Http\JsonResponse|View
     */
    public function search($parent)
    {
        $search = Request::get('search');
        $data = Product::prepareFilter($parent);
        $data['banner'] = Category::where('cat_id',Input::get('categ'))->first();
        $data['properties'] = Product::getAll($parent);
        $data['products'] = Product::where('name', 'like', '%' . $search . '%')
            ->orderBy('name')
            ->paginate(6);
        if (Request::ajax()) {
            return response()->json(view('frontend/ajax-products', $data)->render());
        }else{
            return view('frontend/filter_view', $data);
        }
    }

    public function userLogin()
    {
        return view('frontend/login');
    }

    public function testapi()
    {
        $data['brands'] = Brands::all();
        $data['latest'] = Product::orderBy('product_id', 'desc')->take('6')->get();
        return view('frontend/livesearch', $data);
    }

    public function api()
    {
        return response()->json(Product::getProducts());
    }
}