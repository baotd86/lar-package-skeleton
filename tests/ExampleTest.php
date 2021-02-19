<?php

namespace Baotd86\LarPackageSkeleton\Tests;

use Orchestra\Testbench\TestCase;
use Baotd86\LarPackageSkeleton\LarPackageSkeletonServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LarPackageSkeletonServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
