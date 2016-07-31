<?php

namespace App\Http\Controllers;

use App\Services\BaseService;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use View;

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

    protected $base;

    /**
     * @param BaseService $baseService
     */
    public function __construct(BaseService $baseService)
    {
        $this->base = $baseService;
    }

    /**
     * Show the home page to the user.
     *
     * @return Response
     */
    public function index()
    {
        $data = $this->base->getHome();
        return view('frontend.body', $data);
    }

    /**
     * Show required page to user
     * @return View
     */
    public function aboutus()
    {
        return view('frontend.aboutus');
    }

    /**
     * Show required page to user
     * @return View
     */
    public function contacts()
    {
        return view('frontend.contacts');
    }

    /**
     * @param $slug
     * @param $parent
     * @return View
     */
    public function filter(Request $request, $slug, $parent)
    {
        $data = $this->base->getFilter($request, $parent);
        if ($request->ajax()) {
            return response()->json(view('frontend.ajax-products', $data)->render());
        } else {
            return view('frontend.filter_view', $data);
        }

    }

    /**
     * @param $slug
     * @param $id
     * @return View
     */
    public function product($slug, $id)
    {
        $data = $this->base->getProductInfo($slug, $id);
        return view('frontend.product_page', $data);
    }

    /**
     * @param $id
     * @return View
     */
    public function frame($id)
    {
        $item = $this->base->getFrameContent($id);
        return view('frontend.frame', compact('item'));
    }

    /**
     * @param $parent
     * @return \Illuminate\Http\JsonResponse|View
     */
    public function search(Request $request, $parent)
    {
        $data = $this->base->prepareSearch($request, $parent);
        if ($request->ajax()) {
            return response()->json(view('frontend.ajax-products', $data)->render());
        } else {
            return view('frontend.filter_view', $data);
        }
    }

    /**
     * Set currency to session
     * @param string $currency
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function set_currency(Request $request,$currency = "")
    {
        $currency = ($currency != "") ? $currency : "USD";
        $request->session()->put('currency', $currency);
        return redirect('cms');
    }

    /**
     * Show login page to user
     * @return View
     */
    public function userLogin()
    {
        return view('frontend.login');
    }

    public function welcome(Guard $auth,Request $request)
    {
        //redirect trait AuthenticatesUsers getLogout()
        $user = $auth->user()->name;
        $request->session()->flash('flash_message', 'You have been successfully Logged In!');
        return view('messages.welcome')->with('user', $user);
    }
}