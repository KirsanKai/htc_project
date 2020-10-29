<?php

class IndexController extends Controller {

    private $pageHTML = '/application/views/IndexHTML.php';

    public function __construct() {
        parent::__construct();
        $this->model = new IndexModel();
    }

    public function index() {
        $this->view->render($this->pageHTML);
    }

}