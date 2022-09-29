<?php

namespace Angecode\LaravelIproSoft\Entities\Booking;

use Angecode\LaravelIproSoft\Entities\IproEntity;

/**
 * @deprecated
 */
class HolidayExtrasOrdered extends IproEntity
{
    public ?string $name;

    public ?int $qty;

    public ?float $price;

    public ?float $extraNetPrice;

    public ?float $payableToOwner;
}
