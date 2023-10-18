<?php

namespace Dgo\:uc:package\Tests;

use Orchestra\Testbench\TestCase as Testbench;

abstract class TestCase extends Testbench
{
        public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }

    protected function getPackageProviders($app): array
    {
        return ['Dgo\:uc:package\:uc:packageServiceProvider'];
    }
}
