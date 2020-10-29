<?php

class AddController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->model = new AddModel();
    }

    public function circle() {
        $params = json_decode(file_get_contents('php://input'));
        $this->model->add('circle', $params);
    }

    public function triangle() {
        $params = json_decode(file_get_contents('php://input'));
        $this->model->add('triangle', $params);
    }
    public function parallelogram() {
        $params = json_decode(file_get_contents('php://input'));
        $this->model->add('parallelogram', $params);
    }

}