<?php

class Point {
    
    public $x;
    public $y;

    public function __construct($options) {
        $this->x = $options['x'];
        $this->y = $options['y'];
    }
}