<?php
require_once "./view/administrador.php";
require_once "./model/revistasModel.php";
require_once "./view/adminRevistasView.php";
require_once "./model/categoriasModel.php";
require_once "./view/adminCategoriasView.php";
require_once "./model/adminModel.php";

class adminController {

    private $revistasView;
    private $revistasModel;
    private $categoriasView;
    private $categoriasModel;
    private $administrador;
    private $adminModel;

  function __construct() {
      $this->revistasView = new adminRevistasView();
      $this->revistasModel = new revistasModel();
      $this->categoriasModel = new categoriasModel();
      $this->categoriasView = new adminCategoriasView();
      $this->administrador = new administrador();
      $this->adminModel = new adminModel();
  }

  function getRevistas(){ //Trae tambien categorias, cambiar nombre. 
      $categorias = $this->categoriasModel->getCategorias();
      $revistas = $this->revistasModel->getRevistas();
      $this->revistasView->showRevistas($revistas, $categorias);
  }

  function getCategorias(){
      $categorias = $this->categoriasModel->getCategorias();
      $this->categoriasView->showCategorias($categorias);
  }

  function Home(){
      $categorias=$this->categoriasModel->getCategorias();
      $this->administrador->Home($categorias);
  }

  function iniciarSesion(){
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
        header("Location: " .LOGIN);
      }
  }

  function agregarRevista(){
     $this->revistasModel->insertarRevista($_POST['titulo'],$_POST['descripcion'],$_POST['fecha'],$_POST['categoria'] );
     header("Location: " .REVISTAS);
  }
  
   function borrarRevista($id){
     $this->revistasModel->borrarRevista($id);
     header("Location: " . REVISTAS);
  } 
    function editarRevista($id){
        var_dump($id);
        $this->revistasModel->editarRevista($id, $_POST['titulo'],$_POST['descripcion'], $_POST['fecha'], $_POST['categoria']);
        header("Location: ".REVISTAS);
    }

    function agregarCategoria(){
        $this->categoriasModel->agregarCategoria($_POST['nombreCat']);
         header("Location: ".CATEGORIAS);
    }

     /* function editarRevista(){}
     function agregarCategoria(){}
     function borrarCategoria(){}
     function editarCategoria(){}
     lo referente a la sesion
    */
}