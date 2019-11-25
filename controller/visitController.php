<?php
require_once "./view/revistasView.php";
require_once  "./view/detalleView.php";
require_once  "./model/revistasModel.php";
require_once "./api/comentariosModel.php";
require_once "./model/categoriasModel.php";
require_once "./view/inicioView.php";
require_once "./view/header.php";
require_once "./view/revistasPorCategoria.php";


class visitController{

  private $categoriasModel;
  private $revistasModel;
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
    $this->detalleView = new detalleView();
    $this->revPorCategoriaView = new revistasPorCategoria();
    $this->comentariosModel = new comentariosModel();

  }


  function getRevistas(){
    $categorias = $this->categoriasModel->getCategorias();
    $revistas = $this->revistasModel->getRevistas();
    $this->revistasView->showRevistas($revistas,$categorias);
  }

  function getCategorias(){
    $categorias = $this->categoriasModel->getCategorias();
    $this->header->showCategorias($categorias);
  }

  function Home(){
    $categorias = $this->categoriasModel->getCategorias();
    $this->inicioView->Home($categorias);
  }

  function mostrarDetalle($id){
    $detalle =  $this->revistasModel->getDetalle($id);
    $revistas = $this->revistasModel->revistas();

    $this->detalleView->showDetalle($detalle, $revistas);
  }

  function getRevistasPorCategoria($id){
      $categorias = $this->categoriasModel->getCategorias();
      $revistas = $this->revistasModel->filtroPorCategoria($id);
      //var_dump($revistas);
      $this->revPorCategoriaView->showRevistasCategoria($revistas, $categorias);
  }
}
