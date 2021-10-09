<?php
/**
 * @author : Ibrahim Elsawaf
 * @created Date : 10/8/2021
 * @project : jumia-exercise
 */

namespace App\helpers;

use Exception;

class Router
{
    protected array $routes = [
        'GET' => []
    ];

    public static function load(string $file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    /**
     * @throws Exception
     */
    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(...explode('@', $this->routes[$requestType][$uri]));
        }

        return $this->callAction(...explode('@', 'NotFoundPageController@index'));
    }


    /**
     * @throws Exception
     */
    protected function callAction(string $controller, string $action)
    {
        $controller = "App\\controller\\$controller";
        $controller = new $controller;

        if (!method_exists($controller, $action)) {
            throw new Exception("$controller does not respond to $action action.");
        }

        return $controller->$action();
    }
}