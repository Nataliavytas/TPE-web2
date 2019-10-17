<?php
require_once "./view/administrador.php";
require_once "./model/revistasModel.php";
require_once "./view/adminRevistasView.php";
require_once "./model/categoriasModel.php";
require_once "./view/adminCategoriasView.php";

define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');
define('LOGIN', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/admin');
define('REVISTAS', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/revistas');


class adminController {


  private $revistasView;
  private $revistasModel;
  private $categoriasView;
  private $categoriasModel;
  private $adminView;

  function __construct()
  {

    $this->revistasView = new adminRevistasView();
    $this->revistasModel = new revistasModel();
    $this->categoriasModel = new categoriasModel();
    $this->categoriasView = new adminCategoriasView();
    $this->adminView = new adminView();
  }

  function getRevistas(){
    $revistas = $this->revistasModel->getRevistas();
    $this->revistasView->showRevistas($revistas);
  }

  function getCategorias(){
    $categorias = $this->categoriasModel->getCategorias();
    $this->categoriasView->showCategorias($categorias);
  }

  function Home(){
    $this->adminView->Home();
  }

  function verifyUser(){
    $emailUser = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($emailUser) && !empty($password)){
  
        $user = $this->adminModel->getByEmail($emailUser);

        if((!empty($user)) && password_verify($password, $user['password'])){
          session_start();
          $_SESSION['id_user'] = $user->id; 
          $_SESSION['username'] = $user->email; 

          header("Location: ".REVISTAS);
          die();
        }
    }else { 
      $ups = ('fallo todo'); 
      echo $ups; 
    }
  }
}
