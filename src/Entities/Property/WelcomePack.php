<?php

namespace Angecode\LaravelIproSoft\Entities\Property;

use Angecode\LaravelIproSoft\Entities\IproEntity;

class WelcomePack extends IproEntity
{

    public ?string $wifiCode;

    public ?string $keySafeCode;

    public ?string $ownersCode;

    public ?string $officeCode;

    public ?string $brochurePage;

    public ?string $checkInFrom;

    public ?string $checkOutTime;

    public ?string $directions;

    public ?string $rentalNotes;

    public ?string $internalRentalNotes;

}
