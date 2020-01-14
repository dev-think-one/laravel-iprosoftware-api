<?php

namespace Angecode\LaravelIproSoft\Entities\PropertyInfoSubData;

use Angecode\LaravelIproSoft\Entities\IproEntity;

class PropertyAttributes extends IproEntity
{
    /** @var null|string[] */
    public ?array $locations = [];

    /** @var null|string[] */
    public ?array $suitableFor = [];

    /** @var null|string[] */
    public ?array $theme = [];

    /** @var null|string[] */
    public ?array $bedrooms;

    /** @var null|string[] */
    public ?array $sleeps = [];

    /** @var null|string[] */
    public ?array $features = [];

    /** @var null|int[] */
    public ?array $maxSleeps = [];
}
