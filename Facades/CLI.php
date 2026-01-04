<?php 
namespace Wpint\Support\Facades;

use Illuminate\Support\Facades\Facade;

class CLI extends Facade
{

    protected static function getFacadeAccessor() : string 
    {
        return "cli";   
    }

}