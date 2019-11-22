<?php
require_once "./view/administrador.php";
require_once "./model/revistasModel.php";
require_once "./view/adminRevistasView.php";
require_once "./model/categoriasModel.php";
require_once "./view/adminCategoriasView.php";
require_once "./view/edicionRevistas.php";
require_once "./model/usuariosModel.php";

class adminController {

    private $revistasView;
    private $revistasModel;
    private $categoriasView;
    private $categoriasModel;
    private $administrador;
    private $usuariosModel;
    private $edicionRevistas;

  function __construct() {
      $this->revistasView = new adminRevistasView();
      $this->revistasModel = new revistasModel();
      $this->categoriasModel = new categoriasModel();
      $this->categoriasView = new adminCategoriasView();
      $this->administrador = new administrador();
      $this->usuariosModel = new usuariosModel();
      $this->edicionRevistas = new edicionRevistas();
  }

  function Home(){
      $categorias=$this->categoriasModel->getCategorias();
      $this->administrador->Home($categorias);
  }

  function iniciarSesion(){
    session_start();

      $emailUser = $_POST['email'];
      $password = $_POST['password'];

      if(!empty($emailUser) && !empty($password)){

          $user = $this->usuariosModel->getByEmail($emailUser);

          if((!empty($user)) && password_verify($password, $user->password)){
            session_start();

            $_SESSION['id_user'] = $user->id;
            $_SESSION['username'] = $user->email;

            header("Location: ".REVISTAS);
          }else{
            header("Location: " .LOGIN);
          }
      }else {
        header("Location: " .LOGIN);
      }
  }
    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION['id_user'])) {
            header('Location: '.LOGIN);
            die();
        }
    }

    function logout(){
        session_start();
        session_destroy();
        header("Location: ".LOGIN);
    }

    function getRevistas(){
        $this->checkLoggedIn();

        $categorias = $this->categoriasModel->getCategorias();
        $revistas = $this->revistasModel->getRevistas();
        $this->revistasView->showRevistas($revistas, $categorias);
    }

    function getCategorias(){
        $this->checkLoggedIn();

        $categorias = $this->categoriasModel->getCategorias();
        $this->categoriasView->showCategorias($categorias);
    }

    function agregarRevista(){
        $this->revistasModel->insertarRevista($_POST['titulo'], $_POST['fecha'], $_POST['descripcion'], $_POST['categoria'] );
        header("Location: " .REVISTAS);
    }

   function borrarRevista($id){
     $this->revistasModel->borrarRevista($id);
     header("Location: " . REVISTAS);
    }

    function editarRevista($id){
        $this->revistasModel->editarRevista($_POST['titulo'], $_POST['fecha'], $_POST['descripcion'], $id);
        header("Location: ". REVISTAS);

    }

    function agregarCategoria(){
        $this->categoriasModel->agregarCategoria($_POST['nombreCat']);
         header("Location: ". CATEGORIAS);
    }

    function borrarCategoria($id){
        $this->categoriasModel->borrarCategoria($id);
        header("Location: ".CATEGORIAS);
    }
    function editarCategoria($id){
        $this->categoriasModel->editarCategoria($id, $_POST['editaCategoria']);
        header("Location: ". CATEGORIAS);
  }
    function getDetalleEdicion($id){

          $detalle =  $this->revistasModel->getDetalle($id);

          $this->edicionRevistas->showEditor($detalle);
    }
}