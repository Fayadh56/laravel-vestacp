<?php

namespace Gwiddle\LaravelVestaCP\Facades;

use Illuminate\Support\Facades\Facade;

class VestaCP extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'vestacp';
    }
}
