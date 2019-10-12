<?php
require_once('./libs/Smarty.class.php');
class header {

  private $smarty;

function __construct(){
   $this->smarty = new Smarty();
}
   function showRevistas($revistas, $categorias){
    $this->smarty->assign('categorias', $categorias);
    $this->smarty->assign('revistas', $revistas);
    $this->smarty->display('templates\header.tpl');

  }

  }
  ?>
