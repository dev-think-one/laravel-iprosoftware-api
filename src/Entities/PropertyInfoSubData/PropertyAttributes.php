<?php

namespace Angecode\LaravelIproSoft\Entities\PropertyInfoSubData;

use Angecode\LaravelIproSoft\Entities\IproEntity;

class PropertyAttributes extends IproEntity
{
    /** @var null|string[] */
    public $locations;

    /** @var null|string[] */
    public $suitableFor;

    /** @var null|string[] */
    public $theme;

    /** @var null|string[] */
    public $bedrooms;

    /** @var null|string[] */
    public $sleeps;

    /** @var null|string[] */
    public $features;
}
