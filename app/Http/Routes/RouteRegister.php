<?php

namespace App\Http\Routes;

use App\Http\Composers\GlobalComposer;
use Route;

class RouteRegister
{
    /**
     *
     * RouteRegister class building dinamic SEO routes.
     *
     * @package ecommerce-cms
     * @category Base Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    protected $global;

    /**
     * RouteRegister constructor.
     */
    public function __construct(GlobalComposer $global)
    {
        $this->global = $global;
    }

    /**
     * Build dinamic SEO routes.
     * @return routes
     */
    public function registerRoutes()
    {
        $parent_id = 0;
        $categories = $this->global->getMenuData($parent_id);
        foreach ($categories as $row) {
            $parent_cat = $row['name'];
            foreach ($row['sub_cat'] as $sub_cat) {
                $slug = $sub_cat['name'];
                Route::get('' . $parent_cat . '/{slug}/{id}', 'BaseController@filter');
                Route::get('' . $slug . '/{slug}/{id}', 'BaseController@product');
            }
        }
    }
}

