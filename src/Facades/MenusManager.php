<?php

namespace sattaribm\MenusManager\Facades;

use sattaribm\MenusManager\MenusManager as Manager;
use Illuminate\Support\Facades\Facade;

class MenusManager extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Manager::class;
    }
}
