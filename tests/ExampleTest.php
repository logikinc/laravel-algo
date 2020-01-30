<?php

namespace Logikinc\LaravelAlgo\Tests;

use Orchestra\Testbench\TestCase;
use Logikinc\LaravelAlgo\LaravelAlgoServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelAlgoServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
