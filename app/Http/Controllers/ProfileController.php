<?php

namespace App\Http\Controllers;

use App\User;
use Request;
use Auth, View;
use DB;
use Validator, Input, Redirect;
use Zofe\Rapyd\Facades\DataGrid;
use Zofe\Rapyd\Facades\DataEdit;

class ProfileController extends Controller
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
     * Profile Class for showing user profile.
     *
     * @package ecommerce-cms
     * @category Base Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    /**
     * Create a name for table.
     */

    private $title = 'User';

    /**
     * Show the home page to the user.
     *
     * @return Response
     */

    public function getIndex()
    {
        $id = Auth::user()->id;
        $grid = DataGrid::source(User::where('id', $id));
        $grid->label('Your Profile');
        $grid->attributes(array("class" => "table table-striped"));
        $grid->add('name', 'Name');
        $grid->add('<img src="/images/avatars/{{ $avatar }}" height="25" width="20">', 'Avatar');
        $grid->add('email', 'Email');
        $grid->edit('/panel/profile/edit');
        $grid->orderBy('id', 'asc');
        $title = $this->title;
        return view('backend/profile', compact('grid','title'));
    }

    public function getEdit()
    {
        $edit = DataEdit::source(new User());
        $edit->label('Edit Profile');
        $edit->add('avatar','Avatar', 'image')->move('images/avatars/')->fit(240, 160)->preview(120,80);
        $edit->link('/panel/profile', "Back", "TR");
        $title = $this->title;
        return view('backend/profile', compact('edit','title'));
    }
}