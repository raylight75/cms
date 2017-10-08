<?php

namespace App\Repositories;

class ProductRepository extends Repository
{
    /**
     * Ecommerce-CMS
     *
     * Copyright (C) 2014 - 2015  Tihomir Blazhev.
     *
     * Repository Class for model Product, extends base Repository Class.
     * Simple implementation without scopes and Criteria
     * specific queries is placed here.
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
    public function model()
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
            ->pluck('product_id');
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
    public function paginate($parent)
    {
        $request = request();
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

    /**
     * @param $search
     * @return mixed
     */
    public function whereAuto($search)
    {
        return $this->model->where('name', 'like', '%' . $search . '%')
            ->orderBy('name')
            ->take(5)
            ->get();
    }
}