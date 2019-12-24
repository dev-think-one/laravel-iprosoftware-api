<?php


namespace Angecode\LaravelIproSoft\Entities;

class GeneralPropertyInfo extends IproEntity
{
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
    public $ReferenceValue;

    /** @var null|string */
    public $description;

    /** @var null|string */
    public $location;

    /** @var null|string */
    public $image;

    /** @var boolean */
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

    /** @var boolean */
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

    /** @var boolean */
    public $isAvailable;

    /** @var boolean */
    public $isBrokenRule;

    /** @var null|string */
    public $availabilityMessage;

    /** @var boolean */
    public $ratesIncludeVat;

    /** @var boolean */
    public $suspended;

    /** @var boolean */
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

    public function parseOwner(array  $data)
    {
        return OwnerInfo::fromArray($data);
    }
}
