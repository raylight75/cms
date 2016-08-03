<?php

namespace App\Repositories;

class BrandRepository extends Repository
{
    /**
     * Ecommerce-CMS
     *
     * Copyright (C) 2014 - 2015  Tihomir Blazhev.
     *
     * Repository Class for model Brand, extends base Repository Class.
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
        return 'App\Models\Brand';
    }

    /**
     * Get data and count items for filters page.
     * @param $parent
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function withCount($parent)
    {
        return $this->model->with(['brandCount' => function ($q) use ($parent) {
            $q->where('parent_id', $parent);
        }])->get();
        $this->model->first()->brandCount;
    }
}