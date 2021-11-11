<?php

namespace Days85\HiveOS\Facades;

use Illuminate\Support\Facades\Facade;

class HiveOS extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor(): string
    {
        return \Days85\HiveOS\HiveOS::class;
    }
}
