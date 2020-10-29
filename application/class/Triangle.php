<?php

require_once 'BaseFigure.php';

class Triangle extends BaseFigure {

    public function __construct($id, $points) {
        parent::__construct($id, $points);
    }

    public function getArea() {
        return abs((($this->points[0]->x - $this->points[2]->x) * ($this->points[1]->y - $this->points[2]->y) - ($this->points[1]->x - $this->points[2]->x) * ($this->points[0]->y - $this->points[2]->y))) / 2;
    }

}