<?php

namespace App\Repositories;

class CategoryRepository extends Repository
{
    /**
     * Ecommerce-CMS
     *
     * Copyright (C) 2014 - 2015  Tihomir Blazhev.
     *
     * Repository Class for model Category, extends base Repository Class.
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
        return 'App\Models\Category';
    }

    /**
     * Category self recursion
     * @param $parent_id
     * @return array
     */
    public function filterCat($parent_id = 0)
    {
        $categories = array();
        $result = $this->where('parent_id', $parent_id);
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
        $menu = $this->with('children')->where('parent_id', 0)->get();
        return $menu;
    }
}