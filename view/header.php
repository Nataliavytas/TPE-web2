<?php
require_once('./libs/Smarty.class.php');
class header {

  private $smarty;

function __construct(){
   $this->smarty = new Smarty();
}
   function showCategorias($categorias){
    $this->smarty->assign('categorias', $categorias);
    $this->smarty->display('templates\header.tpl');
  }
  }
  ?>
