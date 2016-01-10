<?php
/**
 * Created by PhpStorm.
 * User: Raylight75
 * Date: 10.1.2016 ã.
 * Time: 15:11 ÷.
 */

namespace App\Facades;
use Illuminate\Support\Facades\Facade;


class RouteRegister extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'RouteRegister';
    }
}