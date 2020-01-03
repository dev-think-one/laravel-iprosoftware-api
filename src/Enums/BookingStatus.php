<?php

namespace Angecode\LaravelIproSoft\Enums;

use Spatie\Enum\Enum;

class BookingStatus extends Enum
{
    public static function blockout(): BookingStatus
    {
        return new class() extends BookingStatus {
            public function getValue(): string
            {
                return 'Blockout';
            }

            public function getIndex(): int
            {
                return 1;
            }
        };
    }

    public static function provisional(): BookingStatus
    {
        return new class() extends BookingStatus {
            public function getValue(): string
            {
                return 'Provisional';
            }

            public function getIndex(): int
            {
                return 2;
            }
        };
    }

    public static function booking(): BookingStatus
    {
        return new class() extends BookingStatus {
            public function getValue(): string
            {
                return 'Booking';
            }

            public function getIndex(): int
            {
                return 3;
            }
        };
    }

    public static function cancelled(): BookingStatus
    {
        return new class() extends BookingStatus {
            public function getValue(): string
            {
                return 'Cancelled';
            }

            public function getIndex(): int
            {
                return 4;
            }
        };
    }
}
