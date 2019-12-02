<?php
require_once('./libs/Smarty.class.php');

class detalleView {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    function showDetalle($detalle, $imagenes, $user, $categorias){
        $this->smarty->assign('detalle', $detalle);
        $this->smarty->assign('imagenes', $imagenes);
        $this->smarty->assign('user', $user);
        $this->smarty->assign('categorias', $categorias);

        $this->smarty->display('templates/detalle.tpl');
      }
    }
