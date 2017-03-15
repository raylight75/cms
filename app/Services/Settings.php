<?php

namespace App\Services;

use App\Models\Currency;
use App\Models\Setting;
use Illuminate\Support\Facades\App;

trait Settings
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
     * Set global variables for all templates.
     * @return mixed
     */
    public function setVars ()
    {
        $data['header'] = Setting::findOrFail(1);
        $data['locale'] = App::getLocale();
        $data['currency'] = Currency::all();
        return $data;
    }

}