<?php

namespace Pverhaert\Dump;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pverhaert\Dump\Skeleton\SkeletonClass
 */
class DumpFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dump';
    }
}
