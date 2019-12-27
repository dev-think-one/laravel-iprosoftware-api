<?php


namespace Angecode\LaravelIproSoft\Entities;

use Angecode\LaravelIproSoft\Entities\PropertyInfoSubData\PropertyAvailability;
use Angecode\LaravelIproSoft\Entities\PropertyInfoSubData\PropertyDetails;
use Angecode\LaravelIproSoft\Entities\PropertyInfoSubData\PropertyImage;
use phpDocumentor\Reflection\Types\Collection;

class AllPropertyInfo extends IproEntity
{
    /** @var int */
    public $propertyId;

    /** @var null|PropertyDetails */
    public $propertyDetails;

    /** @var null|array */
    public $propertyRates;

    /** @var null|Collection */
    public $propertyImages;

    /** @var null|Collection */
    public $propertyAvailabilities;

    /** @var null|array */
    public $propertyHolidayExtras;

    /** @var null|array */
    public $propertyDiscounts;

    /** @var null|array */
    public $propertyDistances;

    /** @var null|array */
    public $propertyRooms;

    /**
     * @codeCoverageIgnore
     * @param array $data
     * @return Collection
     */
    public function parsePropertyAvailabilities(array $data): Collection
    {
        $availabilities = [];
        foreach ($data as $itemData) {
            $availabilities[] = PropertyAvailability::fromArray($itemData);
        }

        return collect($availabilities);
    }

    /**
     * @codeCoverageIgnore
     * @param array $data
     * @return Collection
     */
    public function parsePropertyImages(array $data): Collection
    {
        $images = [];
        foreach ($data as $imageData) {
            $images[] = PropertyImage::fromArray($imageData);
        }

        return collect($images);
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
