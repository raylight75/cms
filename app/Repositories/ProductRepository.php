<?php

namespace App\Repositories;

class ProductRepository extends Repository
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
     * Product repository Class for model Product.
     * Just move query outside from Eloquent model.
     *
     * @package ecommerce-cms
     * @category Repository Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'App\Models\Product';
    }

    /**
     * @param $parent
     * @return \Illuminate\Support\Collection
     */
    public function getParents($parent)
    {
        return $this->model->with('category')
            ->where(['parent_id' => $parent])
            ->lists('product_id');
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
     */
    public function ItemProperty($id)
    {
        return $this->model->with('category', 'size', 'color')
            ->findOrFail($id);
    }

    /**
     * @return mixed
     */
    public function latest()
    {
        return $this->model->orderBy('product_id', 'desc')
            ->take('6')
            ->get();
    }

    /**
     * @param $request
     * @param $parent
     * @return mixed
     */
    public function paginate($request, $parent)
    {
        $query = $this->model->whereHas('productsSizes', function ($q) use ($request) {
            if (!empty($request->input('size'))) {
                $sizes = $request->input('size');
                $q->whereIn('size_id', $sizes);
            }
        });
        if (!empty($request->input('color'))) {
            $query->whereHas('colorsProducts', function ($q) use ($request) {
                $colors = $request->input('color');
                $q->whereIn('color_id', $colors);
            });
        }
        $query->where('parent_id', '=', $parent);
        if (!empty($request->input('categ'))) {
            $query->whereIn('cat_id', $request->input('categ'));
        };
        if (!empty($request->input('brand'))) {
            $query->whereIn('brand_id', $request->input('brand'));
        };
        if ($request->input('name')) {
            $query->orderBy('name', $request->input('name'));
        } else {
            $query->orderBy('price', $request->input('price'));
        }
        $query->groupBy('product_id');
        $result = $query->paginate(6);
        return $result;
    }

    /**
     * @return mixed
     */
    public function product()
    {
        return $this->model->with('category')
            ->orderBy('product_id', 'desc')
            ->get()
            ->random(6);
    }

    /**
     * @param $search
     * @return mixed
     */
    public function whereLike($search)
    {
        return $this->model->where('name', 'like', '%' . $search . '%')
            ->orderBy('name')
            ->paginate(6);
    }
}