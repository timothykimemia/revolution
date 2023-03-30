<?php

namespace Revolution\Network\Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Revolution\Network\RevolutionNetworkServiceProvider;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app)
    {
        return [
            RevolutionNetworkServiceProvider::class,
        ];
    }
}
