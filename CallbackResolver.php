<?php 
namespace Wpint\Support;

use \Illuminate\Support\Str;
use ReflectionFunction;
use ReflectionMethod;

class CallbackResolver
{

    public function __construct(
        private $callback,
        private $params,
        private $match
    ) {
        $exported = self::export($this->callback, $this->params, $this->match);
        $this->callback =   $exported['callback'];
        $this->params   =   $exported['params'];
    }

    /**
     * Get Callback to fire in the client's app
     *
     * @return array|callable|null
     */
    public function getCallback() : array|callable|null
    {
        return $this->callback ?? null;
    }

    /**
     * Get params
     *
     * @return array|null
     */
    public function getParams() : array|null
    {
        return $this->params ?? null;
    }

    /**
     * Check if params must be matched to the given callback or not
     *
     * @return boolean
     */
    public function isMatched() : bool
    {
        return $this->match;
    }

    /**
     * Resolve the given callback with any accepted callback type by container's call method 
     *
     * @param [type] $callback
     * @param array $args
     * @return mixed
     */
    public static function call($callback, $args = [], $matching = true) : mixed
    {
        
        $exported = self::export($callback, $args, $matching);
        return app()->call($exported['callback'], $exported['params']);
    }

    /**
     * Export the proper callback to defer calling by the client
     *
     * @param [type] $callback
     * @param array $args
     * @param boolean $matching
     * @return mixed
     */
    public static function export($callback, $args = [], $matching = true) : mixed
    {
        
        if( ! self::isCallableClosure($callback))
        {
            $callback = self::makeUp($callback);
            $info = new ReflectionMethod($callback[0], $callback[1]);
            $callback = [
                'class'     =>  $callback[0],
                'method'    =>  $callback[1]
            ];
        }
        else {
            $info = new ReflectionFunction($callback);
        }

        $params = $matching ? self::matchTheparamsWithGivenArgs($info->getParameters(), $args) : $args;
        
        return [
            'callback'  =>  $callback, 
            'params'    =>  $params
        ];
    }

    /**
     * Makeup the callback to a valid callable array for container's call() method.
     *
     * @param string $callback
     * @return mixed
     */
    public static function makeUp($callback)
    {
        if(self::isCallableArray($callback)) return $callback;
        if(self::isCallableWithAtSign($callback)) return self::makeUpFromString($callback);
        return false;
    }

    /**
     * Undocumented function
     *
     * @param [type] $callback
     * @return boolean
     */
    public static function isCallableClosure($callback) : bool
    {
        return $callback instanceof \Closure;
    }

    /**
     * Determine if the given callback is an array with valid two params.
     *
     * @param [type] $callback
     * @return boolean
     */
    public static function isCallableArray($callback) : bool
    {
        return is_array($callback) && isset($callback[0]) && isset($callback[1]);
    }

    /**
     * Determine if the given string is in Class@method syntax.
     *
     * @param  mixed  $callback
     * @return bool
     */
    public static function isCallableWithAtSign($callback)
    {
        return is_string($callback) && str_contains($callback, '@');
    }

    /**
     * Make up the array from string callback with @.
     *
     * @param [type] $callback
     * @return void
     */
    protected static function makeUpFromString($callback)
    {
        return [
            Str::before($callback, '@'),
            Str::after($callback, '@')
        ];
    }

    /**
     * Match the callback params with the given arguments.
     *
     * @param [type] $reflectedParams
     * @param [type] $args
     * @return array
     */
    protected static function matchTheparamsWithGivenArgs($reflectedParams, $args) : array
    {
        $keys =  collect($reflectedParams)->pluck('name');
        $values = collect($args);

        // method parameters and args must be same length
        if($keys->count() != $values->count()) return [];
        return $keys->combine($values)->toArray();
    }

}