<?php
require_once "./view/registroView.php";
require_once "./model/usuariosModel.php";


class registroController {

    private $registroView;
    private $usuariosModel;


  function __construct() {
      $this->registroView = new registroView();
      $this->usuariosModel = new usuariosModel();

  }

  function registrarse(){
    $this->registroView->showFormularioRegistro();
  }

  function agregarUsuario(){
    $user= $_POST['email'];
    $password = $_POST['password'];
    $rePassword = $_POST['rePassword'];
    $error = "";
    if((!empty($user))&&(!empty($password))&&(!empty($rePassword))){
        $chequeoUsuario =  $this->usuarioModel->VerificarUsuario($user);
          if($chequeoUsuario[0]['email'] != $user){
            if ($pass == $rePass){
            $this->usuariosModel->agregarUsuario($user, $password);
            session_start();
            /*$_SESSION['username'] = $user*/
            header("Location: " . LOGIN);
            }else{
              $error = "Las constraseñas no coinciden.";
              $this->registroView->mensaje($error);
            }
        }else{
          $error = "El usuario ya esta registrado";
          $this->registroView->mensaje($error);
        }
      }else{
          $error = "El/los campos esta/n incompleto/s";
          $this->registroView->mensaje($error);
        }
    }
  }
