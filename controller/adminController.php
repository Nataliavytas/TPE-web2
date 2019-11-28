<?php
require_once "./view/administrador.php";
require_once "./model/revistasModel.php";
require_once "./view/adminRevistasView.php";
require_once "./model/categoriasModel.php";
require_once "./view/adminCategoriasView.php";
require_once "./view/edicionRevistas.php";
require_once "./view/adminUsuarios.php";
require_once "./model/usuariosModel.php";
require_once "./model/imagenesModel.php";

class adminController {

    private $revistasView;
    private $revistasModel;
    private $categoriasView;
    private $categoriasModel;
    private $administrador;
    private $usuariosModel;
    private $edicionRevistas;
    private $usuariosView;
    private $imagenesModel;

  function __construct() {
      $this->revistasView = new adminRevistasView();
      $this->revistasModel = new revistasModel();
      $this->categoriasModel = new categoriasModel();
      $this->categoriasView = new adminCategoriasView();
      $this->administrador = new administrador();
      $this->usuariosModel = new usuariosModel();
      $this->edicionRevistas = new edicionRevistas();
      $this->usuariosView = new adminUsuarios();
      $this->imagenesModel = new imagenesModel();
  }

//   function Home(){
//       $categorias=$this->categoriasModel->getCategorias();
//       $this->administrador->Home($categorias);
//   }


  function getUser(){
    session_start();

    if(!isset($_SESSION['id_user'])){
        $user = [
            "id" => "null",
            "name" => "Visitante",
            "admin" => "null",
        ];
    }
    else{
        $user = [
            "id" => $_SESSION['id_user'],
            "name" => $_SESSION['username'],
            "admin" =>  $_SESSION['tipo_usuario'],
        ];
    }
    return $user;
}

    function checkLoggedIn(){
        $user = $this->getUser();
     
        if($user["admin"] != 1 ) {
            header('Location: '.HOME);
            die();
        }
    }


    function getRevistas(){
        $this->checkLoggedIn();
        $user = $this->getUser();
        $categorias = $this->categoriasModel->getCategorias();
        $revistas = $this->revistasModel->getRevistas();
        $imagenes = $this->imagenesModel->getImagen();
        $this->revistasView->showRevistas($revistas, $categorias, $imagenes, $user);
    }

    function getCategorias(){
        $this->checkLoggedIn();
        $user = $this->getUser();
        $categorias = $this->categoriasModel->getCategorias();
        $this->categoriasView->showCategorias($categorias, $user);
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
          $imagenes = $this->imagenesModel->getImagenes($id);
          $revistas = $this->revistasModel->getDetalle($id);
          $user = $this->getUser();
          $this->edicionRevistas->showEditor($detalle, $imagenes, $revistas, $user);
    }

    function getUsuarios() {
        $user = $this->getUser();
        $usuarios = $this->usuariosModel->getUsuarios();
        $this->usuariosView->showUsuarios($usuarios, $user);
    }

    function editarUsuario($id){
        $this->usuariosModel->editarUsuario($_POST['tipoCuenta'], $id);
        header("Location: ". USUARIOS);
    }

    function borrarUsuario($id){
        $this->usuariosModel->borrarUsuario($id);
        header("Location: ". USUARIOS);
    }

    function agregarImagen(){
           if ($_FILES['agregarImagen']['type'] == "image/jpeg" || $_FILES['agregarImagen']['type'] == "image/jpg" || $_FILES['agregarImagen']['type'] == "image/png") {
                $this->imagenesModel->agregarImagen($_FILES['agregarImagen'], $_POST['id_revista']);
                header("Location: ". REVISTAS);
           }
           else {
               $this->edicionRevistas->showError("Formato no aceptado");
               die();
    }
  }
}
