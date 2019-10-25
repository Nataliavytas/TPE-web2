<?php
require_once "./view/revistasView.php";
require_once  "./view/detalleView.php";
require_once  "./model/revistasModel.php";
require_once "./model/categoriasModel.php";
require_once "./view/inicioView.php";
require_once "./view/header.php";


class visitController{

    private $revistasView;
    private $detalleView;
    private $inicioView;
    private $revistasModel;
    private $header;
    private $categoriasModel;
    private $filtro;
    private $arrFiltro;
    private $detalle;

  function __construct(){

    $this->inicioView = new inicioView();
    $this->revistasModel = new revistasModel();
    $this->revistasView = new revistasView();
    $this->header  = new header();
    $this->categoriasModel = new categoriasModel();
    $this->detalleView = new detalleView();
  }


  function getRevistas(){
  //  $this->checkLoggedIn(); HACER
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
      $detalle = $this->revistasModel->getDetalle($id);
    //  var_dump($detalle);
      $this->detalleView->showDetalle($detalle);
    
  }
}

