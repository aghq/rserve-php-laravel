<?php

namespace AGHQ\RservePHPLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class R extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'rserve-php';
    }
}
