<?php

namespace Angecode\LaravelIproSoft;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Angecode\LaravelIproSoft\IproSoftware
 * @codeCoverageIgnore
 */
class IproSoftwareFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'iprosoftware';
    }
}
