<?php


namespace Angecode\LaravelIproSoft\Entities\Booking;

use Angecode\LaravelIproSoft\Entities\IproEntity;
use Illuminate\Support\Collection;

class Booking extends IproEntity
{
    public int $bookingId;

    public ?int $externalReservationID;

    /** @example "2015-12-29T08:08:00.0000000Z" */
    public ?string $orderTime;

    /** @example "2015-12-29T08:08:00.0000000Z" */
    public ?string $modifiedTime;

    /** @example "2016-01-01" */
    public ?string $checkIn;

    /** @example "2016-01-09" */
    public ?string $checkOut;

    public ?string $country;

    public ?float $renterAmount;

    public ?float $bookingFee;

    public ?float $bookingFeeVAT;

    public ?float $holidayExtras;

    public ?float $insuranceTotal;

    public ?float $agentCommission;

    public ?float $discount;

    public ?float $paymentCharges;

    public ?float $compensation;

    public ?float $renterBalance;

    public ?float $commission;

    public ?float $commissionVAT;

    public ?float $securityDeposit;

    public ?float $renterTotal;

    public ?float $ratePerDay;

    /** @var string[]|null  */
    public ?array $propertyTypes;

    public ?string $status;

    public ?string $source;

    public ?Collection $bookingTags;

    public ?int $contactID;

    public ?int $propertyId;

    public ?string $customerName;

    public ?int $adults;

    public ?int $children;

    public ?int $infants;

    public ?int $pets;

    public ?int $bookingStatusId;

    public ?string $transactionID;

    public ?string $currency;

    public ?float $deposit;

    /** @example  "19/07/2018"  */
    public ?string $depositDueDate;

    public ?float $balance;

    /** @example  "19/07/2018"  */
    public ?string $balanceDueDate;

    public ?string $guestNotes;

    public ?string $houseKeeperNotes;

    public ?string $internalNotes;

    public ?Collection $guests;

    public ?Collection $holidayExtrasOrdered;

    /**
     * @codeCoverageIgnore
     * @param null|array $data
     * @return Collection
     */
    protected function parseBookingTags(?array $data): Collection
    {
        return BookingTag::fromList($data);
    }

    /**
     * @codeCoverageIgnore
     * @param null|array $data
     * @return Collection
     */
    protected function parseGuests(?array $data): Collection
    {
        return Guest::fromList($data);
    }

    /**
     * @codeCoverageIgnore
     * @param null|array $data
     * @return Collection
     */
    protected function parseHolidayExtrasOrdered(?array $data): Collection
    {
        return HolidayExtrasOrdered::fromList($data);
    }
}


