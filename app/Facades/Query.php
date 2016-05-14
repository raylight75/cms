<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Query extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Query';
    }
}