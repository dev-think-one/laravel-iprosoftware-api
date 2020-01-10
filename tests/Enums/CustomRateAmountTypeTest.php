<?php

namespace Angecode\LaravelIproSoft\Tests\Entities;

use Angecode\LaravelIproSoft\Enums\CustomRateAmountType;
use Angecode\LaravelIproSoft\Tests\IproSoftwareTestCase;

class CustomRateAmountTypeTest extends IproSoftwareTestCase
{
    /**
     * @test
     */
    public function can_return_index_and_text(): void
    {
        $enum = CustomRateAmountType::week();

        $this->assertEquals('week', (string)$enum);
        $this->assertEquals(70, $enum->getIndex());
    }
}
