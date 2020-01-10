<?php


namespace Angecode\LaravelIproSoft\Entities\Property;

use Angecode\LaravelIproSoft\Entities\IproEntity;

class CustomRateAmount extends IproEntity
{
    public string $weekCommencing;

    public array $amount;
}
