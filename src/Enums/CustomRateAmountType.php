<?php

namespace Angecode\LaravelIproSoft\Enums;

use Spatie\Enum\Enum;

class CustomRateAmountType extends Enum
{
    public static function oneNightWeekend(): CustomRateAmountType
    {
        return new class() extends CustomRateAmountType {
            public function getValue(): string
            {
                return '1_night_weekend';
            }

            public function getIndex(): int
            {
                return 10;
            }
        };
    }

    public static function oneNightMidweek(): CustomRateAmountType
    {
        return new class() extends CustomRateAmountType {
            public function getValue(): string
            {
                return '1_night_midweek';
            }

            public function getIndex(): int
            {
                return 15;
            }
        };
    }

    public static function oneNightMidweekCV(): CustomRateAmountType
    {
        return new class() extends CustomRateAmountType {
            public function getValue(): string
            {
                return '1_night_midweek_CV';
            }

            public function getIndex(): int
            {
                return 20;
            }
        };
    }

    /**
     * Friday to Sunday
     * @return CustomRateAmountType
     */
    public static function twoNightWeekend(): CustomRateAmountType
    {
        return new class() extends CustomRateAmountType {
            public function getValue(): string
            {
                return '2_night_weekend';
            }

            public function getIndex(): int
            {
                return 50;
            }
        };
    }

    /**
     * Friday to Monday
     * @return CustomRateAmountType
     */
    public static function threeNightWeekend(): CustomRateAmountType
    {
        return new class() extends CustomRateAmountType {
            public function getValue(): string
            {
                return '3_night_weekend';
            }

            public function getIndex(): int
            {
                return 60;
            }
        };
    }

    /**
     * Friday to Friday (7 nights)
     * @return CustomRateAmountType
     */
    public static function week(): CustomRateAmountType
    {
        return new class() extends CustomRateAmountType {
            public function getValue(): string
            {
                return 'week';
            }

            public function getIndex(): int
            {
                return 70;
            }
        };
    }

    /**
     * Monday to Friday (4 nights)
     * @return CustomRateAmountType
     */
    public static function midweek(): CustomRateAmountType
    {
        return new class() extends CustomRateAmountType {
            public function getValue(): string
            {
                return 'midweek';
            }

            public function getIndex(): int
            {
                return 80;
            }
        };
    }

    public static function twoNightMidweek(): CustomRateAmountType
    {
        return new class() extends CustomRateAmountType {
            public function getValue(): string
            {
                return '2_night_midweek';
            }

            public function getIndex(): int
            {
                return 85;
            }
        };
    }

    /**
     * Friday to Wednesday
     * @return CustomRateAmountType
     */
    public static function fiveNights(): CustomRateAmountType
    {
        return new class() extends CustomRateAmountType {
            public function getValue(): string
            {
                return '5 nights';
            }

            public function getIndex(): int
            {
                return 90;
            }
        };
    }

    public static function twoNightWeekendWV(): CustomRateAmountType
    {
        return new class() extends CustomRateAmountType {
            public function getValue(): string
            {
                return '2_night_weekend_WV';
            }

            public function getIndex(): int
            {
                return 100;
            }
        };
    }

    public static function threeNightWeekendWV(): CustomRateAmountType
    {
        return new class() extends CustomRateAmountType {
            public function getValue(): string
            {
                return '3_night_weekend_WV';
            }

            public function getIndex(): int
            {
                return 110;
            }
        };
    }

    public static function weekWV(): CustomRateAmountType
    {
        return new class() extends CustomRateAmountType {
            public function getValue(): string
            {
                return 'week_WV';
            }

            public function getIndex(): int
            {
                return 120;
            }
        };
    }

    public static function midweekWV(): CustomRateAmountType
    {
        return new class() extends CustomRateAmountType {
            public function getValue(): string
            {
                return 'midweek_WV';
            }

            public function getIndex(): int
            {
                return 130;
            }
        };
    }
}
