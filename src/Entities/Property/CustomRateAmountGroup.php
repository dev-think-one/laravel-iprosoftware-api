<?php

namespace Angecode\LaravelIproSoft\Entities\Property;

use Angecode\LaravelIproSoft\Entities\IproEntity;
use Illuminate\Support\Collection;

class CustomRateAmountGroup extends IproEntity
{
    /**
     * @example "2020-01-25"
     */
    public string $weekCommencing;

    public Collection $amount;

    protected function parseAmount(array $amounts): Collection
    {
        $collection = new Collection();

        foreach ($amounts as $amountKey => $amountValue) {
            $amount = CustomRateAmount::fromAmount($amountKey, $amountValue);
            if ($amount) {
                $collection->add($amount);
            }
        }

        return $collection;
    }
}
