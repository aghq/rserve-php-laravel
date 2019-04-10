<?php

namespace AGHQ\RservePHPLaravel;

use Illuminate\Support\Facades\Facade;

class R extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'rserve-php';
    }
}
