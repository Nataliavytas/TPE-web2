<?php
require_once('./libs/Smarty.class.php');
class adminView{

    private $smarty;

  function __construct(){
     $this->smarty = new Smarty();
  }
   function Home(){
    $this->smarty->display('templates/administrador.tpl');
    }
  }
