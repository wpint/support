<?php 
namespace Wpint\Support\Facades;

use Wpint\Support\Facade;

class Migration extends Facade
{

    protected static function getFacadeAccessor() : string 
    {
        return "migration";   
    }

}