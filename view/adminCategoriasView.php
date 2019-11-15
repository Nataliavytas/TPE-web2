<?php
require_once('./libs/Smarty.class.php');
class adminCategoriasView {

    private $smarty;

  function __construct(){
     $this->smarty = new Smarty();
  }
  
   function showCategorias($categorias){
    $this->smarty->assign('categorias', $categorias);
    $this->smarty->display('templates/administradorCategorias.tpl');
  }
  }

  //SELECT * FROM `revistas` ORDER BY `revistas`.`id_categoria` DESC para ordenar.
