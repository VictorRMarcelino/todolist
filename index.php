<?php

use routes\Router;

include_once "vendor/autoload.php";

ini_set("display_errors", 1);

Router::getInstance()->callRoute();