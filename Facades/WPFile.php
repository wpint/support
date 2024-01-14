<?php 
namespace Wpint\Support\Facades;

use Wpint\Support\Facade;

class WPFile extends Facade
{

    protected static function getFacadeAccessor() : string 
    {
        return "wp.file.base";   
    }

}