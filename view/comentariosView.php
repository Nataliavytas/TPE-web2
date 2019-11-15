<?php
require_once('./libs/Smarty.class.php');

class comentariosView {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
   function showComentario($revistas, $comentarios){
     $this->smarty->assign('revistas', $revistas);
     $this->smarty->assign('comentarios', $comentarios);

     $this->smary->display('templates/comentarios.tpl');
   }
    }
?>
