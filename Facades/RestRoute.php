<?php 
namespace Wpint\Support\Facades;

use Wpint\Support\Facade;

/**
 * @method static self controller(array $controller)
 * @method static self middleware(string $controller = null)
 * @method static self scope()
 * @method static self method(\WPINT\Framework\Services\Route\Enums\RouteScopeEnum\RouteHttpMethodEnum $method)
 * @method static self path(string $path)
 * @method static self name(string $name)
 * @method static self namespace(string $namespace)
 * @method static self permission(callable $permission)
 *
 * @see \WPINT\Framework\Services\Route\Concretes\RestAjax
 */
class RestRoute extends Facade
{

    protected static function getFacadeAccessor() : string 
    {
        return  'route.rest';   
    }

}