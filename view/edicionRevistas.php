<?php
require_once('./libs/Smarty.class.php');

class edicionRevistas {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    function showEditor($detalle, $imagenes, $user, $categorias, $id){
        $this->smarty->assign('user', $user);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('detalle', $detalle);
        $this->smarty->assign('id', $id);
        $this->smarty->assign('imagenes', $imagenes); //LE AGREGUE ESTE ASI FUNCIONABA LAS IMAGENES EN EL TPL DE EDICION

        $this->smarty->display('templates/edicionRevista.tpl');
      }
      
      function showError($mensaje){
        echo $mensaje;
      }
    }
