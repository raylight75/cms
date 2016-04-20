<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Request;
use Auth, View;
use DB;
use Validator, Input, Redirect;
use Zofe\Rapyd\Facades\DataGrid;
use Zofe\Rapyd\Facades\DataEdit;

class OrdersController extends Controller
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

    private $title = 'Orders';

    /**
     * Show the home page to the user.
     *
     * @return Response
     */

    public function getIndex()
    {
        $id = Auth::user()->id;
        $grid = DataGrid::source(Order::where('user_id', $id));
        $grid->label('My Orders');
        $grid->attributes(array("class" => "table table-striped"));
        $grid->add('id', 'ID', true)->style("width:100px");
        $grid->add('order_date', 'Date');
        $grid->add('order.products','Product');
        $grid->add('size', 'Size');
        $grid->add('<img src="/images/products/{{ $img }}" height="25" width="25">', 'Image');
        $grid->add('color', 'Color');
        $grid->add('quantity', 'Qty');
        $grid->add('amount', 'Amount');
        $grid->edit('/panel/orders/edit','View Order','show');
        $grid->orderBy('id', 'asc');
        $title = $this->title;
        return view('backend/orders', compact('grid','title'));
    }

    public function getEdit()
    {
        $edit = DataEdit::source(new Order());
        $edit->label('Order Details');
        $edit->add('order_date','Date','daterange')->format('d/m/Y', 'en');
        $edit->add('product_id','Product','select')->options(Order::lists("product_id","product_id")->all());
        $edit->add('size', 'Size', 'text');
        $edit->add('img','Image', 'image')->fit(240, 160)->preview(120,80);
        $edit->add('color', 'Color', 'text');
        $edit->add('quantity', 'Qty', 'text');
        $edit->add('amount', 'Amount', 'text');
        $title = $this->title;
        return view('backend/orders', compact('edit','title'));
    }
}