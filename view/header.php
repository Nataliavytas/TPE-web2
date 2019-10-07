<?php
require_once('./libs/Smarty.class.php');
class header {

  private $smarty;

function __construct(){
   $this->smarty = new Smarty();
}
   function showCategorias($cat){
    $this->smarty->assign('cat', $cat);
    $this->smarty->display('templates\header.tpl');
  }
  }
  ?>
