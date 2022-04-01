<?php

namespace Angecode\LaravelIproSoft\Tests\Entities;

use Angecode\LaravelIproSoft\Entities\AllPropertyInfo;
use Angecode\LaravelIproSoft\Entities\GeneralPropertyInfo;
use Angecode\LaravelIproSoft\Entities\OwnerInfo;
use Angecode\LaravelIproSoft\Entities\PropertyInfoSubData\PropertyDetails;
use Angecode\LaravelIproSoft\Tests\IproSoftwareTestCase;
use Illuminate\Support\Collection;

class EntitiesTest extends IproSoftwareTestCase
{
    /**
     * @test
     */
    public function instance_from_array(): void
    {
        /** @var GeneralPropertyInfo $property */
        $property = GeneralPropertyInfo::fromArray([
            'Id'    => 111,
            'Owner' => [
                'ContactId'        => 1000,
                'NotExistProperty' => 'test',
            ],
        ]);
        $this->assertInstanceOf(GeneralPropertyInfo::class, $property);

        $this->assertInstanceOf(OwnerInfo::class, $property->owner);

        $this->assertArrayHasKey('NotExistProperty', $property->owner->notParsedData);

        $this->assertEquals(111, $property->id);
        $this->assertEquals(111, $property->getIproId());
        $this->assertEquals(1000, $property->owner->contactId);
    }

    /**
     * @test
     */
    public function instance_from_list(): void
    {
        /** @var Collection $properties */
        $properties = GeneralPropertyInfo::fromList([
            [
                'Id'    => 111,
                'Owner' => [
                    'ContactId'        => 1000,
                    'NotExistProperty' => 'test',
                ],
            ],
            [
                'Id'    => 222,
                'Owner' => [
                    'ContactId'        => 2000,
                    'NotExistProperty' => 'test2',
                ],
            ],
        ]);

        $property = $properties->first();

        $this->assertInstanceOf(GeneralPropertyInfo::class, $property);

        $this->assertInstanceOf(OwnerInfo::class, $property->owner);

        $this->assertArrayHasKey('NotExistProperty', $property->owner->notParsedData);

        $this->assertEquals(111, $property->id);
        $this->assertEquals(111, $property->getIproId());
        $this->assertEquals(1000, $property->owner->contactId);
    }

    /**
     * @test
     */
    public function property_name_is_changeable(): void
    {
        /** @var AllPropertyInfo $property */
        $property = AllPropertyInfo::fromArray([
            'PropertyDetails' => [
                'SEOTitle' => 'test',
            ],
        ]);

        $this->assertInstanceOf(AllPropertyInfo::class, $property);
        $this->assertInstanceOf(PropertyDetails::class, $property->propertyDetails);

        $this->assertArrayNotHasKey('SEOTitle', $property->propertyDetails->notParsedData);
        $this->assertEquals('test', $property->propertyDetails->seoTitle);
    }

    /**
     * @test
     */
    public function to_array_returns_array(): void
    {
        /** @var GeneralPropertyInfo $property */
        $property = GeneralPropertyInfo::fromArray([
            'Id' => 111,
        ]);

        $array = $property->toArray();

        $this->assertArrayHasKey('id', $array);
    }
}
