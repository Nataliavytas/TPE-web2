<?php
require_once('./libs/Smarty.class.php');
class registroView {

    private $smarty;
  

  function __construct(){
     $this->smarty = new Smarty();
  }

  function showFormularioRegistro($user){
    $this->smarty->assign('user',$user);
    $this->smarty->display('templates/cargaUsuarios.tpl');
  }

  function mensaje($error){
    $this->smarty->assign('error', $error);
    $this->smarty->display('templates/cargaUsuarios.tpl');
  }
  }
