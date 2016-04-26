<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth,Gate;
use App\Models\Order;
use App\User;
use Zofe\Rapyd\Facades\DataGrid;
use Zofe\Rapyd\Facades\DataEdit;

class PanelController extends Controller
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
     * Panel Class for User Panel backend.
     *
     * @package ecommerce-cms
     * @category Base Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */
    private $titleOrders = 'Orders';

    private $titleUser = 'User';

    /**
     * Show user panel
     * @return Response
     */
    public function index()
    {
        $title = 'User Dashboard';
        return view('backend/dashboard', compact('title'));
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $grid = DataGrid::source(User::where('id', $id));
        $grid->label('Your Profile');
        $grid->attributes(array("class" => "table table-striped"));
        $grid->add('name', 'Name');
        $grid->add('<img src="/images/avatars/{{ $avatar }}" height="25" width="25">', 'Avatar');
        $grid->add('email', 'Email');
        $grid->edit('/panel/profile/edit','Edit','show|modify');
        $grid->orderBy('id', 'asc');
        $title = $this->titleUser;
        return view('backend/profile', compact('grid','title'));
    }

    public function profileEdit()
    {
        $edit = DataEdit::source(new User());
        $edit->label('Edit Profile');
        $edit->add('avatar','Avatar', 'image')->move('images/avatars/')->fit(240, 160)->preview(120,80);
        $edit->link('/panel/profile', "Back", "TR");
        $title = $this->titleUser;
        return view('backend/profile', compact('edit','title'));
    }

    public function orders()
    {
        $id = Auth::user()->id;
        $grid = DataGrid::source(Order::with('products')->where('user_id', $id));
        $grid->label('My Orders');
        $grid->attributes(array("class" => "table table-striped"));
        $grid->add('id', 'ID', true)->style("width:100px");
        $grid->add('order_date', 'Date');
        $grid->add('products.name', 'Product');
        $grid->add('size', 'Size');
        $grid->add('<img src="/images/products/{{ $img }}" height="25" width="25">', 'Image');
        $grid->add('color', 'Color');
        $grid->add('quantity', 'Qty');
        $grid->add('amount', 'Amount');
        $grid->edit('/panel/orders/edit','Curent Order','show');
        $grid->orderBy('id', 'asc');
        $title = $this->titleOrders;
        return view('backend/orders', compact('grid', 'title'));
    }
    public function ordersEdit(Request $request)
    {
        $order = Order::findOrFail($request->all())->first();
        if (Gate::denies('show-resource', $order)) {
            return redirect('panel/profile')->withErrors('Your are not autorized to view resources');;
        }
        $edit = DataEdit::source(new Order());
        $edit->label('View Order');
        $edit->add('order_date', 'Date','text');
        $edit->add('products.name', 'Product','text');
        $edit->add('size', 'Size','text');
        $edit->add('img','Image', 'image')->move('images/products/')->fit(240, 160)->preview(120,80);
        $edit->add('color', 'Color','text');
        $edit->add('quantity', 'Qty','text');
        $edit->add('amount', 'Amount','text');
        //$edit->link('/panel/orders', "Back", "TR");
        $title = $this->titleUser;
        return view('backend/profile', compact('edit','title'));
    }
}