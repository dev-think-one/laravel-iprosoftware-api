<?php

namespace Angecode\LaravelIproSoft\Requests;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * @deprecated
 */
class PaginatedRequestDTO extends DataTransferObject
{
    /** @var int */
    public $size = 20;

    /** @var int */
    public $index = 1;
}
