<?php

namespace App\Helpers;

class Page
{
    public static function part($pageName)
    {
        require_once 'views/components/' . $pageName . '.php';
    }
}
