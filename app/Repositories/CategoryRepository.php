<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
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
     * Category repository Class for model Category.
     * Just move query outside from Eloquent model.
     *
     * @package ecommerce-cms
     * @category Repository Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    protected $category;

    /**
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    /**
     * @param $request
     * @return mixed
     */
    public function getBaner($request)
    {
        return $this->category->whereIn('cat_id', $request->input('categ'))
            ->first();
    }

    /**
     * @param $parent_id
     * @return mixed
     */
    public function getParent($parent_id)
    {
        return $this->category->where('parent_id', '=', $parent_id)
            ->get();
    }

    /**
     * @param $request
     * @return mixed
     */
    public function getStaticBaner($request)
    {
        return $this->category->where('cat_id', $request->input('categ'))
            ->first();
    }
}