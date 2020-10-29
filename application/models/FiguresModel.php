<?php 

class FiguresModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function show() {
        $result = [];
        $dbFigures = $this->db->getFigures();
        if ($dbFigures) {
            foreach ($dbFigures as $figure) {
                $dbParams = $this->db->getParams($figure['id']);
                $params = [];
                $points = [];
                foreach ($dbParams as $param) {
                    if ($param['type'] == 'point') {
                        $point = $this->db->getPoint($param['value']);
                        $points[] = new Point($point);
                    } else {
                        $params[$param['type']] = $param['value'];
                    }
                }
                $typeClass = ucfirst($figure['type']);
                $result[$figure['type']][] = new $typeClass($figure['id'], $points, $params); 
            }
            return (object) $result;
        }
        return null;
    }

}