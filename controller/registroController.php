<?php

require_once "./model/usuariosModel.php";
require_once "./view/registroView.php";


class registroController {


    private $usuariosModel; 
    private $registroView;


  function __construct() {
      $this->usuariosModel = new usuariosModel();
      $this->registroView = new registroView();

  }

  function agregarUsuario(){
    $user= $_POST['email'];
    $password = $_POST['password'];
    $rePassword = $_POST['repetirPassword'];
    $error = "";

    $usuario = [
      "id" => "null",
      "name" => "Visitante",
      "admin" => "null",
    ];

    if((!empty($user))&&(!empty($password))&&(!empty($rePassword))){
        $chequeoUsuario =  $this->usuariosModel->getByEmail($user);

          if($chequeoUsuario['email'] != $user){

            if ($password == $rePassword){

            $hash = password_hash($password, PASSWORD_DEFAULT);
            $this->usuariosModel->agregarUsuario($user, $hash);

            session_start();
            /*$_SESSION['username'] = $user*/
           // $error = "Usuario registrado con exito";
            //$this->registroView->showFormularioRegistro($usuario, $error);
            header('Location: '. REVISTAS2);
             // die();
          }else{
              $error = "Las constraseñas no coinciden.";
              $this->registroView->showFormularioRegistro($usuario, $error);
            }

        }else{
          $error = "El usuario ya esta registrado";
          $this->registroView->showFormularioRegistro($usuario, $error);
        }

      }else{
          $error = "El/los campos esta/n incompleto/s";
          $this->registroView->showFormularioRegistro($usuario, $error);
        }
    }
  /*  function mail($to, $header, $emailbody){
      ini_set ( "SMTP", "sashafranchini@gmail.com" );
      ini_set("smtp_port","25");
      date_default_timezone_set('America/Argentina/Buenos_Airess');
    }*/

    function iniciarSesion(){
      
        $emailUser = $_POST['email'];
        $password = $_POST['password'];
  
        if(!empty($emailUser) && !empty($password)){
  
            $user = $this->usuariosModel->getByEmail($emailUser);

            if((!empty($user)) && password_verify($password, $user["password"])){
              session_start();

              
              $_SESSION['id_user'] = $user["id"];
              $_SESSION['username'] = $user["email"];
              $_SESSION['tipo_usuario'] = $user["tipo_usuario"];
              
                header("Location: ".REVISTAS2);
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
