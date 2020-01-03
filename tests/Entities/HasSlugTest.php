<?php

namespace Angecode\LaravelIproSoft\Tests\Entities;

use Angecode\LaravelIproSoft\Entities\AllPropertyInfo;
use Angecode\LaravelIproSoft\Entities\PropertyInfoSubData\PropertyDetails;
use Angecode\LaravelIproSoft\Tests\Fixtures\Entities\PropertyWithCustomSlug;
use Angecode\LaravelIproSoft\Tests\IproSoftwareTestCase;

class HasSlugTest extends IproSoftwareTestCase
{
    /**
     * @test
     */
    public function instance_from_array(): void
    {
        /** @var PropertyWithCustomSlug $property */
        $property = PropertyWithCustomSlug::fromArray([
        ]);

        $this->assertNull($property->extractSlug());

        /** @var PropertyWithCustomSlug $property */
        $property = PropertyWithCustomSlug::fromArray([
            'TestUrl' => 'blah/testing-prop/',
        ]);

        $this->assertEquals('testing-prop', $property->extractSlug());
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
