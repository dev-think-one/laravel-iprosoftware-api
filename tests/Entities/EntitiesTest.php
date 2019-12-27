<?php

namespace Angecode\LaravelIproSoft\Tests\Entities;

use Angecode\LaravelIproSoft\Entities\AllPropertyInfo;
use Angecode\LaravelIproSoft\Entities\GeneralPropertyInfo;
use Angecode\LaravelIproSoft\Entities\OwnerInfo;
use Angecode\LaravelIproSoft\Entities\PropertyInfoSubData\PropertyDetails;
use Angecode\LaravelIproSoft\Tests\IproSoftwareTestCase;

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
        $this->assertEquals(111, $property->getIproId());
        $this->assertEquals(1000, $property->owner->contactId);
    }

    /**
     * @test
     */
    public function propertyNameIsChangeable(): void
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
}
