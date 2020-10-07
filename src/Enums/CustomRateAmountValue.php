<?php

namespace Angecode\LaravelIproSoft\Enums;

use Illuminate\Support\Str;
use Spatie\Enum\Enum;
use Spatie\Enum\Enumerable;

class CustomRateAmountValue extends Enum
{
    public static function make($value): Enumerable
    {
        $value = trim($value);
        if (is_numeric($value) && $value > 0) {
            $value = '1';
        } elseif (! is_numeric($value) && Str::endsWith($value, ['*', '**', '***'])) {
            preg_match('/^[^\*]+(?<offer>\**)$/', $value, $matches);
            $value = $matches['offer'];
        }

        return parent::make($value);
    }

    public static function priceFrom(): CustomRateAmountValue
    {
        return new class() extends CustomRateAmountValue {
            public function getValue(): string
            {
                return '1';
            }

            public function getIndex(): int
            {
                return 1;
            }
        };
    }

    public static function usePreviousWeekPricing(): CustomRateAmountValue
    {
        return new class() extends CustomRateAmountValue {
            public function getValue(): string
            {
                return '0';
            }

            public function getIndex(): int
            {
                return 0;
            }
        };
    }

    public static function noPriceForThisWeek(): CustomRateAmountValue
    {
        return new class() extends CustomRateAmountValue {
            public function getValue(): string
            {
                return '-1';
            }

            public function getIndex(): int
            {
                return -1;
            }
        };
    }

    public static function hideColumnFromPricingGroup(): CustomRateAmountValue
    {
        return new class() extends CustomRateAmountValue {
            public function getValue(): string
            {
                return '-2';
            }

            public function getIndex(): int
            {
                return -2;
            }
        };
    }

    public static function firstSpecialOffer(): CustomRateAmountValue
    {
        return new class() extends CustomRateAmountValue {
            public function getValue(): string
            {
                return '*';
            }

            public function getIndex(): int
            {
                return -3;
            }
        };
    }

    public static function secondSpecialOffer(): CustomRateAmountValue
    {
        return new class() extends CustomRateAmountValue {
            public function getValue(): string
            {
                return '**';
            }

            public function getIndex(): int
            {
                return -4;
            }
        };
    }

    public static function thirdSpecialOffer(): CustomRateAmountValue
    {
        return new class() extends CustomRateAmountValue {
            public function getValue(): string
            {
                return '***';
            }

            public function getIndex(): int
            {
                return -5;
            }
        };
    }
}
