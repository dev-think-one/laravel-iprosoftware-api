<?php

namespace LaravelIproSoftwareApi\Exceptions;

use LaravelIproSoftwareApi\IproApiResponse;

class UnexpectedApiResponseException extends \Exception
{
    protected IproApiResponse $response;

    public function __construct(IproApiResponse $response, $message = null, $previous = null)
    {
        $this->response = $response;
        parent::__construct($message ?: 'Unexpected Ipro api response.', $response->status(), $previous);
    }

    public function getResponse(): IproApiResponse
    {
        return $this->response;
    }
}
