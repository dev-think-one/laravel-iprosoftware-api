<?php

namespace Angecode\LaravelIproSoft\Entities\Booking;

use Angecode\LaravelIproSoft\Entities\IproEntity;

class PropertyItem extends IproEntity
{
    public ?int $id;

    public ?string $title;

    public ?float $discount;

    public ?int $extras;

    public ?float $insurance;

    public ?float $agentFee;

    public ?float $accommodationCost;

    public ?float $breakagesDeposit;

    public ?float $smallPartyDiscount;

    public ?bool $breakagesDepositInTotalPrice;

    public ?bool $availability;

    public ?bool $minStayPassed;

    public ?bool $changeoverPassed;

    public ?string $voucherCode;

    public ?string $message;

    public ?array $extraItems;
}
