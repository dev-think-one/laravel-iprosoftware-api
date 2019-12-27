<?php


namespace Angecode\LaravelIproSoft\Tests\Entities;

use Angecode\LaravelIproSoft\Entities\PropertyInfoSubData\PropertyAvailability;
use Angecode\LaravelIproSoft\Tests\IproSoftwareTestCase;
use Carbon\Carbon;

class PropertyAvailabilityTest extends IproSoftwareTestCase
{

    /**
     * @test
     */
    public function has_modified_at_carbon_instance(): void
    {
        /** @var PropertyAvailability $propertyAvailability */
        $propertyAvailability = PropertyAvailability::fromArray([
        ]);

        $this->assertNull($propertyAvailability->getStartAt());
        $this->assertNull($propertyAvailability->getEndAt());

        /** @var PropertyAvailability $propertyAvailability */
        $propertyAvailability = PropertyAvailability::fromArray([
            'StartDate' => '2019-12-26',
            'EndDate' => '2019-12-27',
        ]);

        $this->assertInstanceOf(Carbon::class, $propertyAvailability->getStartAt());
        $this->assertInstanceOf(Carbon::class, $propertyAvailability->getEndAt());
        $this->assertEquals('2019-12-26', $propertyAvailability->getStartAt()->format('Y-m-d'));
        $this->assertEquals('2019-12-27', $propertyAvailability->getEndAt()->format('Y-m-d'));
    }
}
