<?php

namespace Angecode\LaravelIproSoft\Tests\Entities;

use Angecode\LaravelIproSoft\Entities\PropertyInfoSubData\PropertyImage;
use Angecode\LaravelIproSoft\Tests\IproSoftwareTestCase;
use Carbon\Carbon;

class PropertyImageTest extends IproSoftwareTestCase
{
    /**
     * @test
     */
    public function has_modified_at_carbon_instance(): void
    {
        /** @var PropertyImage $propertyImage */
        $propertyImage = PropertyImage::fromArray([
            'Id' => 111,
        ]);

        $this->assertEquals(111, $propertyImage->id);
        $this->assertNull($propertyImage->getModifiedAt());

        /** @var PropertyImage $propertyImage */
        $propertyImage = PropertyImage::fromArray([
            'Id' => 222,
            'ModifiedDate' => '20/01/2016 06:08:25',
        ]);

        $this->assertEquals(222, $propertyImage->id);
        $this->assertInstanceOf(Carbon::class, $propertyImage->getModifiedAt());
        $this->assertEquals('20/01/2016 06:08:25', $propertyImage->getModifiedAt()->format('d/m/Y H:i:s'));
    }
}
