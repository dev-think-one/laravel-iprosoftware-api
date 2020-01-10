<?php

namespace Angecode\LaravelIproSoft\Entities;

use Angecode\LaravelIproSoft\Entities\PropertyInfoSubData\PropertyAvailability;
use Angecode\LaravelIproSoft\Entities\PropertyInfoSubData\PropertyDetails;
use Angecode\LaravelIproSoft\Entities\PropertyInfoSubData\PropertyImage;
use Illuminate\Support\Collection;

class AllPropertyInfo extends IproEntity
{
    public int $propertyId;

    public ?PropertyDetails $propertyDetails;

    public ?array $propertyRates;

    public ?Collection $propertyImages;

    public ?Collection $propertyAvailabilities;

    public ?array $propertyHolidayExtras;

    public ?array $propertyDiscounts;

    public ?array $propertyDistances;

    public ?array $propertyRooms;

    /**
     * @codeCoverageIgnore
     * @param array $data
     * @return Collection
     */
    public function parsePropertyAvailabilities(array $data): Collection
    {
        return PropertyAvailability::fromList($data);
    }

    /**
     * @codeCoverageIgnore
     * @param array $data
     * @return Collection
     */
    public function parsePropertyImages(array $data): Collection
    {
        return PropertyImage::fromList($data);
    }

    /**
     * @codeCoverageIgnore
     * @param array $data
     * @return IproEntity
     */
    public function parsePropertyDetails(array $data)
    {
        return PropertyDetails::fromArray($data);
    }
}
