<?php

namespace App\Services;

use App\Repositories\CategoryRepository;
use App\Repositories\BrandRepository;
use App\Repositories\ColorRepository;
use App\Repositories\ProductRepository;
use App\Repositories\SizeRepository;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class MainService
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
     * MainService Class.
     *
     * @package ecommerce-cms
     * @category Service Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    /**
     * MainService constructor.
     * @param Application $app
     * @param ProductRepository $product
     */
    public function __construct
    (
        Application $app,
        BrandRepository $brand,
        CategoryRepository $cat,
        ProductRepository $product
    )
    {
        $this->app = $app;
        $this->brand = $brand;
        $this->cat = $cat;
        $this->product = $product;
    }

    /**
     * @param $request
     * @return array
     */
    public function autocomplete($request)
    {
        $results = array();
        $search = $request->input('term');
        $queries = $this->product->whereAuto($search);
        foreach ($queries as $product) {
            $results[] = ['value' => $product->name];
        }
        return $results;
    }

    /**
     * Get data and count items for filters page.
     * @param $parent
     * @return mixed
     */
    public function getAll($parent)
    {
        //No need DI for this classes because they called once.
        $color = $this->app->make(ColorRepository::class);
        $size = $this->app->make(SizeRepository::class);
        $id = $this->product->getParents($parent);
        $data['brand'] = $this->brand->withCount($parent);
        $data['color'] = $color->withCount($id);
        $data['size'] = $size->withCount($id);
        return $data;
    }


    /**
     * Get data for Home page.
     * @return mixed
     */
    public function getHome()
    {
        $data['brands'] = $this->brand->all();
        $data['latest'] = $this->product->latest();
        $data['products'] = $this->product->product();
        return $data;
    }


    /**
     * Get data for search filters.
     * @param $request
     * @param $parent
     * @return array
     */
    public function getFilter($request, $parent)
    {
        $data = $this->prepareFilter($request, $parent);
        $data['banner'] = $this->cat->whereIn('cat_id', $request->input('categ'));
        $data['properties'] = $this->getAll($parent);
        $data['products'] = $this->pagination($request, $parent);
        return $data;
    }


    /**
     * Get products details data.
     * @param $slug
     * @param $id
     * @return mixed
     */
    public function getProductInfo($slug, $id)
    {
        $data['latest'] = $this->product->latest();;
        $data['products'] = $this->product->product();
        $data['item'] = $this->product->with('category', 'size', 'color')->findOrFail($id);
        return $data;
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
     */
    public function getFrameContent($id)
    {
        $data = $this->product->with('category', 'size', 'color')->findOrFail($id);
        return $data;
    }

    /**
     * @param Request $request
     * @param $parent
     * @return array
     */
    public function prepareFilter($request, $parent)
    {
        $data = array(
            'parent' => $parent,
            'size' => (array)$request->input('size'),
            'color' => (array)$request->input('color'),
            'brand' => (array)$request->input('brand'),
            'category' => (array)$request->input('categ')
        );
        return $data;
    }

    /**
     * Get products details.
     * @param $request
     * @param $parent
     * @return array
     */
    public function prepareSearch($request, $parent)
    {
        $search = $request->input('search');
        $data = $this->prepareFilter($request, $parent);
        $data['banner'] = $this->cat->findBy('cat_id', $request->input('categ'));
        $data['properties'] = $this->getAll($parent);
        $data['products'] = $this->product->whereLike($search);
        return $data;
    }


    /**
     * Paginate product.
     * @param $request
     * @param $parent
     * @return mixed
     */
    public function pagination($request, $parent)
    {
        $result = $this->product->paginate($request, $parent);
        return $result;
    }
}