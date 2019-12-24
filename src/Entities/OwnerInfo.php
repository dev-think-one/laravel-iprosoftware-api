<?php


namespace Angecode\LaravelIproSoft\Entities;

class OwnerInfo extends IproEntity
{
    /** @var int */
    public $contactId;

    /** @var int */
    public $companyId;

    /** @var string */
    public $companyName;

    /** @var string */
    public $email;

    /** @var string */
    public $title;

    /** @var string */
    public $firstName;

    /** @var string */
    public $lastName;

    /** @var string */
    public $phone;

    /** @var string */
    public $bankSortCode;

    /** @var string */
    public $bankAccountNumber;

    /** @var string */
    public $bankAccountName;

    /** @var int */
    public $rep;

    /** @var null|int */
    public $statementDateId;

    /** @var null|string */
    public $statementNumber;

    /** @var null|string */
    public $mobile;

    /** @var null|string */
    public $retainer;

    /** @var null|string */
    public $balance;

    /** @var null|string */
    public $bankPaymentReference;

    /** @var boolean */
    public $bankNonResident;
}
