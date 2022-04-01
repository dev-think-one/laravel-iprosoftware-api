<?php

namespace Angecode\LaravelIproSoft\Enums;

use Illuminate\Support\Str;
use Spatie\Enum\Enum;

/**
 * @method static self priceFrom()
 * @method static self usePreviousWeekPricing()
 * @method static self noPriceForThisWeek()
 * @method static self hideColumnFromPricingGroup()
 * @method static self firstSpecialOffer()
 * @method static self secondSpecialOffer()
 * @method static self thirdSpecialOffer()
 */
class CustomRateAmountValue extends Enum
{
    protected static function values(): array
    {
        return [
            'priceFrom'                  => '1',
            'usePreviousWeekPricing'     => '0',
            'noPriceForThisWeek'         => '-1',
            'hideColumnFromPricingGroup' => '-2',
            'firstSpecialOffer'          => '*',
            'secondSpecialOffer'         => '**',
            'thirdSpecialOffer'          => '***',
        ];
    }

    protected static function indexes(): array
    {
        return [
            'priceFrom'                  => 1,
            'usePreviousWeekPricing'     => 0,
            'noPriceForThisWeek'         => -1,
            'hideColumnFromPricingGroup' => -2,
            'firstSpecialOffer'          => -3,
            'secondSpecialOffer'         => -4,
            'thirdSpecialOffer'          => -5,
        ];
    }

    public static function make($value): static
    {
        $value = trim($value);
        if (is_numeric($value) && $value > 0) {
            $value = '1';
        } elseif (is_numeric($value)) {
            $key = array_search($value, self::indexes());
            if ($key) {
                return parent::from($key);
            }
        } elseif (!is_numeric($value) && Str::endsWith($value, ['*', '**', '***'])) {
            preg_match('/^[^\*]+(?<offer>\**)$/', $value, $matches);
            $value = $matches['offer'];
        }

        return parent::from($value);
    }
}
