<?php

namespace LaravelIproSoftwareApi;

use Illuminate\Http\Client\Response;
use LaravelIproSoftwareApi\Exceptions\UnexpectedApiResponseException;

class IproApiResponse extends Response
{
    public function onlySuccessful(): static
    {
        throw_if(!$this->successful(), new UnexpectedApiResponseException($this));

        return $this;
    }
}
