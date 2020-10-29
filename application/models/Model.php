<?php

spl_autoload_register(function ($class_name) {
    include ROOT . '/application/class/'. $class_name . '.php';
});

class Model {

    protected $db;

    public function __construct() {
        $this->db = new DB();
    }

}