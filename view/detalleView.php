<?php
require_once('./libs/Smarty.class.php');

class detalleView {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    function showDetalle($comentarios, $detalle, $revistas){
        $this->smarty->assign('detalle', $detalle);
        $this->smarty->assign('revistas', $revistas);
        $this->smarty->assign('comentarios', $comentarios);

        $this->smarty->display('templates/detalle.tpl');
      }
    }
?>
