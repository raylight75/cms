<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Request;
use App\Models\Product;
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
        $data = Product::prepareGlobal();
        View::share($data);
    }

    /**
     * Show the home page to the user.
     *
     * @return Response
     */
    public function index()
    {
        $data = Product::prepareHome();
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

    public function filter($slug,$id)
    {
        $get = array(
            'size' => Input::get('size'),
            'color' => Input::get('color'),
            'categ' => Input::get('categ'),
            'brand' => Input::get('brand'),
        );
        //$cat = Request::input('categ');
        //echo '<pre>',print_r($cat),'</pre>';
        $parent = Request::segment(3);
        $pid = Product::getParent($id);
        $data = Product::prepareFilter();
        $data['properties'] = Product::getAll($pid);
        $data['parent'] = $parent;
        $data['products'] = Product::pagination($get, $parent);
        return view('frontend/filter_view', $data);
    }

    public function single()
    {

    }

    public function userLogin()
    {
        return view('frontend/login');
    }

    public function write()
    {
        Product::writeRoutes();
        return redirect('cms');
    }
}