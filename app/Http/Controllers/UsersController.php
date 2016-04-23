<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Request;
use Auth, View;
use DB;
use Validator, Input, Redirect;
use App\User;

class UsersController extends Controller
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
     * Users Class for manage users
     *
     * @package ecommerce-cms
     * @category Base Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    /**
     * Display a listing of the users.
     *
     * @return Response
     */
    public function index()
    {
        $title = 'Edit Users';
        $users = User::with('role')->get();
        $users = User::paginate(10);
        return view('users.index', compact('users','title'));
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        $data['users'] = User::with('role')->get();
        return view('users.create', $data);
    }

    /**
     * Show the dashboard page to the user.
     *
     * @return Response
     */

    public function dashboard()
    {
        return view('backend/dashboard');
    }
}