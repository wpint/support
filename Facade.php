<?php 
namespace Wpint\Support;

use Illuminate\Support\Facades\Facade as FacadesFacade;
use Wpint\Support\Facades\AdminRoute;
use Wpint\Support\Facades\AjaxRoute;
use Wpint\Support\Facades\JWT;
use Wpint\Support\Facades\RestRoute;
use Wpint\Support\Facades\WebRoute;
use Wpint\Support\Facades\WPAPI;
use Wpint\Support\Facades\WPFile;
use Wpint\Support\Facades\WPFileDirect;

class Facade extends FacadesFacade
{

    /**
     * Get the application default aliases.
     *
     * @return \Illuminate\Support\Collection
     */
    public static function defaultAliases()
    {
        return parent::defaultAliases()->merge([
            'wpapi'             =>  WPAPI::class,
            'wp.file.base'      =>  WPFile::class,
            'wp.file.direct'    =>  WPFileDirect::class,
        ]);
    }

}