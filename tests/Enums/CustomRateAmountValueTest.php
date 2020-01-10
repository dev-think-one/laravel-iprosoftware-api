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
        $this->assertEquals(0, $enum->getIndex());
    }

    /**
     * @test
     */
    public function make_return_1_if_pass_positive_value(): void
    {
        $enum = CustomRateAmountValue::make(123456);

        $this->assertEquals('1', (string)$enum);
        $this->assertEquals(1, $enum->getIndex());
    }

    /**
     * @test
     */
    public function make_return_special_offer(): void
    {
        $enum = CustomRateAmountValue::make('123456 *');

        $this->assertEquals('*', (string)$enum);
        $this->assertEquals(CustomRateAmountValue::firstSpecialOffer()->getIndex(), $enum->getIndex());


        $enum = CustomRateAmountValue::make('123456 **');

        $this->assertEquals('**', (string)$enum);
        $this->assertEquals(CustomRateAmountValue::secondSpecialOffer()->getIndex(), $enum->getIndex());


        $enum = CustomRateAmountValue::make('123456 ***');

        $this->assertEquals('***', (string)$enum);
        $this->assertEquals(CustomRateAmountValue::thirdSpecialOffer()->getIndex(), $enum->getIndex());
    }


}
