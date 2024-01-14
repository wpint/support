<?php 
namespace Wpint\Support\Facades;

use Wpint\Support\Facade;

class JWT extends Facade
{

    protected static function getFacadeAccessor() : string 
    {
        return "JWT";   
    }

}