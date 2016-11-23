<?php

/**
 * Created by PhpStorm.
 * User: justi
 * Date: 2016-10-18
 * Time: 15:03
 */

class App
{
    protected static $registry = [];
    public static function bind($key, $value) {
        static::$registry[$key] = $value;
    }

    public static function get($key) {
        if (! array_key_exists($key, static::$registry)) {
            throw new Exception("No {$key} is bound in the container.");
        }
        return static::$registry[$key];
    }
}