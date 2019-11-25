<?php

require_once("./api/comentariosModel.php");
require_once("./view/JSONView.php");

abstract class ApiController {
    protected $model;
    protected $view;
    private $data; 

    public function __construct() {
        $this->view = new JSONView();
        $this->data = file_get_contents("php://input"); 
        $this->model = new comentariosModel();
    }

    function getData(){ 
        return json_decode($this->data); 
    }  

}

