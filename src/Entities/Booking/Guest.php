<?php

namespace Angecode\LaravelIproSoft\Entities\Booking;

use Angecode\LaravelIproSoft\Entities\IproEntity;

/**
 * @deprecated
 */
class Guest extends IproEntity
{
    public ?string $name;

    public ?string $age;

    public ?string $passport;

    public ?string $email;

    public ?string $mobile;
}
