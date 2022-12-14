<?php

namespace App\Services;

class Router
{
    private static $list = [];

    public static function page(string $uri, string $pageName)
    {
        self::$list[] = [
            'uri' => $uri,
            'page' => $pageName,
        ];
    }

    public static function enable()
    {
        $query = $_GET['q'];

        foreach (self::$list as $route) {
            if ($route['uri'] === '/' . $query) {
                require_once "views/pages/" . $route['page'] . ".php";
                die();
            }
        }
        self::notFoundPage();
    }

    private static function notFoundPage()
    {
        require_once "views/pages/not_found.php";
    }
}
