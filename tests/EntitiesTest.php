<?php

namespace Angecode\LaravelIproSoft\Tests;

use Angecode\LaravelIproSoft\Entities\GeneralPropertyInfo;
use Angecode\LaravelIproSoft\Entities\OwnerInfo;

class EntitiesTest extends IproSoftwareTestCase
{
    /**
     * @test
     */
    public function instance_from_array(): void
    {
        /** @var GeneralPropertyInfo $property */
        $property = GeneralPropertyInfo::fromArray([
            'Id' => 111,
            'Owner' => [
                'ContactId' => 1000,
                'NotExistProperty' => 'test',
            ],
        ]);
        $this->assertInstanceOf(GeneralPropertyInfo::class, $property);

        $this->assertInstanceOf(OwnerInfo::class, $property->owner);

        $this->assertArrayHasKey('NotExistProperty', $property->owner->notParsedData);

        $this->assertEquals(111, $property->id);
        $this->assertEquals(1000, $property->owner->contactId);
    }
}
