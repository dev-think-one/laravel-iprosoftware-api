<?php

namespace Angecode\LaravelIproSoft\Tests\Response;

use Angecode\LaravelIproSoft\Entities\ContactInfo;
use Angecode\LaravelIproSoft\Responses\ResponseCollection;
use Angecode\LaravelIproSoft\Tests\IproSoftwareTestCase;
use Illuminate\Support\LazyCollection;

class ResponseCollectionTest extends IproSoftwareTestCase
{
    protected function mockData(): array
    {
        return [
            'TotalHits' => 3,
            'Items'     => [
                [
                    'Id' => 1,
                ],
                [
                    'Id' => 2,
                ],
            ],
        ];
    }

    /**
     * @test
     */
    public function parsing_in_initialisation(): void
    {
        $response = ResponseCollection::mock(
            ContactInfo::class,
            $this->mockData(),
            [
                'size' => 2,
            ]
        );

        $this->assertTrue($response->hasNextIndex());

        $this->assertCount(2, $response->items->toArray());

        $this->assertInstanceOf(LazyCollection::class, $response->items);
        $this->assertInstanceOf(ContactInfo::class, $response->items->first());
    }
}
