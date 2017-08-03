<?php

namespace App\Helpers;

use App\Models\Currency;

class Helper
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
     * Helper Currency Class
     *
     * @package ecommerce-cms
     * @category Helper Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    /**
     * @param $input
     * @return mixed
     */
    public static function price($input)
    {
        $var = session('currency');
        if (isset($var)) {
            $currency = Currency::where('name', '=', $var)->first();
            $rate = $currency->rate;
        } else {
            $rate = 1;
        }
        $total = (double)$input * (double)$rate;
        return number_format((double)$total, 2);
    }

    /**
     * @param $path
     * @param string $active
     * @return string
     */
    public static function setActive($path, $active = 'active')
    {
        return request()->segment(2) === $path ? $active : '';
    }
}