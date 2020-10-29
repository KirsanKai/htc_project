<?php

define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("CONTROLLER_PATH", ROOT . "/application/controllers/");
define("MODEL_PATH", ROOT . "/application/models/");
define("VIEW_PATH", ROOT . "/application/views/");

require_once ROOT . "/application/DB.php";
require_once ROOT . "/application/Router.php";
require_once CONTROLLER_PATH . "Controller.php";
require_once MODEL_PATH . "Model.php";
require_once VIEW_PATH . "View.php";

Router::start();
