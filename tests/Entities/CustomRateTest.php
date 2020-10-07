<?php

namespace Angecode\LaravelIproSoft\Tests\Entities;

use Angecode\LaravelIproSoft\Entities\Property\CustomRate;
use Angecode\LaravelIproSoft\Entities\Property\CustomRateAmount;
use Angecode\LaravelIproSoft\Entities\Property\CustomRateAmountGroup;
use Angecode\LaravelIproSoft\Enums\CustomRateAmountType;
use Angecode\LaravelIproSoft\Enums\CustomRateAmountValue;
use Angecode\LaravelIproSoft\Tests\IproSoftwareTestCase;

class CustomRateTest extends IproSoftwareTestCase
{
    /**
     * @test
     */
    public function instance_from_array_of_amounts(): void
    {
        /** @var CustomRate $customRate */
        $customRate = CustomRate::fromArray([
            'Id' => 76995,
            'Month' => '2020-01',
            'Notes' => null,
            'GroupSize' => [],
            'WeekPriceList' => [
                [
                    'WeekCommencing' => '2020-01-01',
                    'Amount' => [
                        '50' => '123 **',
                        '60' => 123456,
                        '70' => -1,
                        '80' => '-2',
                        '9999' => 'not-exists',
                    ],
                ],
                [
                    'WeekCommencing' => '2020-01-07',
                    'Amount' => [
                        '50' => 5412,
                        '60' => '123 **',
                        '70' => -1,
                        '80' => '-2',
                    ],
                ],
            ],
        ]);
        $this->assertInstanceOf(CustomRate::class, $customRate);

        /** @var CustomRateAmountGroup $amountGroup */
        $amountGroup = $customRate->weekPriceList->first();
        $this->assertInstanceOf(CustomRateAmountGroup::class, $amountGroup);
        $this->assertCount(4, $amountGroup->amount);

        /** @var CustomRateAmount $amount */
        $amount = $amountGroup->amount->first();
        $this->assertInstanceOf(CustomRateAmount::class, $amount);

        $this->assertTrue($amount->type->isEqual(CustomRateAmountType::twoNightWeekend()));
        $this->assertTrue($amount->valueType->isEqual(CustomRateAmountValue::secondSpecialOffer()));
        $this->assertEquals((float) 123, $amount->value);
    }
}
