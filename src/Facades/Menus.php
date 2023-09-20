<?php

namespace sattaribm\MenusManager\Facades;

use sattaribm\MenusManager\MenusManager;
use Illuminate\Support\Facades\Facade;

class Menus extends Facade
{
    protected static function getFacadeAccessor()
    {
        return MenusManager::class;
    }
}
