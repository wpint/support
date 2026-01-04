<?php 
namespace Wpint\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static self controller(array $controller)
 * @method static self middleware(string $controller = null)
 * @method static self scope()
 * @method static self path(string $path)
 * @method static self name(string $name)
 * @method static self action(string $icon)
 * @method static string getAction(string $icon)
 * @method register()
 *
 * @see \WPINT\Framework\Services\Route\Concretes\AjaxRoute
 */
class AjaxRoute extends Facade
{

    protected static function getFacadeAccessor() : string 
    {
        return "route.ajax";   
    }

}