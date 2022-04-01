<?php

namespace Angecode\LaravelIproSoft\Enums;

use Spatie\Enum\Enum;

/**
 * @method static self oneNightWeekend()
 * @method static self oneNightMidweek()
 * @method static self oneNightMidweekCV()
 * @method static self twoNightWeekend()
 * @method static self threeNightWeekend()
 * @method static self week()
 * @method static self midweek()
 * @method static self twoNightMidweek()
 * @method static self fiveNights()
 * @method static self twoNightWeekendWV()
 * @method static self threeNightWeekendWV()
 * @method static self weekWV()
 * @method static self midweekWV()
 */
class CustomRateAmountType extends Enum
{
    protected static function values(): array
    {
        return [
            'oneNightWeekend'     => '1_night_weekend',
            'oneNightMidweek'     => '1_night_midweek',
            'oneNightMidweekCV'   => '1_night_midweek_CV',
            'twoNightWeekend'     => '2_night_weekend',
            'threeNightWeekend'   => '3_night_weekend',
            'week'                => 'week',
            'midweek'             => 'midweek',
            'twoNightMidweek'     => '2_night_midweek',
            'fiveNights'          => '5_nights',
            'twoNightWeekendWV'   => '2_night_weekend_WV',
            'threeNightWeekendWV' => '3_night_weekend_WV',
            'weekWV'              => 'week_WV',
            'midweekWV'           => 'midweek_WV',
        ];
    }

    protected static function indexes(): array
    {
        return [
            'oneNightWeekend'     => 10,
            'oneNightMidweek'     => 15,
            'oneNightMidweekCV'   => 20,
            'twoNightWeekend'     => 50,
            'threeNightWeekend'   => 60,
            'week'                => 70,
            'midweek'             => 80,
            'twoNightMidweek'     => 85,
            'fiveNights'          => 90,
            'twoNightWeekendWV'   => 100,
            'threeNightWeekendWV' => 110,
            'weekWV'              => 120,
            'midweekWV'           => 130,
        ];
    }

    public static function make($value): static
    {
        $value = trim($value);
        if (is_numeric($value) && $value > 0) {
            $key = array_search($value, self::indexes());
            if ($key) {
                return parent::from($key);
            }
        }

        return parent::from($value);
    }
}
