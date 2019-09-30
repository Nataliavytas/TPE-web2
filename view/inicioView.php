<?php
require_once('./libs/Smarty.class.php');

class inicioView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    function Home(){
        $this->smarty->display('templates/inicio.tpl');
      } 
    }