<?php 
namespace Wpint\Support;

use Exception;

/**
 * @method \WPINT\Framework\Services\Migration\Migration up()
 * @method \WPINT\Framework\Services\Migration\Migration down()
 * @method \WPINT\Framework\Services\Migration\Migration refresh()
 * 
 * @see \WPINT\Framework\Services\Migration\Migration
 */
final class ClassExtractor
{
    
    /**
     * singleton
     *
     * @var self
     */
    private static self $instance;

    /**
     * get the instance
     *
     * @return Extractor
     */
    public static function getInstance() : self 
    {
        
        if(!self::$instance){
            $instance = new self;
        }   
        return $instance;
    }

    /**
     * get Class name from file path if exists
     *
     * @param [type] $file
     * @param [type] $path
     * @return string
     */
    public static function getClassFromFile($file, $path) : string
    {
        if(is_file($path . $file)) throw new Exception('the file given doesn\'t exist!');
        $className = explode('.', $file);
        return "\\". self::getNamespace($path . '/' . $file).'\\'.$className[0];
    }

    /**
     * get namespace of the calss
     *
     * @param string $src
     * @return string
     */
    public static function getNamespace(string $src) : string
    {
        $contents = file_exists($src) ? file_get_contents($src) : $src;
        if(preg_match('#^namespace\s+(.+?);$#sm', $contents, $m)){
            return $m[1];
        }
        return null;
    }


}