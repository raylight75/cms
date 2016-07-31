<?php

namespace App\Repositories;

use App\User;

class UserRepository
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
     * User repository Class for model Brand.
     * Just move query outside from Eloquent model.
     *
     * @package ecommerce-cms
     * @category Repository Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    protected $user;

    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Create User
     * @param $user
     * @return static
     */
    public function create($user)
    {
        return $this->user->create($user);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findOrFail($id)
    {
        return $this->user->findOrFail($id);
    }

    /**
     * Get user for midlleware check.
     * @param $id
     * @return mixed
     */
    public function findOrFailFirst($request)
    {
        return $this->user->findOrFail($request->all())
            ->first();
    }

    /**
     * Find by id and delete.
     * @param $id
     * @return mixed
     */
    public function findAndDelete($id)
    {
        return $this->user->findOrFail($id)->delete();
    }

    /**
     * Get table name
     * @return string
     */
    public function getTableName()
    {
        return $this->user->getTable();
    }

    /**
     * Paginate table user.
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function userWithPaginate()
    {
        return $this->user->with('role')
            ->paginate(10);
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
     */
    public function userWithFindbyId($id)
    {
        return $this->user->with('role')->findOrFail($id);
    }

    /**
     * Users role
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function userWithRole()
    {
        return $this->user->with('role')->get();
    }

    /**
     * Get user id for midlleware check.
     * @param $request
     * @return mixed
     */
    public function userWhereId($request)
    {
        return $this->user->where('id', $request->input('update'))
            ->first();
    }
}