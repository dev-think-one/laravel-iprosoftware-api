<?php

namespace Angecode\LaravelIproSoft\Enums;

use Spatie\Enum\Enum;

/**
 * @method static self blockout()
 * @method static self provisional()
 * @method static self booking()
 * @method static self cancelled()
 */
class BookingStatus extends Enum
{
    protected static function values(): array
    {
        return [
            'blockout'    => 'Blockout',
            'provisional' => 'Provisional',
            'booking'     => 'Booking',
            'cancelled'   => 'Cancelled',
        ];
    }
}
