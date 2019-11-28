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
    $rePassword = $_POST['repetirPassword'];
    $error = "";
    if((!empty($user))&&(!empty($password))&&(!empty($rePassword))){
        $chequeoUsuario =  $this->usuariosModel->getByEmail($user);
          if($chequeoUsuario['email'] !== $user){
            if ($password == $rePassword){
            $this->usuariosModel->agregarUsuario($user, $password);
            session_start();
            /*$_SESSION['username'] = $user*/
            header("Locations: " . HOME);
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

    function iniciarSesion(){
      
        $emailUser = $_POST['email'];
        $password = $_POST['password'];
  
        if(!empty($emailUser) && !empty($password)){
  
            $user = $this->usuariosModel->getByEmail($emailUser);
          

            if((!empty($user)) && password_verify($password, $user->password)){
              session_start();
  
              $_SESSION['id_user'] = $user->id;
              $_SESSION['username'] = $user->email;
              $_SESSION['tipo_usuario'] = $user->tipo_usuario;

              if($user->tipo_usuario == 1 || $user->tipo_usuario == 0 ){
                header("Location: ".REVISTAS);
              }else{
                header("Location: " .HOME);
              }
            }else{
              header("Location: " .HOME);
            }
        }else {
          header("Location: " .HOME);
        }      
    }
    
    function logout(){
      session_start();
      session_destroy();
      header("Location: ".HOME);
  }


  }
