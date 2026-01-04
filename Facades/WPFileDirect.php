<?php 
namespace Wpint\Support\Facades;

use Illuminate\Support\Facades\Facade;

class WPFileDirect extends Facade
{

    protected static function getFacadeAccessor() : string 
    {
        return "wp.file.direct";   
    }

}