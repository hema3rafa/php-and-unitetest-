<?php

namespace bootstrap;

use Exception;

class App
{
    protected static array $bindings;

    /**
     * @param string $key
     * @param $value
     */
    public static function bind(string $key, $value)
    {
        static::$bindings[$key] = $value;
    }


    /**
     * @param string $key
     * @throws Exception
     */
    public static function get(string $key)
    {
        if (!array_key_exists($key, static::$bindings)) {

            throw new Exception("No $key bound in the container");
        }

        return static::$bindings[$key];
    }
}