<?php

namespace sattaribm\MenusManager\Tests;

use sattaribm\MenusManager\Providers\PackageServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            PackageServiceProvider::class
        ];
    }
}
