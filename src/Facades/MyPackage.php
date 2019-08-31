<?php

namespace Labcoder2019\MyPackage\Facades;

use Illuminate\Support\Facades\Facade;

class MyPackage extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'mypackage';
    }
}
