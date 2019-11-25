<?php
require_once('./libs/Smarty.class.php');
class adminUsuarios {

    private $smarty;

  function __construct(){
     $this->smarty = new Smarty();
  }
   function showUsuarios($usuarios){

    $this->smarty->assign('usuarios', $usuarios);
    $this->smarty->display('templates/administradorUsuarios.tpl');
  }
  }