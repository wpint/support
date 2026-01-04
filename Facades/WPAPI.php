<?php 
namespace Wpint\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Wpint\WPAPI\Setting\Setting setting()
 * @method static \Wpint\WPAPI\Shortcode\Shortcode shortcode()
 * @method static \Wpint\WPAPI\PostType\PostType postType()
 * @method static \Wpint\WPAPI\Taxonomy\Taxonomy taxonomy()
 * @method static \Wpint\WPAPI\Cron\Cron cron()
 * @method static \Wpint\WPAPI\Metabox\Metabox metabox()
 * @method static \Wpint\WPAPI\Hook\Hook hook()
 * @method static \Wpint\WPAPI\Enqueuer\Enqueuer enqueuer()
 *
 * @see \Wpint\WPAPI\WPAPI
 */
class WPAPI extends Facade
{

    protected static function getFacadeAccessor() : string 
    {
        return "wpapi";   
    }

}