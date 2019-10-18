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

  function mostrarDetalle(){
    $id = $_GET['conseguirDetalle'];
    if (isset($id)){
      $this->detalle = $this->revistasModel->getDetalle($id);
      $this->detalleView->showDetalle($this->detalle);
    }
  }
 /* function filtrarCategoria(){
    $filtroCat = $this->model->filtroPorCategoria($id);
    $this->header->filtroPorCategoria($filtroCat);
  } */

  //Este es el controller de todo lo que no tiene que ver con el admin
  //Desde aca controlamos el dropdown de categorias y los detalles de cada revista
  //tambien los filtros de la tabla y blabla
}

