<?php

namespace LaravelIproSoftwareApi\Tests;

use IproSoftwareApi\IproSoftwareClient;
use LaravelIproSoftwareApi\IproSoftware;

class IproSoftwareTest extends TestCase
{
    /**
     * @test
     * @throws \IproSoftwareApi\Exceptions\IproSoftwareApiException
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function constructor_do_not_requires_any_params()
    {
        $client = new IproSoftware();

        $this->assertInstanceOf(IproSoftwareClient::class, $client);
    }
}
