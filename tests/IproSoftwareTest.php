<?php

namespace Angecode\LaravelIproSoft\Tests;

use Angecode\IproSoftware\IproSoftwareClient;
use Angecode\LaravelIproSoft\IproSoftware;

class IproSoftwareTest extends IproSoftwareTestCase
{
    /**
     * @test
     * @throws \Angecode\IproSoftware\Exceptions\IproSoftwareApiException
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function constructor()
    {
        parent::setUp();

        $client = new IproSoftware();

        $this->assertInstanceOf(IproSoftwareClient::class, $client);
    }
}
