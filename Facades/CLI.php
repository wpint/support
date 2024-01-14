<?php 
namespace Wpint\Support\Facades;

use Wpint\Support\Facade;

class CLI extends Facade
{

    protected static function getFacadeAccessor() : string 
    {
        return "cli";   
    }

}