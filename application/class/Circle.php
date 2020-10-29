<?php

require_once 'BaseFigure.php';

class Circle extends BaseFigure {

    public $radius;

    public function __construct($id, $points, $params) {
        $this->radius = $params['radius']; 
        parent::__construct($id, $points);
    }

    public function getArea() {
        return $this->radius * $this->radius * 3.14;
    }

}