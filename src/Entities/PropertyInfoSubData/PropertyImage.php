<?php

namespace Angecode\LaravelIproSoft\Entities\PropertyInfoSubData;

use Angecode\LaravelIproSoft\Entities\IproEntity;
use Carbon\Carbon;

class PropertyImage extends IproEntity
{
    /** @var null|string */
    public $id;

    /** @var null|string */
    public $name;

    /** @var null|string */
    public $url;

    /** @var null|string */
    public $hostUrl;

    /**
     * Format:  "20/01/2016 06:08:25".
     * @var null|string
     */
    public $modifiedDate;

    /**
     * @return Carbon|null
     */
    public function getModifiedAt(): ?Carbon
    {
        if (! $this->modifiedDate) {
            return null;
        }

        return Carbon::createFromFormat('d/m/Y H:i:s', $this->modifiedDate);
    }
}
