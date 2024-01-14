<?php 
namespace Wpint\Support\Facades;

use Wpint\Support\Facade;

class WPFileDirect extends Facade
{

    protected static function getFacadeAccessor() : string 
    {
        return "wp.file.direct";   
    }

}