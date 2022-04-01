<?php

namespace Angecode\LaravelIproSoft\Entities\PropertyInfoSubData;

use Angecode\LaravelIproSoft\Entities\IproEntity;
use Carbon\Carbon;

class PropertyAvailability extends IproEntity
{
    /**
     * Format: "2019-12-26".
     * @var null|string
     */
    public $startDate;

    /**
     * Format: "2019-12-26".
     * @var null|string
     */
    public $endDate;

    /** @var int */
    public $statusCode;

    /** @var null|string */
    public $status;

    /**
     * @return Carbon|null
     */
    public function getStartAt(): ?Carbon
    {
        if (!((bool) $this->startDate)) {
            return null;
        }

        return $this->createCarbonInstanceFromDateString($this->startDate);
    }

    /**
     * @return Carbon|null
     */
    public function getEndAt(): ?Carbon
    {
        if (!((bool) $this->endDate)) {
            return null;
        }

        return $this->createCarbonInstanceFromDateString($this->endDate);
    }

    protected function createCarbonInstanceFromDateString(string $dateString): Carbon
    {
        return Carbon::createFromFormat('Y-m-d', $dateString)->startOfDay();
    }
}
