<?php namespace App\Http\Controllers;

use App\Product;
use App\Brands;
use App\Size;
use Validator, Input, Redirect;
use Zofe\Rapyd\Facades\DataGrid;
use Zofe\Rapyd\Facades\DataEdit;

class ArticlesController extends Controller
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
     * Article Class
     *
     * @package ecommerce-cms
     * @category Base Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        $grid = DataGrid::source(Product::with('brands','size'));
        $grid->attributes(array("class" => "table table-striped"));
        $grid->add('id', 'ID', true)->style("width:100px");
        $grid->add('slug', 'Slug');
        $grid->add('name', 'Name');
        //$grid->add('description', 'Description');
        $grid->add('brands.brand','Brand');
        $grid->add('{{ implode(", ", $size->lists("size_id")->all()) }}','Sizes');
        $grid->add('<img src="/images/products/{{ $a_img }}" height="25" width="20">', 'Front');
        //$grid->add('<img src="/images/products/{{ $b_img }}"height="25" width="20">', 'Side');
        //$grid->add('<img src="/images/products/{{ $c_img }}"height="25" width="20">', 'Back');
        $grid->add('quantity', 'Qty');
        $grid->add('price', 'Price');
        $grid->edit('/articles/edit');
        $grid->link('/articles/edit', "New Articles", "TR");
        $grid->orderBy('id', 'asc');
        $grid->paginate(10);
        return view('grid', compact('grid'));
    }

    public function anyEdit()
    {
        if (Input::get('do_delete') == 1) return "not the first";
        $edit = DataEdit::source(new Product());
        $edit->label('Edit Articles');
        $edit->add('slug', 'Slug', 'text')->rule('required|min:3');
        $edit->add('name', 'Name', 'text')->rule('required|min:3');
        $edit->add('description','Description', 'redactor');
        $edit->add('brand_id','Brand','select')->options(Brands::lists("brand","brand_id")->all());
        $edit->add('productsize.size_id','Size','tags');
        $edit->add('a_img','Front', 'image')->move('images/products/')->fit(240, 160)->preview(120,80);
        //$edit->add('b_img','Side', 'image')->move('images/products/')->fit(240, 160)->preview(120,80);
        //$edit->add('c_img','Back', 'image')->move('images/products/')->fit(240, 160)->preview(120,80);
        $edit->add('quantity', 'Qty', 'text');
        $edit->add('price', 'Price', 'text');
        return view('edit_cryd', compact('edit'));
    }
}