<?php

namespace App\Http\Composers;

use App\Models\Product;
use View;


class GlobalComposer
{
    /**
     * @param View $view
     */
    public function compose()
    {
        //$data = Product::prepareGlobalData();
        //View::share($data);
    }
}