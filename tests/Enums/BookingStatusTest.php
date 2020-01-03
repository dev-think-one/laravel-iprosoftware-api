<?php

namespace Angecode\LaravelIproSoft\Tests\Entities;

use Angecode\LaravelIproSoft\Entities\AllPropertyInfo;
use Angecode\LaravelIproSoft\Entities\GeneralPropertyInfo;
use Angecode\LaravelIproSoft\Entities\OwnerInfo;
use Angecode\LaravelIproSoft\Entities\PropertyInfoSubData\PropertyDetails;
use Angecode\LaravelIproSoft\Enums\BookingStatus;
use Angecode\LaravelIproSoft\Tests\IproSoftwareTestCase;

class BookingStatusTest extends IproSoftwareTestCase
{
    /**
     * @test
     */
    public function can_return_index_and_text(): void
    {
        $status = BookingStatus::booking();

        $this->assertEquals('Booking', (string)$status);
        $this->assertEquals(3, $status->getIndex());
    }
}
