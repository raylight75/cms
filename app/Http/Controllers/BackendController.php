<?php

namespace App\Http\Controllers;

use App\Repositories\CrudRepository;
use App\Repositories\OrderRepository;
use Gate;

class BackendController extends Controller
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
     * Backend Class.
     *
     * @package ecommerce-cms
     * @category Base Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    /**
     * Create a name for table.
     */

    protected $crud;

    protected $order;

    /**
     * @param CrudRepository $CrudRepo
     */
    public function __construct(CrudRepository $CrudRepo)
    {
        $this->crud = $CrudRepo;
    }

    /**
     * Show the home page to the user.
     *
     * @return Response
     */

    public function dashboard()
    {
        if (auth()->check() && auth()->user()->hasRole('admin')) {
            $title = 'Admin Dashboard';
        } else {
            $title = 'User Dashboard';
        }
        return view('backend/dashboard', compact('title'));
    }

    /**
     * Show main categories
     * @return View
     */
    public function brand()
    {
        $filter = $this->crud->brandsFilter();
        $grid = $this->crud->brandsGrid();
        $title = $this->crud->getBrandTable();
        return view('backend/content', compact('filter', 'grid', 'title'));
    }

    /**
     * Edit Main Category
     * @return string|View
     */
    public function brandsEdit()
    {
        if (request()->get('do_delete') == 1) return "not the first";
        $edit = $this->crud->brandsEdit();
        $title = $this->crud->getBrandTable();
        return view('backend/content', compact('edit', 'title'));
    }

    /**
     * Show main categories
     * @return View
     */
    public function category()
    {
        $filter = $this->crud->catFilter();
        $grid = $this->crud->catGrid();
        $title = $this->crud->getCatTable();
        return view('backend/content', compact('filter', 'grid', 'title'));
    }

    /**
     * Edit Main Category
     * @return string|View
     */
    public function categoryEdit()
    {
        if (request()->get('do_delete') == 1) return "not the first";
        $edit = $this->crud->catEdit();
        $title = $this->crud->getCatTable();
        return view('backend/content', compact('edit', 'title'));
    }



    /**
     * Show products
     * @return View
     */
    public function products()
    {
        $filter = $this->crud->productsFilter();
        $grid = $this->crud->productsGrid();
        $title = $this->crud->getProductTable();
        return view('backend/content', compact('filter', 'grid', 'title'));
    }

    /**
     * Edit Products
     * @return string|View
     */
    public function productsEdit()
    {
        if (request()->get('do_delete') == 1) return "not the first";
        $edit = $this->crud->productsEdit();
        $title = $this->crud->getProductTable();
        return view('backend/content', compact('edit', 'title'));
    }

    /**
     * Show User profile
     * @return View
     */
    public function profile()
    {
        $grid = $this->crud->profileGrid();
        $title = auth()->user()->name;
        return view('backend/content', compact('grid', 'title'));
    }

    /**
     * Edit User Profile
     * @return View
     */
    public function profileEdit()
    {
        $edit = $this->crud->profileEdit();
        $title = auth()->user()->name;
        return view('backend/content', compact('edit', 'title'));
    }

    /**
     * Show all orders to admins
     * @return View
     */
    public function orders()
    {
        $filter = $this->crud->ordersFilter();
        $grid = $this->crud->ordersGrid();
        $title = $this->crud->getOrderTable();
        return view('backend/content', compact('filter', 'grid', 'title'));
    }

    /**
     * Edit Orders
     * @return string|View
     */
    public function ordersEdit()
    {
        if (request()->get('do_delete') == 1) return "not the first";
        $edit = $this->crud->ordersEdit();
        $title = $this->crud->getOrderTable();
        return view('backend/content', compact('edit', 'title'));
    }

    /**
     * Show customer orders
     * @return View
     */
    public function userOrders()
    {
        $grid = $this->crud->UserOrdersGrid();
        $title = $this->crud->getOrderTable();
        return view('backend/content', compact('grid', 'title'));
    }

    /**
     * Edit customer orders
     * @return View
     */
    public function userOrdersEdit()
    {
        $order = app(OrderRepository::class)->getUserOrder();
        //$this->authorize('view-resource', $order);
        //authorize via AuthorizesRequests trait.
        if (Gate::denies('view-resource', $order)) {
            return redirect('backend/profile')
                ->withErrors('Your are not autorized to view resources');
        }
        $edit = $this->crud->UsersOrdersEdit();
        $title = $this->crud->getOrderTable();
        return view('backend/content', compact('edit', 'title'));
    }
}