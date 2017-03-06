<?php

namespace App\Http\Routes;

use App\Services\ShareService;
use Route;

class Register
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

    protected $share;

    /**
     * RouteRegister constructor.
     */
    public function __construct(ShareService $share)
    {
        $this->share = $share;
    }

    /**
     * Build dinamic SEO routes.
     * @return routes
     */
    public function seoRoutes()
    {
        $categories = $this->share->getMenuData($this->share->getParent());
        foreach ($categories as $row) {
            $parent_cat = $row['name'];
            foreach ($row['sub_cat'] as $sub_cat) {
                $slug = $sub_cat['name'];
                Route::get('' . $parent_cat . '/{slug}/{id}', 'MainController@filter');
                Route::get('' . $slug . '/{slug}/{id}', 'MainController@product');
            }
        }
    }
}

