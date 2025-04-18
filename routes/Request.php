<?php

namespace Routes;

/**
 * Request
 * @package routes
 * @author  VictorRamos <httpsvictorramos@gmail.com>
 * @since   17/04/2025
 */
class Request {
    private $method;
    private $uri;

    public function __construct() {
        $this->method = strtolower($_SERVER["REQUEST_METHOD"]);
        $this->uri = $_SERVER["REQUEST_URI"];
    }

    /**
     * Get the value of method
     * @return string
     */ 
    public function getMethod(){
        return $this->method;
    }

    /**
     * Get the value of uri
     * @return string
     */ 
    public function getUri(){
        return $this->uri;
    }

    /**
     * Return a static instance of Request
     * @return Request|null
     */
    public static function getInstance() {
        static $instance = null;

        if (!@isset($instance)) {
            $instance = new Request();
        }

        return $instance;
    }
}