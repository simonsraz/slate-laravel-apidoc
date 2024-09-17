<?php

namespace Simonsraz\OwnLaravelPackageTemplate\Facades;

use Illuminate\Support\Facades\Facade;

class OwnLaravelPackageTemplate extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'own-laravel-package-template';
    }
}
