<?php

namespace Logikinc\LaravelAlgo;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Logikinc\LaravelAlgo\Skeleton\SkeletonClass
 */
class LaravelAlgoFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-algo';
    }
}
