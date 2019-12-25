<?php

namespace Angecode\LaravelIproSoft\Tests;

use Angecode\IproSoftware\IproSoftwareClient;
use Angecode\LaravelIproSoft\IproSoftware;

class IproSoftwareTest extends IproSoftwareTestCase
{
    use \phpmock\phpunit\PHPMock;

    /**
     * @test
     * @throws \Angecode\IproSoftware\Exceptions\IproSoftwareApiException
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function constructor()
    {
        $time = $this->getFunctionMock('Angecode\\LaravelIproSoft\\', 'config');
        $time->expects($this->atMost(8))->willReturn('');
        $time = $this->getFunctionMock('Angecode\\LaravelIproSoft\\', 'resolve');
        $time->expects($this->once())->willReturn('');

        $client = new IproSoftware();

        $this->assertInstanceOf(IproSoftwareClient::class, $client);
    }
}
