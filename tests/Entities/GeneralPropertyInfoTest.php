<?php

namespace Angecode\LaravelIproSoft\Tests\Entities;

use Angecode\LaravelIproSoft\Entities\GeneralPropertyInfo;
use Angecode\LaravelIproSoft\Tests\IproSoftwareTestCase;

class GeneralPropertyInfoTest extends IproSoftwareTestCase
{
    /**
     * @test
     */
    public function slug_is_extractable(): void
    {
        /** @var GeneralPropertyInfo $property */
        $property = GeneralPropertyInfo::fromArray([
            'Id' => 111,
            'url' => 'http://guest.test.com/blah-lodge/',
        ]);

        $this->assertEquals('blah-lodge', $property->extractSlug());
    }

    /**
     * @test
     */
    public function if_not_url_website_used_for_slug(): void
    {
        /** @var GeneralPropertyInfo $property */
        $property = GeneralPropertyInfo::fromArray([
            'Id' => 111,
            'propertyWebsite' => 'http://guest.test.com/blah-lodge2/',
        ]);

        $this->assertEquals('blah-lodge2', $property->extractSlug());
    }
}
