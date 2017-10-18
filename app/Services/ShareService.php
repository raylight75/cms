<?php

namespace App\Services;

use App\Repositories\CategoryRepository;

class ShareService extends BaseService
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
     * ShareService Class for share global variables.
     *
     * If we need only few times table result is better
     * to call models to retrieve result.
     * Othetwise use coresponded repository.
     *
     * @package ecommerce-cms
     * @category Service Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    protected $cat;

    /**
     * ShareService constructor.
     * @param CategoryRepository $cat
     */
    public function __construct(CategoryRepository $cat)
    {
        $this->cat = $cat;
    }

    /**
     * @return array
     */
    public function globalData()
    {
        $cart = $this->setCart();
        $var = $this->setVars();
        $data = array(
            'menu' => $this->navMenu(),
            'cats' => $this->filterCat(),
            'meta' => $var['header'],
            'locale' => $var['locale'],
            'currencies' => $var['currency'],
            'rows' => $cart['rows'],
            'cart' => $cart['cart'],
            'grand_total' => $cart['grandTotal'],
            'currency' => session('currency', config('app.currency')),
        );
        return $data;
    }

    /**
     * Category self recursion
     * @param $parent_id
     * @return array
     */
    public function filterCat($parent_id = 0)
    {
        $categories = array();
        $result = $this->cat->where('parent_id', $parent_id);
        foreach ($result as $parentCategory) {
            $category = array();
            $category['id'] = $parentCategory->cat_id;
            $category['name'] = $parentCategory->cat;
            $category['parent_id'] = $parentCategory->parent_id;
            $category['banner'] = $parentCategory->m_img;
            $category['sub_cat'] = $this->filterCat($category['id']);
            $categories[$parentCategory->cat_id] = $category;
        }
        return $categories;
    }

    /**
     * Get NavMenu
     * @return mixed
     */
    public function navMenu()
    {
        $menu = $this->cat->with('children')->where('parent_id', 0)->get();
        return $menu;
    }
}