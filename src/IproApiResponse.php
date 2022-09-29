<?php

namespace Angecode\LaravelIproSoft;

use Angecode\LaravelIproSoft\Exceptions\UnexpectedApiResponseException;
use Illuminate\Http\Client\Response;

class IproApiResponse extends Response
{
    public function onlySuccessful(): static
    {
        throw_if(!$this->successful(), new UnexpectedApiResponseException($this));

        return $this;
    }
}
