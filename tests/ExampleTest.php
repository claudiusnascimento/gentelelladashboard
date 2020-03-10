<?php

namespace ClaudiusNascimento\GentelellaDashboard\Tests;

use Orchestra\Testbench\TestCase;
use ClaudiusNascimento\GentelellaDashboard\GentelellaDashboardServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [GentelellaDashboardServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
