<?php

/**
 * Created by PhpStorm.
 * User: justi
 * Date: 2016-10-01
 * Time: 13:31
 */

class Router
{
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file) {
        $router = new static;
        require $file;
        return $router;
    }

    public function get($uri, $controller) {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller) {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType) {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri]));
        }
        throw new Exception('No route define for URI');
    }

    protected function callAction($controller, $action) {
        $controller = new $controller;

        if (! method_exists($controller, $action)) {
            throw new Exception(
                "{$controller} does not respond to the {$action}"
            );
        }
        //die(var_dump($controller, $action));
        return $controller->$action();
    }
}