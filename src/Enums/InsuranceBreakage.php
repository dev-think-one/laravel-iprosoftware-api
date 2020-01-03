<?php

namespace Angecode\LaravelIproSoft\Enums;

use Spatie\Enum\Enum;

class InsuranceBreakage extends Enum
{
    public static function none(): InsuranceBreakage
    {
        return new class() extends InsuranceBreakage {
            public function getValue(): string
            {
                return 'None';
            }

            public function getIndex(): int
            {
                return 0;
            }
        };
    }

    public static function insurance(): InsuranceBreakage
    {
        return new class() extends InsuranceBreakage {
            public function getValue(): string
            {
                return 'Insurance';
            }

            public function getIndex(): int
            {
                return 1;
            }
        };
    }

    public static function breakagesDeposit(): InsuranceBreakage
    {
        return new class() extends InsuranceBreakage {
            public function getValue(): string
            {
                return 'BreakagesDeposit';
            }

            public function getIndex(): int
            {
                return 2;
            }
        };
    }
}
