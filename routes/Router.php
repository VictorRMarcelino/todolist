<?php

namespace routes;

/**
 * Router
 * @package routes
 * @author  VictorRamos <httpsvictorramos@gmail.com>
 * @since   17/04/2025
 */
class Router {

    protected $routes = [
        "get"=> [
            "/user/register" => "user\\controller\\ControllerUser::getViewRegister"
        ],
    ];

    /**
     * Return a static instance of Router
     * @return Router
     */
    public static function getInstance() {
        static $instance = null;

        if (!isset($instance)) {
            $instance = new Router();
        }

        return $instance;
    }

    /**
     * Call the route
     */
    public function callRoute() {
        $aRoutes = $this->routes[Request::getInstance()->getMethod()];
        $sRoute = Request::getInstance()->getUri();

        if (isset($aRoutes[$sRoute])) {
            $aRouteData = explode('::', $aRoutes[$sRoute]);
            $sPathInstance = 'src\\' . $aRouteData[0];
            $oInstance = new $sPathInstance();
            $sMethod = $aRouteData[1];
            call_user_func([$oInstance, $sMethod]);
        } else {
            $this->loadRouteError404();
        }
    }

    /**
     * Load the page when a route don't exist 
     */
    protected function loadRouteError404() {
        include_once $_SERVER['DOCUMENT_ROOT'] . "/resources/views/ViewPageNotFound.php";
    }
}