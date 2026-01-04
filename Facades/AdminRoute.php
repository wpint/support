<?php 
namespace Wpint\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static self controller(array $controller)
 * @method static self middleware(string $controller = null)
 * @method static self scope()
 * @method static self path(string $path)
 * @method static self name(string $name)
 * @method static self parent(\WPINT\Framework\Services\Route\Concretes\AdminRoute $parent)
 * @method static self capability(string $capability)
 * @method static self menuTitle(string $menuTitle)
 * @method static self pageTitle(string $pageTitle)
 * @method static self icon(string $icon)
 * @method static self position(int $position)
 * @method register()
 *
 * @see \WPINT\Framework\Services\Route\Concretes\AdminRoute
 */
class AdminRoute extends Facade
{

    protected static function getFacadeAccessor() : string 
    {
        return 'route.admin';   
    }

}