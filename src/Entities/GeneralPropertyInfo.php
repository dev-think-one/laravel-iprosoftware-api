<?php

namespace Angecode\LaravelIproSoft\Entities;

use Angecode\LaravelIproSoft\Entities\Traits\HasExtractableSlug;

/**
 * @deprecated
 */
class GeneralPropertyInfo extends IproEntity
{
    use HasExtractableSlug;

    /** @var int */
    public $id;

    /** @var string */
    public $name;

    /** @var null|string */
    public $propertyWarning;

    /** @var null|string */
    public $title;

    /** @var null|string */
    public $reference;

    /** @var null|int */
    public $referenceValue;

    /** @var null|string */
    public $description;

    /** @var null|string */
    public $location;

    /** @var null|string */
    public $image;

    /** @var bool */
    public $inActive;

    /** @var null|string */
    public $bathrooms;

    /** @var null|int */
    public $bathroomsValue;

    /** @var null|string */
    public $bedrooms;

    /** @var null|int */
    public $bedroomsValue;

    /** @var null|string */
    public $sleeps;

    /** @var null|int */
    public $sleepsValue;

    /** @var null|float */
    public $price;

    /** @var null|string */
    public $priceRange;

    /** @var null|string */
    public $propertyType;

    /** @var bool */
    public $wifi;

    /** @var null|string */
    public $propertyWebsite;

    /** @var null|string */
    public $url;

    /** @var null|string */
    public $currencySymbol;

    /** @var null|string */
    public $commission;

    /** @var int */
    public $commissionValue;

    /** @var null|OwnerInfo */
    public $owner;

    /** @var bool */
    public $isAvailable;

    /** @var bool */
    public $isBrokenRule;

    /** @var null|string */
    public $availabilityMessage;

    /** @var bool */
    public $ratesIncludeVat;

    /** @var bool */
    public $suspended;

    /** @var bool */
    public $withdrawn;

    /** @var null|float */
    public $lat;

    /** @var null|float */
    public $lng;

    /** @var null|int */
    public $zoom;

    /** @var null|int */
    public $averageRating;

    /** @var array */
    public $listingIcons;

    protected function parseOwner(array $data)
    {
        return OwnerInfo::fromArray($data);
    }
}
