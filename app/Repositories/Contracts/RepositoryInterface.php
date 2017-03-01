<?php

namespace App\Repositories\Contracts;

interface RepositoryInterface
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
     * Interface for repositories.
     *
     * @package ecommerce-cms
     * @category Interface Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    /**
     * @return mixed
     */
    public function all();

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * @param $value
     * @return mixed
     */
    public function find($value);

    /**
     * @param $field
     * @param $value
     * @return mixed
     */
    public function findBy($field, $value);

    /**
     * @param $value
     * @return mixed
     */
    public function findOrFail($value);

    /**
     * @param $field
     * @param $value
     * @return mixed
     */
    public function whereIn($field, $value = array());

    /**
     * @param $field
     * @param $value
     * @return mixed
     */
    public function where($field, $value);

    /**
     * @param $relation
     * @return mixed
     */
    public function with($relation);
}