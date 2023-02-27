<?php

namespace Angecode\LaravelIproSoft\Tests;

class IproSoftwareTestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            \Angecode\LaravelIproSoft\IproSoftwareProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);

        // $app['config']->set('reviewsio.some_key', 'some_value');
    }
}
