<?php

namespace Angecode\LaravelIproSoft\Tests;

use Angecode\LaravelIproSoft\IproRequestHelper;
use Carbon\Carbon;

class RequestHelperTest extends IproSoftwareTestCase
{
    /**
     * @test
     */
    public function modified_header_has_valid_ipro_format(): void
    {
        $time = Carbon::now();
        $this->assertEquals(
            IproRequestHelper::getHeaderIfModifiedSince($time),
            $time->format('Y-m-d')
        );
    }
}
