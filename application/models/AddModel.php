<?php

class AddModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function add($type, $params) {
        $this->db->addFigure($type);
        $lastEntryFigure = $this->db->getLastEntry('figures');
        foreach ($params as $key => $param) {
            if ($key == 'points') {     
                foreach ($param as $point) {
                    $this->db->addPoint(floatval($point->x), floatval($point->y));
                    $lastEntryPoint = $this->db->getLastEntry('points');
                    $this->db->addParam($lastEntryFigure['id'], 'point', $lastEntryPoint['id']);
                }
            } else {
                $this->db->addParam($lastEntryFigure['id'], $key, floatval($param));
            }
        }

    }

}