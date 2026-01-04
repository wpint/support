<?php 
namespace Wpint\Support\Facades;

use Illuminate\Support\Facades\Facade;

class WPFile extends Facade
{

    protected static function getFacadeAccessor() : string 
    {
        return "wp.file.base";   
    }

}