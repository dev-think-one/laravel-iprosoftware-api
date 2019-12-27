<?php

namespace Angecode\LaravelIproSoft\Tests\Fixtures\Entities;

use Angecode\LaravelIproSoft\Entities\IproEntity;
use Angecode\LaravelIproSoft\Entities\Traits\HasExtractableSlug;

class PropertyWithCustomSlug extends IproEntity
{
    use HasExtractableSlug;

    public $testUrl;

    public function slugProperties(): array
    {
        return [
            'testUrl'
        ];
    }
}
