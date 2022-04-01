<?php

namespace Angecode\LaravelIproSoft\Enums;

use Spatie\Enum\Enum;

/**
 * @method static self none()
 * @method static self insurance()
 * @method static self breakagesDeposit()
 */
class InsuranceBreakage extends Enum
{
    protected static function values(): array
    {
        return [
            'none'             => 'None',
            'insurance'        => 'Insurance',
            'breakagesDeposit' => 'BreakagesDeposit',
        ];
    }

    protected static function indexes(): array
    {
        return [
            'none'             => 0,
            'insurance'        => 1,
            'breakagesDeposit' => 2,
        ];
    }

    public static function make($value): static
    {
        $value = trim($value);
        if (is_numeric($value)) {
            $key = array_search($value, self::indexes());
            if ($key) {
                return parent::from($key);
            }
        }

        return parent::from($value);
    }
}
