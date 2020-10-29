<?php

abstract class BaseFigure {
    
    public $id;
    public $points;

    public function __construct($id, $points) {
        $this->id = $id;
        $this->points = $points;
        $this->area = $this->getArea();
    }

    abstract function getArea();

}