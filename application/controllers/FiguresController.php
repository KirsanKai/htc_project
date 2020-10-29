<?php

class FiguresController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->model = new FiguresModel();
    }

    public function show() {
        $result = $this->model->show();
        if ($result) {
            echo json_encode((object) $result);
        } else {
            echo json_encode(null);
        }
    }

}