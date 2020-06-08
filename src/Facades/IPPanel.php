<?php

namespace SmartRaya\IPPanel-Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class IPPanel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'IPPanel';
    }
}
