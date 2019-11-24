<?php
require_once('./libs/Smarty.class.php');

class edicionRevistas {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    function showEditor($detalle){
        $this->smarty->assign('detalle', $detalle);

        $this->smarty->display('templates/edicionRevista.tpl');
      }
    }
