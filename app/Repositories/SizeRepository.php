<?php

namespace App\Repositories;

class SizeRepository extends Repository
{
    /**
     * Ecommerce-CMS
     *
     * Copyright (C) 2014 - 2015  Tihomir Blazhev.
     *
     * Repository Class for model Size, extends base Repository Class.
     * Simple implementation without scopes and Criteria
     * specific queries is placed here.
     *
     * @package ecommerce-cms
     * @category Repository Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    /**
     * Get data and count items for filters page.
     * @return mixed
     */

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'App\Models\Size';
    }

    /**
     * Get data and count items for filters page.
     * @param $parents
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function withCount($parents)
    {
        return $this->model->with(['sizeCount' => function ($q) use ($parents) {
            $q->whereIn('product_id', $parents);
        }])->get();
        $this->model->first()->sizeCount;
    }
}