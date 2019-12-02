<?php
require_once('./libs/Smarty.class.php');
class revistasView {

    private $smarty;

  function __construct(){
     $this->smarty = new Smarty();
  }
   function showRevistas($revistas,$categorias, $user){

    $this->smarty->assign('revistas',$revistas);
    $this->smarty->assign('categorias', $categorias);
    $this->smarty->assign('user', $user);
    $this->smarty->display('templates/visitRevistas.tpl');
  }
  }
  //SELECT * FROM `revistas` ORDER BY `revistas`.`id_categoria` DESC para ordenar.
