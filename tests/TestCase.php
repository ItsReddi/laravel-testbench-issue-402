<?php

namespace issue\ext\testbench\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * Indicates if the Laravel environment will be loaded.
     * keep this false to prevent loading the .env file from the root of the project
     * Environment variables are loaded from /tests/.env via bootstrap
     */
    protected $loadEnvironmentVariables = false;

    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function defineEnvironment($app)
    {
        // Set up default config, environment variables, are loaded from /tests/.env
        $app['config']->set('cache.default', 'file');
    }

    protected function getPackageProviders($app)
    {
        return [];
    }
}
