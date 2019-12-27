<?php

namespace Angecode\LaravelIproSoft\Responses;

use Angecode\LaravelIproSoft\Entities\IproEntity;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;

class ResponseEntity
{
    /** @var int */
    public $total = 0;

    /** @var IproEntity */
    public $entity;

    public function __construct(ResponseInterface $response, string $cast)
    {
        $responseData = json_decode((string) $response->getBody(), true);
        $this->entity = $cast::fromArray($responseData);
    }

    public static function mock(string $cast, array $data = [], array $dtoData = []): self
    {
        return new static(new Response(200, [], json_encode($data)), $cast);
    }
}
