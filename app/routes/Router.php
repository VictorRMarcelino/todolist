<?php

namespace app\routes;

class Router {
    private const routes = [
        'get' => [],
        'post' => []
    ];

    public static function get($sRoute) {
        $aGetRoutes = self::routes['get'];

        if (isset($aGetRoutes[$sRoute])) {
        }
    }

    public static function post($sRoute) {
        $aPostRoutes = self::routes['post'];
        
        if (isset($aGetRoutes[$sRoute])) {
            
        }
    }
}