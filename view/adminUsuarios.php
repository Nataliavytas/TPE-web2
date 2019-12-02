<?php
require_once('./libs/Smarty.class.php');
class adminUsuarios {

    private $smarty;

  function __construct(){
     $this->smarty = new Smarty();
  }
   function showUsuarios($usuarios, $user){
    $this->smarty->assign('user', $user);
    $this->smarty->assign('usuarios', $usuarios);
    $this->smarty->display('templates/administradorUsuarios.tpl');
  }
  }