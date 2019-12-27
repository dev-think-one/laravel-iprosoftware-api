<?php

namespace Angecode\LaravelIproSoft;

use Carbon\Carbon;

class IproRequestHelper
{
    public const HEADER_IF_MODIFIED_SINCE = 'If-Modified-Since';

    public static function getHeaderIfModifiedSince(Carbon $dateTime)
    {
        return $dateTime->format('Y-m-d');
    }
}
