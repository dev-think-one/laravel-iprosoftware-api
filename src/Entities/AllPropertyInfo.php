<?php

namespace Angecode\LaravelIproSoft\Entities;

use Angecode\LaravelIproSoft\Entities\PropertyInfoSubData\PropertyAvailability;
use Angecode\LaravelIproSoft\Entities\PropertyInfoSubData\PropertyDetails;
use Angecode\LaravelIproSoft\Entities\PropertyInfoSubData\PropertyImage;
use Illuminate\Support\Collection;

class AllPropertyInfo extends IproEntity
{
    public int $propertyId;

    /** @var null|PropertyDetails */
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
    protected function parsePropertyAvailabilities(array $data): Collection
    {
        return PropertyAvailability::fromList($data);
    }

    /**
     * @codeCoverageIgnore
     * @param array $data
     * @return Collection
     */
    protected function parsePropertyImages(array $data): Collection
    {
        return PropertyImage::fromList($data);
    }

    /**
     * @codeCoverageIgnore
     * @param array $data
     * @return IproEntity
     */
    protected function parsePropertyDetails(array $data): IproEntity
    {
        return PropertyDetails::fromArray($data);
    }
}
