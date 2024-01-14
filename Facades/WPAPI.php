<?php 
namespace Wpint\Support\Facades;

use Wpint\Support\Facade;

/**
 * @method static \WPINT\Framework\Services\WPAPI\Setting\Setting setting()
 * @method static \WPINT\Framework\Services\WPAPI\Shortcode\Shortcode shortcode()
 * @method static \WPINT\Framework\Services\WPAPI\PostType\PostType postType()
 * @method static \WPINT\Framework\Services\WPAPI\Taxonomy\Taxonomy taxonomy()
 * @method static \WPINT\Framework\Services\WPAPI\Cron\Cron cron()
 * @method static \WPINT\Framework\Services\WPAPI\Metabox\Metabox metabox()
 * @method static \WPINT\Framework\Services\WPAPI\Hook\Hook hook()
 * @method static \WPINT\Framework\Services\WPAPI\Enqueuer\Enqueuer enqueuer()
 *
 * @see \WPINT\Framework\Services\WPAPI\WPAPI
 */
class WPAPI extends Facade
{

    protected static function getFacadeAccessor() : string 
    {
        return "wpapi";   
    }

}