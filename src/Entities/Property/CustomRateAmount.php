<?php

namespace Angecode\LaravelIproSoft\Entities\Property;

use Angecode\LaravelIproSoft\Entities\IproEntity;
use Angecode\LaravelIproSoft\Enums\CustomRateAmountType;
use Angecode\LaravelIproSoft\Enums\CustomRateAmountValue;

class CustomRateAmount extends IproEntity
{
    /** @var CustomRateAmountType */
    public CustomRateAmountType $type;

    /** @var CustomRateAmountValue */
    public CustomRateAmountValue $valueType;

    public float $value = 0;

    public static function fromAmount(string $stringType, string $stringValue): ?CustomRateAmount
    {
        try {
            $customRateAmount = new self();
            $customRateAmount->type = CustomRateAmountType::make((int) $stringType);
            $customRateAmount->valueType = CustomRateAmountValue::make($stringValue);
            if ($customRateAmount->valueType->isAny([
                CustomRateAmountValue::priceFrom(),
                CustomRateAmountValue::firstSpecialOffer(),
                CustomRateAmountValue::secondSpecialOffer(),
                CustomRateAmountValue::thirdSpecialOffer(),
            ])) {
                $customRateAmount->value = (float) trim($stringValue, "\* \t\n\r\0\x0B");
            }

            return $customRateAmount;
        } catch (\Exception $e) {
            return null;
        }
    }
}
