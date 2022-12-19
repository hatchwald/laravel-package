<?php

namespace Fatkhur_rohman\UserManagement\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Fatkhur_rohman\UserManagement\UserManagement
 */
class UserManagement extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Fatkhur_rohman\UserManagement\UserManagement::class;
    }
}
