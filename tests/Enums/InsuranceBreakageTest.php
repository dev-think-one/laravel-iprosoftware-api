<?php

namespace Angecode\LaravelIproSoft\Tests\Entities;

use Angecode\LaravelIproSoft\Enums\InsuranceBreakage;
use Angecode\LaravelIproSoft\Tests\IproSoftwareTestCase;

class InsuranceBreakageTest extends IproSoftwareTestCase
{
    /**
     * @test
     */
    public function can_return_index_and_text(): void
    {
        $enum = InsuranceBreakage::breakagesDeposit();

        $this->assertEquals('BreakagesDeposit', (string)$enum);
        $this->assertEquals(2, $enum->getIndex());
    }
}
