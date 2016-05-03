<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Brands;
use Request;
use Auth, View;
use DB;
use Validator, Input, Redirect;
use Zofe\Rapyd\Facades\DataGrid;
use Zofe\Rapyd\Facades\DataEdit;

class CrudController extends Controller
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
     * Products Class for CRUD for associated table.
     *
     * @package ecommerce-cms
     * @category Base Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    /**
     * Create a name for table.
     */

    private $title = 'Products';

    private $titleOrders = 'Orders';

    /**
     * Show the home page to the user.
     *
     * @return Response
     */

    public function index()
    {
        return view('backend/dashboard');
    }

    public function products()
    {
        $filter = \DataFilter::source(Product::with('brands','size','color','category'));
        $filter->add('product_id','ID', 'text');
        $filter->add('name','Name', 'text');
        $filter->add('brands.brand','Brand', 'text');
        $filter->add('category.cat','Category', 'text');
        //$filter->add('quantity', 'Qty','text');
        //$filter->add('price', 'Price','text');
        $filter->submit('search');
        $filter->reset('reset');
        $filter->build();

        $grid = DataGrid::source($filter);
        $grid->label('Product List');
        $grid->attributes(array("class" => "table table-striped"));
        $grid->add('product_id', 'ID', true)->style("width:100px");
        $grid->add('slug', 'Slug');
        $grid->add('name', 'Name');
        $grid->add('brands.brand','Brand');
        $grid->add('category.cat','Category');
        $grid->add('{{ implode(", ", $size->lists("size")->all()) }}','Sizes');
        $grid->add('{{ implode(", ", $color->lists("color")->all()) }}','Colors');
        $grid->add('<img src="/images/products/{{ $a_img }}" height="25" width="20">', 'Front');
        $grid->add('<img src="/images/products/{{ $b_img }}"height="25" width="20">', 'Side');
        //$grid->add('<img src="/images/products/{{ $c_img }}"height="25" width="20">', 'Back');
        $grid->add('quantity', 'Qty');
        $grid->add('price', 'Price');
        $grid->edit('/backend/products/edit');
        $grid->link('/backend/products/edit', "New Products", "TR");
        $grid->orderBy('product_id', 'asc');
        $grid->paginate(10);
        $title = $this->title;
        return view('backend/products', compact('filter','grid','title'));
    }

    public function productsEdit()
    {
        if (Input::get('do_delete') == 1) return "not the first";
        $edit = DataEdit::source(new Product());
        $edit->label('Edit Product');
        $edit->add('slug', 'Slug', 'text')->rule('required|min:3');
        $edit->add('name', 'Name', 'text')->rule('required|min:3');
        $edit->add('description','Description', 'redactor');
        $edit->add('brand_id','Brand','select')->options(Brands::lists("brand","brand_id")->all());
        $edit->add('cat_id','Category','select')->options(Category::lists("cat","cat_id")->all());
        $edit->add('size.size','Size','tags');
        $edit->add('color.color','Color','tags');
        $edit->add('a_img','Front', 'image')->move('images/products/')->fit(240, 160)->preview(120,80);
        $edit->add('b_img','Side', 'image')->move('images/products/')->fit(240, 160)->preview(120,80);
        //$edit->add('c_img','Back', 'image')->move('images/products/')->fit(240, 160)->preview(120,80);
        $edit->add('quantity', 'Qty', 'text');
        $edit->add('price', 'Price', 'text');
        $edit->link('/backend/products', "Back", "TR");
        $title = $this->title;
        return view('backend/products', compact('edit','title'));
    }

    public function orders()
    {
        $filter = \DataFilter::source(Order::with('users','products'));
        $filter->add('id','ID', 'text');
        $filter->add('users.name','Username', 'text');
        $filter->add('products.name', 'Product','text');
        $filter->add('size','Size', 'text');
        $filter->add('color','Color', 'text');
        //$filter->add('quantity', 'Qty','text');
        //$filter->add('price', 'Price','text');
        $filter->submit('search');
        $filter->reset('reset');
        $filter->build();

        $grid = DataGrid::source($filter);
        $grid->label('User Orders');
        $grid->attributes(array("class" => "table table-striped"));
        $grid->add('id', 'ID', true)->style("width:100px");
        $grid->add('users.name','Username', 'text');
        $grid->add('order_date', 'Date');
        $grid->add('<a href="/blabla/?id={{}}">"products.name"</a>','Product');
        $grid->add('products.name', 'Product');
        $grid->add('size', 'Size');
        $grid->add('<img src="/images/products/{{ $img }}" height="25" width="25">', 'Image');
        $grid->add('color', 'Color');
        $grid->add('quantity', 'Qty');
        $grid->add('amount', 'Amount');
        $grid->edit('/backend/orders/edit');
        $grid->link('/backend/orders/edit', "New Order", "TR");
        $grid->orderBy('id', 'asc');
        $grid->paginate(10);
        $title = $this->titleOrders;
        return view('backend/orders', compact('filter','grid', 'title'));
    }
    public function ordersEdit()
    {
        if (Input::get('do_delete') == 1) return "not the first";
        $edit = DataEdit::source(new Order());
        $edit->label('Edit Order');
        $edit->add('users.name','Username', 'text');
        $edit->add('order_date', 'Date','text');
        $edit->add('products.name', 'Product','text');
        $edit->add('size', 'Size','text');
        $edit->add('img','Image', 'image')->move('images/products/')->fit(240, 160)->preview(120,80);
        $edit->add('color', 'Color','text');
        $edit->add('quantity', 'Qty','text');
        $edit->add('amount', 'Amount','text');
        $edit->link('/backend/orders', "Back", "TR");
        $title = $this->titleOrders;
        return view('backend/orders', compact('edit','title'));
    }
}