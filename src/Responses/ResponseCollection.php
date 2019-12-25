<?php


namespace Angecode\LaravelIproSoft\Responses;

use Angecode\LaravelIproSoft\Requests\PaginatedRequestDTO;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Collection;
use Illuminate\Support\LazyCollection;
use Psr\Http\Message\ResponseInterface;

class ResponseCollection
{
    /** @var PaginatedRequestDTO */
    public $requestData;

    /** @var int */
    public $total = 0;

    /** @var Collection */
    public $items;

    public function __construct(PaginatedRequestDTO $requestData, ResponseInterface $response, string $cast)
    {
        $this->requestData = $requestData;

        $responseData = json_decode((string)$response->getBody(), true);
        $this->total = $responseData['TotalHits'];
        $this->items = new LazyCollection(function () use ($responseData, $cast) {
            foreach ($responseData['Items'] as $item) {
                yield $cast::fromArray($item);
            }
        });
    }

    public function hasNextIndex(): bool
    {
        return $this->total > $this->requestData->index * $this->requestData->size;
    }

    public static function mock(string $cast, array $data = ['TotalHits' => 0, 'Items' => []], array $dtoData = []): self
    {
        return new static(new PaginatedRequestDTO($dtoData), new Response(200, [], json_encode($data)), $cast);
    }
}
