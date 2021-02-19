<?php

namespace Baotd86\LarPackageSkeleton;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Baotd86\LarPackageSkeleton\Skeleton\SkeletonClass
 */
class LarPackageSkeletonFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lar-package-skeleton';
    }
}
