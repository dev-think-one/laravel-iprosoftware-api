<?php

namespace LaravelIproSoftwareApi\Tests;

use Carbon\Carbon;
use LaravelIproSoftwareApi\IproRequestHelper;

class RequestHelperTest extends TestCase
{
    /** @test */
    public function modified_header_has_valid_ipro_format(): void
    {
        $time = Carbon::now();
        $this->assertEquals(
            IproRequestHelper::getHeaderIfModifiedSince($time),
            $time->format('Y-m-d')
        );
    }
}
