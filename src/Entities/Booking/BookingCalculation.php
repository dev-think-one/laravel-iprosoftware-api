<?php

namespace Angecode\LaravelIproSoft\Entities\Booking;


use Angecode\LaravelIproSoft\Entities\IproEntity;
use Illuminate\Support\Collection;

class BookingCalculation extends IproEntity
{
    /** @example "2020-01-02" */
    public ?string $balanceDueDate;

    public ?float $vatRate;

    public ?float $bookingFee;

    public ?float $fullPaymentValue;

    public ?float $depositPaymentValue;

    /** @example "£" */
    public ?string $currency;

    public ?Collection $propertyItems;

    /**
     * @codeCoverageIgnore
     * @return string
     */
    public function propNameVATRate(): string
    {
        return 'vatRate';
    }

    /**
     * @codeCoverageIgnore
     * @param null|array $data
     * @return Collection
     */
    public function parsePropertyItems(?array $data): Collection
    {
        $items = [];
        if (is_array($data)) {
            foreach ($data as $datum) {
                $items[] = PropertyItem::fromArray($datum);
            }
        }

        return collect($items);
    }
}
