<?php

namespace App;

class App 
{

    private static $entries = [];

    public static function set($key, $value)
    {
        static::$entries[$key] = $value;
    }

    public static function get($key, $default = null)
    {
        return static::$entries[$key] ?? $default;
    }

}