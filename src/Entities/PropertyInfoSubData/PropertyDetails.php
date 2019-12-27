<?php

namespace Angecode\LaravelIproSoft\Entities\PropertyInfoSubData;

use Angecode\LaravelIproSoft\Entities\IproEntity;
use Angecode\LaravelIproSoft\Entities\Traits\HasExtractableSlug;
use Illuminate\Support\Collection;

class PropertyDetails extends IproEntity
{
    use HasExtractableSlug;

    /** @var int */
    public $id;

    /** @var int */
    public $ownerCompanyId;

    /** @var string */
    public $name;

    /** @var null|string */
    public $propertyName;

    /** @var null|string */
    public $title;

    /** @var null|bool */
    public $suspended;

    /** @var null|bool */
    public $withdrawn;

    /** @var null|bool */
    public $hideOnWebsite;

    /** @var null|bool */
    public $disableOnlineBooking;

    /** @var null|string */
    public $propertyReference;

    /** @var null|string */
    public $contractRenewalDate;

    /** @var null|string */
    public $propertyWebsite;

    /** @var null|string */
    public $intro;

    /** @var null|string */
    public $mainDescription;

    /** @var null|string */
    public $currency;

    /** @var null|bool */
    public $hideRates;

    /** @var null|string */
    public $minRate;

    /** @var null|string */
    public $maxRate;

    /** @var null|int */
    public $commission;

    /** @var null|int */
    public $breakagesDeposit;

    /** @var null|string */
    public $rentalNotesTitle;

    /** @var null|string */
    public $rentalNotes;

    /** @var null|string */
    public $availabilityNotes;

    /** @var null|string */
    public $address;

    /** @var null|string */
    public $address2;

    /** @var null|string */
    public $city;

    /** @var null|string */
    public $county;

    /** @var null|string */
    public $postcode;

    /** @var null|string */
    public $country;

    /** @var null|string */
    public $url;

    /** @var null|string */
    public $geoLocation;

    /** @var null|string */
    public $pros;

    /** @var null|string */
    public $cons;

    /** @var null|string */
    public $buildSize;

    /** @var null|string */
    public $plotSize;

    /** @var null|string */
    public $licence;

    /** @var null|string */
    public $warnings;

    /** @var null|string[] */
    public $location;

    /** @var null|string */
    public $virtualTours;

    /** @var null|string */
    public $virtualTourTitle;

    /** @var null|string */
    public $trustPilotTag;

    /** @var null|string */
    public $seoTitle;

    /** @var null|string */
    public $seoKeywords;

    /** @var null|string */
    public $seoDescription;

    /** @var null|PropertyAttributes */
    public $attributes;

    /** @var null|array */
    public $rooms;

    /** @var null|array */
    public $distances;

    /** @var null|Collection */
    public $images;

    /**
     * @codeCoverageIgnore
     * @param array $data
     * @return IproEntity
     */
    public function parseAttributes(?array $data): IproEntity
    {
        if (is_array($data)) {
            return PropertyAttributes::fromArray($data);
        }

        return null;
    }

    /**
     * @codeCoverageIgnore
     * @param array $data
     * @return Collection
     */
    public function parseImages(array $data): Collection
    {
        $images = [];
        foreach ($data as $imageDetailData) {
            $images[] = PropertyDetailImage::fromArray($imageDetailData);
        }

        return collect($images);
    }

    /**
     * @codeCoverageIgnore
     * @return string
     */
    public function propNameSEOTitle(): string
    {
        return 'seoTitle';
    }

    /**
     * @codeCoverageIgnore
     * @return string
     */
    public function propNameSEOKeywords(): string
    {
        return 'seoKeywords';
    }

    /**
     * @codeCoverageIgnore
     * @return string
     */
    public function propNameSEODescription(): string
    {
        return 'seoDescription';
    }
}
