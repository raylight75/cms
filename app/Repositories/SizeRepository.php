<?php

namespace App\Repositories;

use App\Models\Size;

class SizeRepository
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
     * Color repository Class for model Color.
     * Just move query outside from Eloquent model.
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
    protected $size;

    /**
     * @param Brand $brand
     */
    public function __construct(Size $size)
    {
        $this->size = $size;
    }

    /**
     * Get data and count items for filters page.
     * @param $parents
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function withCount($parents)
    {
        return $this->size->with(['sizeCount' => function ($q) use ($parents) {
            $q->whereIn('product_id', $parents);
        }])->get();
        $this->size->first()->sizeCount;
    }
}