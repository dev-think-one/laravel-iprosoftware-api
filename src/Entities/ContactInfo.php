<?php

namespace Angecode\LaravelIproSoft\Entities;

/**
 * @deprecated
 */
class ContactInfo extends IproEntity
{
    /** @var int */
    public $id;

    /** @var int */
    public $companyId;

    /** @var string */
    public $companyName;

    /** @var null|string */
    public $email;

    /** @var null|string */
    public $emailAlt;

    /** @var null|string */
    public $emailAlt1;

    /** @var string */
    public $title;

    /** @var string */
    public $firstName;

    /** @var string */
    public $lastName;

    /** @var string */
    public $fullName;

    /** @var null|string */
    public $telephone;

    /** @var null|string */
    public $telephoneAlt;

    /** @var null|string */
    public $mobile;

    /** @var null|string */
    public $language;

    /** @var null|string */
    public $address;

    /** @var null|string */
    public $countryCode;

    /** @var null|string */
    public $country;

    /** @var null|string */
    public $townCity;

    /** @var null|string */
    public $countyArea;

    /** @var null|string */
    public $streetName;

    /** @var null|string */
    public $postcode;

    /** @var null|string */
    public $comments;

    /** @var null|string */
    public $retainer;

    /** @var null|string */
    public $balance;

    /*
     * There typo in api so need follow this typo in property name
     */
    /** @var null|string */
    public $commision;

    /** @var null|int */
    public $brandId;

    /** @var null|int */
    public $typeId;

    /** @var null|string */
    public $typeName;

    /** @var bool */
    public $contactByPost;

    /** @var bool */
    public $contactByEmail;

    /** @var bool */
    public $contactByPhone;

    /** @var bool */
    public $contactBySms;

    /** @var bool */
    public $subscribedToMailingList;
}
