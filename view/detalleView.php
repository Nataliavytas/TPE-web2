<?php
require_once('./libs/Smarty.class.php');

class detalleView {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    function showDetalle($detalle){
      //Mas alla de que no usemos el assign en este .php o .tpl, si se usa en el nav.
        $this->smarty->assign('detalle', $detalle);
        $this->smarty->display('templates/detalle.tpl');
      }
    }
?>
