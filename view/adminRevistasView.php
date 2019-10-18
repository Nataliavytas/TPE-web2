<?php
require_once('./libs/Smarty.class.php');
class adminRevistasView {

    private $smarty;

  function __construct(){
     $this->smarty = new Smarty();
  }

   function showRevistas($revistas, $categorias){

    $this->smarty->assign('revistas',$revistas);
    $this->smarty->assign('categorias', $categorias);
    $this->smarty->display('templates/administradorRevistas.tpl');
  
  
    }

}

