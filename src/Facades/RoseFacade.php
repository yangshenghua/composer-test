<?php


namespace Rockyang\Rose\Facades;

use Illuminate\Support\Facades\Facade;

class RoseFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "rose";
    }

}