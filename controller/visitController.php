<?php
require_once "./view/revistasView.php";
require_once  "./view/detalleView.php";
require_once  "./model/revistasModel.php";
require_once "./api/comentariosModel.php";
require_once "./model/categoriasModel.php";
require_once "./model/imagenesModel.php";
require_once "./view/inicioView.php";
require_once "./view/header.php";
require_once "./view/revistasPorCategoria.php";


class visitController{

  private $categoriasModel;
  private $revistasModel;
  private $imagenesModel;
  private $revistasView;
  private $detalleView;
  private $inicioView;
  private $header;
  private $revPorCategoriaView;
  private $detalle;
  private $comentariosModel;

  function __construct(){

    $this->inicioView = new inicioView();
    $this->revistasModel = new revistasModel();
    $this->revistasView = new revistasView();
    $this->header  = new header();
    $this->categoriasModel = new categoriasModel();
    $this->imagenesModel = new imagenesModel();
    $this->detalleView = new detalleView();
    $this->revPorCategoriaView = new revistasPorCategoria();
    $this->comentariosModel = new comentariosModel();

  }


  function getRevistas(){
    $user = $this->getUser();
    $categorias = $this->categoriasModel->getCategorias();
    $revistas = $this->revistasModel->getRevistas();
    $this->revistasView->showRevistas($revistas,$categorias, $user);
  }

  function getCategorias(){
    $user = $this->getUser();
    $categorias = $this->categoriasModel->getCategorias();
    $this->header->showCategorias($categorias, $user);
  }

  function Home(){
    $this->inicioView->Home();
  }

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

  function mostrarDetalle($id){
    $detalle =  $this->revistasModel->getDetalle($id);
    $imagenes = $this->imagenesModel->getImagenes($id);
    $user = $this->getUser();
    $this->detalleView->showDetalle($detalle, $imagenes, $user);
  }

  function getRevistasPorCategoria($id){
      $categorias = $this->categoriasModel->getCategorias();
      $revistas = $this->revistasModel->filtroPorCategoria($id);
      $user = $this->getUser();
      $this->revPorCategoriaView->showRevistasCategoria($revistas, $categorias, $user);
  }

}
