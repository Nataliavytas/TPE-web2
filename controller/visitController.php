<?php
require_once "./view/revistasView.php";
require_once  "./view/detalleView.php";
require_once  "./model/revistasModel.php";
require_once "./model/categoriasModel.php";
//require_once "./model/categoriasModel.php";
require_once "./view/inicioView.php";
require_once "./view/header.php";


class visitController{

  private $revistasView;
  private $detalleView;
  private $inicioView;
  private $revistasModel;
  private $header;
  private $categoriasModel;

  function __construct(){
   //$this->revistasView = new revistasView();
   // $this->detalleView = new detalleView();
    $this->inicioView = new inicioView();
  //  $this->categoriasModel = new categoriasModel();
    $this->revistasModel = new revistasModel();
    $this->revistasView = new revistasView();
    $this->header = new header();
    $this->categoriasModel = new categoriasModel();
  }
  function getCategorias(){
    $categorias = $this->categoriasModel->getCategorias();
    $this->header->getCategorias($categorias);
  }

  function getRevistas(){
    $revistas = $this->revistasModel->getRevistas();
    $this->revistasView->showRevistas($revistas);
  }

  function Home(){
    $this->inicioView->Home();
  }


  //function detalleCategorias(){
  //  $detalle = $this->model->filtroCategoria($id);
  //  $this->detalle->detalleCategorias($detalle);
  //}

  function filtrarCategoria(){
    $filtroCat = $this->model->filtroPorCategoria($id);
    $this->header->filtroPorCategoria($filtroCat);
  }

  //Este es el controller de todo lo que no tiene que ver con el admin
  //Desde aca controlamos el dropdown de categorias y los detalles de cada revista
  //tambien los filtros de la tabla y blabla
}
 ?>
