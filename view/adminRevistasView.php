<?php
require_once('./libs/Smarty.class.php');
class adminRevistasView {

    private $smarty;

  function __construct(){
     $this->smarty = new Smarty();
  }
   function showRevistas($revistas, $categorias, $imagenes, $user){

    $this->smarty->assign('user', $user);
    $this->smarty->assign('revistas', $revistas);
    $this->smarty->assign('categorias', $categorias);
    $this->smarty->assign('imagenes', $imagenes);//esto esta para el value en los inputs de imagen.
    $this->smarty->display('templates/administradorRevistas.tpl');

    }

}
