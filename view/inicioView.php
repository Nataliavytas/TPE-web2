<?php
require_once('./libs/Smarty.class.php');

class inicioView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    function Home($categorias){
      //Mas alla de que no usemos el assign en este .php o .tpl, si se usa en el nav.
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/inicio.tpl');
      }
    }
