<?php

namespace App\Services;

use App\Repositories\BrandRepository;
use App\Repositories\ColorRepository;
use App\Repositories\SizeRepository;

class Properties
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
     * Product Properties.
     *
     * @package ecommerce-cms
     * @category Service Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    public function __construct
    (
        BrandRepository $brand,
        ColorRepository $color,
        SizeRepository $size
    )
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->size = $size;
    }

    /**
     * Get data and count items for filters page.
     * @param $parent
     * @return mixed
     */
    public function getCount($parent,$id)
    {
        $data['brand'] = $this->brand->withCount($parent);
        $data['color'] = $this->color->withCount($id);
        $data['size'] = $this->size->withCount($id);
        return $data;
    }

    /**
     * Get data for Home page.
     * @return mixed
     */
    public function getBrands()
    {
        $data['brands'] = $this->brand->all();
        return $data;
    }
}