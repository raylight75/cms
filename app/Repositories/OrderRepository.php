<?php

namespace App\Repositories;

class OrderRepository extends Repository
{
    /**
     * Ecommerce-CMS
     *
     * Copyright (C) 2014 - 2015  Tihomir Blazhev.
     *
     * Repository Class for model Order, extends base Repository Class.
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
        return 'App\Models\Order';
    }

    /**
     * @param $request
     * @return mixed
     */
    public function find($request)
    {
        return $this->findOrFail($request->all());
    }

    /**
     * @param $request
     * @return mixed
     */
    public function whereId($request)
    {
        return $this->findBy('id', $request->input('update'));
    }

    /**
     * Get user order parameters.
     * @param $request
     * @return mixed
     */
    public function getUserOrder($request)
    {
        if ($request->has('update')) {
            $order = $this->whereId($request);
        } else {
            $order = $this->find($request);
        }
        return $order;
    }
}