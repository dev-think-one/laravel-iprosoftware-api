<?php

namespace Angecode\LaravelIproSoft\Tests;

use Angecode\LaravelIproSoft\IproSoftware;
use Angecode\IproSoftware\IproSoftwareClient;

class IproSoftwareTest extends IproSoftwareTestCase
{
    use \phpmock\phpunit\PHPMock;

    public function test_constructor()
    {
        $time = $this->getFunctionMock('Angecode\\LaravelIproSoft\\', 'config');
        $time->expects($this->atMost(7))->willReturn('');
        $time = $this->getFunctionMock('Angecode\\LaravelIproSoft\\', 'resolve');
        $time->expects($this->once())->willReturn('');

        $client = new IproSoftware();

        $this->assertInstanceOf(IproSoftwareClient::class, $client);
    }
}
