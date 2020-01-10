<?php

namespace Angecode\LaravelIproSoft\Tests\Entities;

use Angecode\LaravelIproSoft\Enums\CustomRateAmountValue;
use Angecode\LaravelIproSoft\Tests\IproSoftwareTestCase;

class CustomRateAmountValueTest extends IproSoftwareTestCase
{
    /**
     * @test
     */
    public function can_return_index_and_text(): void
    {
        $enum = CustomRateAmountValue::usePreviousWeekPricing();

        $this->assertEquals('0', (string)$enum);
        $this->assertEquals(1, $enum->getIndex());
    }
}
