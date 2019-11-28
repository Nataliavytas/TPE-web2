<?php

require_once('./libs/Smarty.class.php');

Class revistasPorCategoria{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showRevistasCategoria($revistas, $categorias, $user){
        $this->smarty->assign('user', $user);
        $this->smarty->assign('revistas', $revistas);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/revistasCategoria.tpl');
    }
}