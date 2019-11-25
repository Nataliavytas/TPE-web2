<?php
require_once('./libs/Smarty.class.php');

class edicionRevistas {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    function showEditor($detalle, $imagenes, $revistas){
        $this->smarty->assign('detalle', $detalle);
        $this->smarty->assign('imagenes', $imagenes); //LE AGREGUE ESTE ASI FUNCIONABA LAS IMAGENES EN EL TPL DE EDICION
        $this->smarty->assign('revistas', $revistas); //para poder seleccionar la revista y cargue el id correcto

        $this->smarty->display('templates/edicionRevista.tpl');
      }
      function showError($mensaje){
        echo $mensaje;
      }
    }
