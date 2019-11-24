<?php
require_once('./libs/Smarty.class.php');

class detalleView {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    function showDetalle($comentarios, $detalle, $revistas){
        $this->smarty->assign('detalle', $detalle);
        $this->smarty->assign('revistas', $revistas); //de que es????
        $this->smarty->assign('comentarios', $comentarios);

        $this->smarty->display('templates/detalle.tpl');
      }

   function showImagenes($imagenes){
     $this->smarty->assign('imagenes', $imagenes);
     $this->smarty->display('templates/detalle.tpl');
   }
    }
