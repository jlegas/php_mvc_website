<?php

/**
 * Created by PhpStorm.
 * User: justi
 * Date: 2016-10-01
 * Time: 14:14
 */
class Request
{
    public static function uri() {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function method() {
        return $_SERVER['REQUEST_METHOD'];
    }
}