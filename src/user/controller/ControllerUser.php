<?php

namespace src\user\controller;

/**
 * Controller User
 * @package    user
 * @subpackage controller
 * @author     VictorRamos <httpsvictorramos@gmail.com>
 * @since      17/04/2025
 */
class ControllerUser {

    /**
     * Return the file of the view to register a new user
     */
    public function getViewRegister() {
        include_once $_SERVER['DOCUMENT_ROOT'] . "/resources/views/ViewRegister.php";
    }
}