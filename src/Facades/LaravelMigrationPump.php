<?php

namespace DenisKisel\LaravelMigrationPump\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelMigrationPump extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelmigrationpump';
    }
}
