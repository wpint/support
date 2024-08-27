<?php 
namespace Wpint\Support\Facades;

use Wpint\Support\Facade;

/**
 * @method static self controller(array $controller)
 * @method static self middleware(string $controller = null)
 * @method static self scope()
 * @method static self path(string $path)
 * @method static self name(string $name)
 * @method static self method(Wpint\Route\Enums\RouteHttpMethodEnum $method)
 *
 * @see \WPINT\Framework\Services\Route\Concretes\AdminRoute
 */
class WebRoute extends Facade
{

    protected static function getFacadeAccessor() : string 
    {
        return 'route.web';   
    }

}