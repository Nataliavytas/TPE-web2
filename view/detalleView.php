<?php
require_once('./libs/Smarty.class.php');

class detalleView {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    function showDetalle($detalle, $revistas){
        $this->smarty->assign('detalle', $detalle);
        $this->smarty->assign('revistas', $revistas); //de que es????

        $this->smarty->display('templates/detalle.tpl');
      }
    }

