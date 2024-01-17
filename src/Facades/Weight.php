<?php

namespace OscarWeijman\Weight\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \OscarWeijman\Weight\Weight
 */
class Weight extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \OscarWeijman\Weight\Weight::class;
    }
}
