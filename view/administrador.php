<?php
require_once('./libs/Smarty.class.php');
class adminView {

    private $smarty;

  function __construct(){
     $this->smarty = new Smarty();
  }
   function showLogin(){
    $this->smarty->assign('titulo', "login");
    $this->smarty->assign('BASE_URL', BASE_URL);
    $this->smarty->display('templates/administrador.tpl');
  }
  }
  //SELECT * FROM `revistas` ORDER BY `revistas`.`id_categoria` DESC para ordenar.
