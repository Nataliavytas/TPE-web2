<?php
require_once('./libs/Smarty.class.php');
class administrador {

    private $smarty;

  function __construct(){
     $this->smarty = new Smarty();
  }
   function Home($categorias){
    $this->smarty->assign('categorias', $categorias);
    $this->smarty->display('templates/administrador.tpl');
  }
  }
  //SELECT * FROM `revistas` ORDER BY `revistas`.`id_categoria` DESC para ordenar.
